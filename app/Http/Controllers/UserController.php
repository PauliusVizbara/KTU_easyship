<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    public function index()
    {
        $users = User::all();

        foreach($users as $user){
            dump($user->shipments);
        }

        return view('clients.index', compact('users'));

    }


}
