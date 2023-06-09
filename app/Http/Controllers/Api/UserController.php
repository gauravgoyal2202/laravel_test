<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $tenant = $request->tenant;
        $users = User::where('tenant_id',$tenant->id)->get();
        return response()->json($users);
    }
}
