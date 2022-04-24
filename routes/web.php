<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PackageController;
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


Route::get('/travellove/outboundpackage', function(){
    return view('outboundpackage');
})->name('outboundpackage');

Route::get('/travellove/outboundpackage/singapore', function(){
    return view('/details/singapore');
})->name('singapore');
Route::get('/travellove/outboundpackage/dubai', function(){
    return view('/details/dubai');
})->name('dubai');
Route::get('/travellove/outboundpackage/indonesia', function(){
    return view('/details/indonesia');
})->name('indonesia');
Route::get('/travellove/outboundpackage/malaysia', function(){
    return view('/details/malaysia');
})->name('malaysia');
Route::get('/travellove/outboundpackage/thailand', function(){
    return view('/details/thailand');
})->name('thailand');
Route::get('/travellove/outboundpackage/maldives', function(){
    return view('/details/maldives');
})->name('maldives');
Route::get('/travellove/domesticticket', function(){
    return view('domesticticket');
})->name('domesticticket');

Route::get('/travellove/internationalticket', function(){
    return view('internationalticket');
})->name('internationalticket');
Route::get('/travellove/aboutus', function(){
    return view('aboutus');
})->name('aboutus');
Route::get('/travellove/enquiry', function(){
    return view('ticketenquiry');
})->name('doneway');
Route::post('/travellove/enquiry', function(){
    return view('ticketenquiry');
})->name('doneway');
// Route::get('/travellove/login', function(){
//     return view('login');
// })->name('login');

Route::get('/travellove', function(){
    return view('home');
})->name('travellove');
// Route::get('/travellove/domesticpackage/chitwan',function(){
//     return view('/details/chitwan');
// })->name('chitwan');

Route::get('/travellove/domesticpackage/lumbini',function(){
    return view('/details/lumbini');
})->name('lumbini');
Route::get('/travellove/domesticpackage/pokhara',function(){
    return view('/details/pokhara');
})->name('pokhara');

Route::get('/travellove/domesticpackage/mustang',function(){
    return view('/details/mustang');
})->name('mustang');
Route::get('/travellove/domesticpackage/janakpur',function(){
    return view('/details/janakpur');
})->name('janakpur');
Route::get('/travellove/domesticpackage/illam',function(){
    return view('/details/illam');
})->name('illam');
// Route::get('travellove/ticket/doneway',function(){
//     return view('domesticoneway');
// })->name('doneway');
// Route::post('travellove/ticket/doneway',function(){
//     return view('domesticoneway');
// })->name('doneway');
Route::get('/travellove/signup',[UserController::class,'create'])->name('signup');
Route::post('/travellove/signup/store',[UserController::class,'store'])->name('signup.store');
Route::get('/travellove/login',[UserController::class,'loginView'])->middleware('client')->name('login');
Route::post('/travellove/login/store',[UserController::class,'loginCheck'])->name('login.store');



Route::get('/travellove/domesticpackage', function(){
    return view('domesticpackage');
})->name('domesticpackage');

// Route::get('/travellove/domesticpackage/chitwan',function(){
//     return view('/details/chitwan');
// })->name('chitwan');
Route::get('/travellove/domesticpackage/chitwan',[PackageController::class,'create'])->name('packagecreate');
Route::get('/travellove/domesticpackage/chitwan/enquiry',[PackageController::class,'createview'])->name('packageenquiry');
Route::post('/travellove/domesticpackage/chitwan/enquiry',[PackageController::class,'store'])->name('enquired');

