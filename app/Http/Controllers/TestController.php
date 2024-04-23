<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class TestController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('bar');
    }
    public function foo(User $user){

        if (!Gate::allows('access-admin')) {
            abort(403);
        }

        return view('test.foo');
    }
    public function bar(){

        return view('test.bar');
    }
}
