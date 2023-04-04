<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Client\Request;
use Spatie\LaravelIgnition\Http\Requests\UpdateConfigRequest;

use App\Http\Controllers\TaskController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

    return view('layouts.Dashboard');
});


Route::get('index', function () {

    $tasks = DB::table('tasks')->get();
    return view('index',compact('tasks'));
});

Route ::get('about',function(){
    if(isset ($_GET['name']))
    $name=  $_GET['name'];
        else $name = "hasan";
    return view('about',compact('name'));
 } );

//Route :: get ('/Tasks',[TaskController :: class , 'index']);
Route::get ('index.html',function(){
    return view('index');
});
Route::delete('delete/{id}',[TaskController::class, 'destroy'])->name('task.delete');
Route::post('insert' ,[TaskController::class, 'store'])->name('task.insert');
Route::post('edit/{id}',[TaskController::class, 'edit']);
Route::put('update/{id}',[TaskController::class, 'update']);



/*Route :: get ('front',function()*/

