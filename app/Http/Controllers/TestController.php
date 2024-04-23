<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Mail\TestMarrkDown;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;

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

        // $user = ['email'=>'users@test.com', 'name'=>'Monsieur Test'];

        // Mail::to($user['email'])->send(new TestMail($user));

        Mail::to('test@gmail.com')->send(new TestMarrkDown());
        return view('test.bar');
    }
}
