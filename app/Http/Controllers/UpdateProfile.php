<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests\UserRequest;



class UpdateProfile extends Controller
{
    public function StaffViewUpdateProfile(Request $request)
    {
        $client = Auth::user();
        return view('Users.Admin.Profile.myProfile',compact('client'));
    }
 
    public function StaffUpdateProfile(Request $request)
    {
        $erer;
        $this->validate($request, [

            'name' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'in:M,F,O'],
            'dob' => ['required', 'string', 'date','before:-13 years'],
            'email' => ['string', 'email', 'max:255'],
            'address' => ['string'],
            'mobile' =>['string'],
            'zipCode'=>['integer'],
            'joinDate'=> ['required', 'string', 'date'],
            'role' => ['required', 'integer'],

            'current_password' => 'required|string',
            
            
        ]);
        $newPWD = $request->new_password;

        if ($newPWD !=''){
            $this->validate($request, [
                'new_password' => 'confirmed|min:8|string'
            ]);
        }
        $auth = Auth::user();
 
 // The passwords matches
        if (!Hash::check($request->get('current_password'), $auth->password)) 
        {
            return back()->with('error', "Current Password is Invalid");
        }
 
// Current password and new password same
        if (strcmp($request->get('current_password'), $request->new_password) == 0) 
        {
            return redirect()->back()->with("error", "New Password cannot be same as your current password.");
        }
 
        $user =  User::find($auth->id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->mobile = $request->mobile;
        $user->address = $request->address;
        $user->zipCode = $request->zipCode;
        $user->joinDate = $request->joinDate;
        $user->dob = $request->dob;
        $user->gender = $request->gender;
        $user->role = $request->role;

        $user->password = Hash::make($request->new_password);
        $user->save();
        return back()->with('message','successful');
    }
}
