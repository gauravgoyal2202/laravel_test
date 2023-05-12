<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Tenant;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $users = User::get();
        return view('welcome', compact('users'));
    }
}
