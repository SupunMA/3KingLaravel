<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Plan;
use App\Models\User;
use App\Models\Land;
use App\Models\Loan;
use App\Models\Transaction;

class admin_HomeCtr extends Controller
{
   //protected $task;
    
   
 //Authenticate all Admin routes
    public function __construct()
    {
        $this->middleware('checkAdmin');
       // $this->task = new branches;
    }


//Dashboard
    public function checkAdmin()
    {
        $ClientsCount=User::where('users.role',0)->count();
        $LandCount = Land::count();
        $BranchesCount=Plan::count();
        $LoanCount=Loan::count();
        $TransCount=Transaction::count();
        return view('Users.Admin.home',compact('ClientsCount','LandCount','BranchesCount','LoanCount','TransCount'));
    }

    
}
