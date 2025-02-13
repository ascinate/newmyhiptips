<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class Employees extends Controller
{
  

    public function index()
    {
       
        $employees = DB::table('employee_master')->get();
        return view('admin.employees', compact('employees'));
       
    }

    public function add()
    {
       
        
        return view('admin.employeesadd');
       
    }

   

}    