<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\Plan;

use App\Models\Payment;


class userController extends Controller
{
    public function checkUser()
    {
       
        //dd($clients);
        $coaches=User::where('users.role',2)->get();
        
        return view('Users.User.home',compact('coaches'));
    }


    public function deleteUser($userID)
    {
        //dd($branchID);
        $delete = User::find($userID);
        $delete->delete();
        return redirect()->back()->with('message','successful');
    }

    //view customer plans
    public function allPlanView(Request $request)
    {
        $plans = Plan::all();
        return view('Users.User.Plans.plan',compact('plans'));
    }

    
    //Select plan
    public function CustomerSelectPlan(Request $request)
    {
        
        $userId = Auth::id();
        $request->validate([
            'planID' => ['required']
        ]);

        User::where('id', $userId )
        ->update([
                    'refPlan' => $request->planID
                ]);

        return redirect()->back()->with('message','successful');

    }


    //makePayments
    public function makePaymentsView(Request $request)
    {
        
        $plans = Plan::all();
        
        return view('Users.User.Payment.pay',compact('plans'));
    }


    public function makePayments(Request $request)
    {
        $request->validate([
            'clientID' => ['required','integer'],
            'planID' => ['required','integer'],
            'payDate' => ['required', 'string', 'date'],
            
        ]);

        $payment = new Payment();
        $payment->clientID = $request->clientID;
        $payment->planID = $request->planID;
        $payment->payDate = $request->payDate;
       
        if( $payment->save() ){
            return redirect()->back()->with('message','successful');
        }else{
            return redirect()->back()->with('message','Failed');
        }
    }


}
