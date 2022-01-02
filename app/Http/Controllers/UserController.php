<?php

namespace App\Http\Controllers;

use Illuminate\View\Middleware\ShareErrorsFromSession;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Senior;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

use function Ramsey\Uuid\v6;

class UserController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */

    public function updateProfileView()
    {
        $data = User::all();
        return view('updateProfile', ['data' => $data]);
    }

    public function updateProfile(Request $request)
    {
        $user = User::find($request->id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->gender = $request->input('gender');
        $user->birthdate = $request->birthdate;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->save();

        return Redirect('profile')->with('profileUpdated', 'Profile updated successfully !');
    }

    public function changePasswordView()
    {
        return view('changePassword');
    }


    public function changePassword(Request $request)
    {
        $user = User::find($request->id);

        if (Hash::check($request->oldPassword, $user->password)) {
            if ($request->newPassword == $request->confirmNewPassword) {
                $user->password = $request->newPassword;
                $user->save();

                return redirect('profile')->with('passwordChanged', 'Password changed successfully !');
            } else
                return redirect('changePassword')->with('differentNewPassword', 'Confirm new password must be the same as new password !');
        } else
            return redirect('changePassword')->with('wrongPassword', 'Wrong Password !');
    }

    public function create()
    {
        return view('testlogin');
    }

    public function store()
    {
        $credentials = request()->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        //ddd($attributes);

        if(auth()->attempt($credentials))
        {
            //redirect with a success flash message
            ddd('GOOD LOGIN');
            // return redirect('home')->with('success', 'Welcome Back!');
        }
        //if the auth failed
        throw ValidationException::withMessages([
            ddd('FAILED LOGIN')
            // 'errormsg' => 'Your email or password is invalid'
        ]);

    }

    public function adminCreate()
    {
        return view('admin.newCaretakerForm');
    }

    public function adminStore()
    {
        $attributes = request()->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6',
            'address' => 'required',
            'birthdate' => 'required',
            'gender' => 'required',
        ]);

        if(User::create($attributes))
        {
            //redirect with a success flash message
            return redirect('manageCaretakers');
        }
        //if failed
        throw ValidationException::withMessages([
            'errormsg' => 'invalid input, try again'
        ]);
    }

    public function edit(User $user)
    {
        return view('admin.editCaretaker', [
            'user' => $user,
        ]);
    }

    public function update(User $user)
    {
        $attributes = request()->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required',
            'birthdate' => 'required',
            'gender' => 'required',
        ]);
        
        $user->update($attributes);

        return redirect('manageCaretakers');
    }

    //to delete a caretaker record from the admin side
    public function destroyUser(User $user)
    {
        Senior::where('user_id', '=', $user->id)->update(['user_id' => null]);
        $user->delete();
        return back();
    }

    public function destroy()
    {
        //ddd('this is destroy');
        auth()->logout();
        return redirect('/')->with('success', 'See you again!');
    }

    public function seniorList()
    {
        $seniorList = Senior::where('user_id', Auth::id())->get();

        foreach ($seniorList as $seniorLists) {
            $age[] = Carbon::parse($seniorLists->senior_birthdate)->diff(Carbon::now())->y;
        }

        return view("seniorList", [
            "seniorList" => $seniorList,
            "seniorAge" => $age,
        ]);
    }
}
