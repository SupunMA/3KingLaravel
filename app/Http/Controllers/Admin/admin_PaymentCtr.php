<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Payment;
use App\Models\Plan;


class admin_PaymentCtr extends Controller
{
   //protected $task;
    
   
 //Authenticate all Admin routes
    public function __construct()
    {
        $this->middleware('checkAdmin');
       // $this->task = new branches;
    }


//Land

    public function pendingPaymentList()
    {
        $clients=User::where('users.role',0)->get();
        $payments=Payment::all();
        $plans=Plan::all();
        return view('Users.Admin.Payment.pendingPayment',compact('clients','payments','plans'));
    }

    // public function allLand()
    // {
    //     //$clients=User::where('users.role',0)->get(['id', 'name','NIC']);
    //     $landsAndClients = Land::join('users','users.id','=','lands.ownerID')
    //     ->where('users.role',0)->get(['users.id', 'users.name','users.NIC','lands.*']);
    //     //->join('table1','table1.id','=','table3.id');
    //     return view('Users.Admin.Lands.allLands',compact('landsAndClients'));
    // }

    // public function addingLand(Request $data)
    // {
    //      $data->validate([
    //         'ownerID' =>'required',
    //         'landValue' =>'required','min:100000','max:10000000'
    //      ]);
    //     $user = Land::create($data->all());
    //     return redirect()->back()->with('message','successful');
    //     //->route('your_url_where_you_want_to_redirect');
    // }

    // public function deleteLand($landID)
    // {
    //     //dd($branchID);
    //     $delete = Land::find($landID);
    //     $delete->delete();
    //     return redirect()->back()->with('message','successful');
    // }

    // public function updateLand(Request $data)
    // {
    //     $data->validate([
    //         'landValue' =>'required','min:100000','max:10000000',
    //      ]);
    //     Land::where('landID', $data->landID)
    //     ->update(['landValue' => $data->landValue,
    //             'landDetails' => $data->landDetails,
    //             'landMap' => $data->landMap,
    //             'landAddress' => $data->landAddress
    //         ]);
    //     return redirect()->back()->with('message','successful');
    // }




}