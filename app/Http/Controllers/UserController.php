<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\senior;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Exception;

class UserController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */

    // USER SIDE FUNCTIONS
    //===============================================//
    public function profileView()
    {
        return view('profile', [
            'user' => auth()->user(),
        ]);
    }

    public function homeView()
    {
        return view('home');
    }

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

    public function seniorList()
    {
        try
        {
            $seniorList = senior::where('user_id', Auth::id())->get();

            foreach ($seniorList as $seniorLists) {
                $age[] = Carbon::parse($seniorLists->senior_birthdate)->diff(Carbon::now())->y;
            }
    
            return view("seniorList", [
                "seniorList" => $seniorList,
                "seniorAge" => $age,
            ]);
        }
        catch(Exception $e)
        {
            return view("nosenior");
        }
        
    }
    

    // ADMIN SIDE FUNCTIONS
    //===============================================//
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

    public function adminDestroy(User $user)
    {
        senior::where('user_id', '=', $user->id)->update(['user_id' => null]);
        $user->delete();
        return back();
    }
}
