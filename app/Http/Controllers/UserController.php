<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        dd('Meine erste Laravelfunktion');
    }
    public function test(){
        dd(User::get());
    }
    public function blabla(){
        return view('test');
    }
}
