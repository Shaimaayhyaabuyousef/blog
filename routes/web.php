<?php

use Illuminate\Support\Facades\Route;

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

Route ::get('about',function(){
    if(isset ($_GET['name']))
    $name=  $_GET['name'];
        else $name = "hasan";
    return view('about',compact('name'));
 } );

Route :: get ('Tasks',function(){
    $Tasks=['task1','task2','task3'];
    return view('Tasks',compact('Tasks'));
});

