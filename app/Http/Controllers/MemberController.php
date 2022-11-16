<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    public function card()
    {
        return view("member/card", );
    }

    public function list() {

        $users = DB::table("users")->get();

        return view("member/list", [
            'users' => $users,
        ]);
    }
}
