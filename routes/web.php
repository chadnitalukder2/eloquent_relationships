<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Phone;


Route::get('/', function () {
    //$phone = User::find(1);
    //$phone = User::find(2)->phone;
    //return $phone;

    //$user = Phone::find(1);
    $data = Phone::find(2);
    //dd($data->toArray(), $data->userName_hasOne->toArray());
   // return $data;

    $users = User::all();
    $phones = Phone::all();
    //return $users;

   // dd( $users->toArray()[0]->phone() );

    //return view('welcome', compact('users'));
    return view('welcome', compact('users')); #data patanu hoy
});
