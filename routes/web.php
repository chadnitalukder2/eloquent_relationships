<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Phone;


use App\Models\Comments;
use App\Models\Post;
use App\Models\Category;

use App\Models\Mechanics;
use App\Models\Cars;
use App\Models\Owners;

use App\Models\County;

Route::get('/oneToOne', function () {
  
    //$phone = User::find(1);
    //$phone = User::find(2)->phone;
    //return $phone;

    //$user = Phone::find(1);
   // $data = Phone::find(2);
    //dd($data->toArray(), $data->userName_hasOne->toArray());
   // return $data;

    $users = User::all();
    $phones = Phone::all();
    //return $users;

   // dd( $users->toArray()[0]->phone() );

    //return view('welcome', compact('users'));
    return view('oneToOne', compact('users')); #data patanu hoy


});

Route::get('/oneToMany', function () {

        $comments = Post::find(1);
        $comments = Post::find(2)->comments;
        //return $comments;
    
        $post = Comments::find(1);
        $post = Comments::find(1)->post;
        //return $post;
    
        // $post = Post::all();
        $posts = Post::with('comments')->get();
        $comments = Comments::all();
        //return $posts;
    
        return view('oneToMany', compact('comments')); #data patanu hoy
    
});

Route::get('/manyToMany', function () {
        $posts = Post::all();
        //return $posts;

        $posts = Post::with('categories')->get();
        $categories = Category::with('posts')->get();
        //return $posts;
    
        return view('manyToMany', compact('categories')); #data patanu hoy
    
});  

Route::get('/hasOneThrough', function () {
   
    $mechanics = Mechanics::all();
    //return $mechanics;

    $mechanics = Mechanics::with('carOwner')->get();
    //return $mechanics;


    return view('hasOneThrough', compact('mechanics')); #data patanu hoy
});

Route::get('/hasManyThrough ', function () {
   
    $countries = County::all();
    //return $countries;

    $countries = County::with('posts')->get();
   // return $countries;


    return view('hasManyThrough', compact('countries')); #data patanu hoy
});




