<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    //
    function show() {
        $data= User::find(Auth::id());
        // dd($data);
        return view('main',[
            'user'=> $data
        ]);
    }
}
