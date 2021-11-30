<?php

namespace App\Http\Controllers;

use Illuminate\View\Middleware\ShareErrorsFromSession;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

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

        echo "<script>";
        echo "alert('Profile updated successfully !');";
        echo "</script>";
        
        return view('profile');
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

                echo "<script>";
                echo "alert('Password changed successfully !');";
                echo "</script>";

                return view('profile');
            } else {
                echo "<script>";
                echo "alert('Confirm new password must be the same as new password !');";
                echo "</script>";

                return view('changePassword');
            }
        } else {
            echo "<script>";
            echo "alert('Wrong Password !');";
            echo "</script>";

            return view('changePassword');
        }
    }
}
