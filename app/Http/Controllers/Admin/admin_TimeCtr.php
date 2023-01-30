<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Plan;
use App\Models\Slot;
use App\Models\CoachClient;
use App\Models\Timetable;
use App\Models\Payment;




class admin_TimeCtr extends Controller
{
   //protected $task;
    
   
 //Authenticate all Admin routes
    public function __construct()
    {
        $this->middleware('checkAdmin');
       // $this->task = new branches;
    }


//Dashboard
    public function allTimeTable()
    {
        $coaches=User::where('users.role',2)->get();
        $clients=User::where('users.role',0)->get();
        $plans=Plan::all();
        $slots=Slot::all();
        $tasks=CoachClient::all();
        $payment=Payment::all();
        $timeTables=Timetable::all();
        
        // dd($payment);
        return view('Users.Admin.Timetable.allTime',compact('coaches','plans','slots','tasks','payment','timeTables','clients'));

    }

    
}
