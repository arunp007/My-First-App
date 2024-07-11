<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostsController;

use App\Http\Controllers\ArticlesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about/{id}/{name}', function($id, $name){
    //  echo request("id");
    //  echo request("test");
    //  die;
    
    $data = [
        "message" => "This is a message",
        "total_price" => 2500,
        "items" => [
            "mango", "orange", "grapes",
        ],
        "id" => $id,
        "name" => $name


    ];
    return view('about', $data);
});

Route::get('/contact', function(){
    return view('/contact');
});

Route::get("/posts/{id}", [PostsController::class, 'index']);



Route::get('/contact_us', function(){
    return view('/contact_us');
});

Route::get('/about_us', function(){
    return view("/about_us");
});

Route::get('/career', function(){
    return view("/career");
});

Route::get('/articles', [ArticlesController::class, 'index']);

Route::get('/articles/create', [ArticlesController::class, 'create']);

Route::post('/articles', [ArticlesController::class, 'store']);

Route::get('/articles/{article}', [ArticlesController::class, 'show']);

Route::get('/articles/{article}/edit', [ArticlesController::class, 'edit']);

Route::put('/articles/{article}', [ArticlesController::class, 'update']);

Route::delete('articles/{article}', [ArticlesController::class, 'destroy']);