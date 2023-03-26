<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Client\Request;
use Spatie\LaravelIgnition\Http\Requests\UpdateConfigRequest;

use App\Http\Controllers\TaskController;

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

Route :: post('delete/{id}',function($id)
{
    DB::table('tasks')->where ('id',$id )->delete();
    return redirect()->back();

});

Route :: post('insert',function( )
{
    DB::table('tasks')->insert([
        'name' => $_REQUEST['name'],
        'created_at' => now(),
        'updated_at'=>now()
    ]);
    return redirect()->back();

});
Route :: post('edit/{id}',function ($id)
    {
        $tasks = DB::table('tasks')->where('id', '=', $id)->find($id);
        return view('edit', compact('tasks'));
    }
);

Route :: put( 'update/{id}',function ($id)
    {

        $data = array(
            'name' =>  $_REQUEST['name']
        );

        DB::table('tasks')->where('id', $id)->update($data);

    return redirect( )->with('info', 'update successfully!');
});

Route :: get ('front',function(){

});

Route::put('update/{id}',[TaskController::class, 'update']);

