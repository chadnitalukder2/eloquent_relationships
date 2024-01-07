<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Phone;


Route::get('/', function () {
    $phone = User::find(1);
    $phone = User::find(2)->phone;
    //return $phone;

    $user = Phone::find(1);
    $user = Phone::find(2)->user;
    //return $user;

    $users = User::all();
    $phones = Phone::all();
    //return $users;


    //return view('welcome', compact('users'));
    return view('welcome', compact('phones'));
});
