<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;

use App\Models\branches;

class homePageController extends Controller
{
    
    
    public function index()
    {
        $bdata = branches::all();
        //dd($bdata);
        return view('Home.welcome',compact('bdata'));
        
    }

    
    public function register2()
    {
        $branch = branches::all();
        // dd($branch);
        return view('auth.register',compact('branch'));
        
    }

   
}