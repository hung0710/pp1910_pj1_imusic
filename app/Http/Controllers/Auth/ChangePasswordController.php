<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChangePasswordRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ChangePasswordController extends Controller
{
    public function index()
    {
        return view('auth.changePassword');
    } 
    public function ChangePassword(Request $request)
    {
        $currentPassword = $request->password;
        $user = auth()->user();
            
            if (!(Hash::check($request->get('current-password'), $user->password))) {
                // The passwords matches
                return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
            }
    
            if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
                //Current password and new password are same
                return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
            }
    
            $validatedData = $request->validate([
                'current-password' => 'required',
                'new-password' => 'required|string|min:8|confirmed',
            ]);
    
            //Change Password
            $user = auth()->user();
            $user->password = bcrypt($request->get('new-password'));
            $user->save();
                 return redirect()->back()->with("success","Password changed successfully !");
    }
}