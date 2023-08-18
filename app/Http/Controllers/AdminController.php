<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index2()
    {
        return view ('admin.dashboard');
    }
    public function users()
    {
        return view('admin.users');
    }

    public function donors()
    {
        return view('admin.donors');
    }

    public function bloodRequests()
    {
        return view('admin.bloodRequests');
    }


}
