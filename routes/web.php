<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ChitwanpackageController;
use App\Http\Controllers\IllampackageController;
use App\Http\Controllers\JanakpurpackageController;
use App\Http\Controllers\LumbinipackageController;
use App\Http\Controllers\MustangpackageController;
use App\Http\Controllers\PokharapackageController;
use App\Http\Controllers\DubaipackageController;
use App\Http\Controllers\IndonesiapackageController;
use App\Http\Controllers\MalaysiapackageController;
use App\Http\Controllers\MaldivespackageController;
use App\Http\Controllers\SingaporepackageController;
use App\Http\Controllers\ThailandpackageController;
use App\Http\Controllers\OnewaydomesticController;
use App\Http\Controllers\TwowaydomesticController;
use App\Http\Controllers\OnewayoutboundController;
use App\Http\Controllers\TwowayoutboundController;
use App\Http\Controllers\DB;
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

Route::get('/travellove/domesticpackage', function(){
    return view('domesticpackage');
})->name('domesticpackage');
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



Route::get('/travellove', function(){
    return view('home');
})->name('travellove');
Route::get('/travellove/domesticpackage/chitwan',function(){
    return view('/details/chitwan');
})->name('chitwan');
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


// Route::get('/travellove/signup',[UserController::class,'create'])->name('signup');
// Route::post('/travellove/signup/store',[UserController::class,'store'])->name('signup.store');
// Route::get('/travellove/login',[UserController::class,'loginView'])->middleware('client')->name('login');
// Route::post('/travellove/login/store',[UserController::class,'loginCheck'])->name('login.store');


Route::post('/travellove/domesticpackage/chitwan',[ChitwanpackageController::class,'create'])->name('chitwanpackagecreate');
Route::post('/travellove/domesticpackage/chitwan/enquiry',[ChitwanpackageController::class,'createview'])->name('chitwanenquirypackage');
Route::post('/travellove/domesticpackage/chitwan/enquiryform',[ChitwanpackageController::class,'store'])->name('chitwanenquired');

Route::post('/travellove/domesticpackage/illam',[IllampackageController::class,'create'])->name('illampackagecreate');
Route::post('/travellove/domesticpackage/illam/enquiry',[IllampackageController::class,'createview'])->name('illamenquirypackage');
Route::post('/travellove/domesticpackage/illam/enquiryform',[IllampackageController::class,'store'])->name('illamenquired');

Route::post('/travellove/domesticpackage/janakpur',[JanakpurpackageController::class,'create'])->name('janakpurpackagecreate');
Route::post('/travellove/domesticpackage/janakpur/enquiry',[JanakpurpackageController::class,'createview'])->name('janakpurenquirypackage');
Route::post('/travellove/domesticpackage/janakpur/enquiryform',[JanakpurpackageController::class,'store'])->name('janakpurenquired');

Route::post('/travellove/domesticpackage/lumbini',[LumbinipackageController::class,'create'])->name('lumbinipackagecreate');
Route::post('/travellove/domesticpackage/lumbini/enquiry',[LumbinipackageController::class,'createview'])->name('lumbinienquirypackage');
Route::post('/travellove/domesticpackage/lumbini/enquiryform',[LumbinipackageController::class,'store'])->name('lumbinienquired');

Route::post('/travellove/domesticpackage/mustang',[MustangpackageController::class,'create'])->name('mustangpackagecreate');
Route::post('/travellove/domesticpackage/mustang/enquiry',[MustangpackageController::class,'createview'])->name('mustangenquirypackage');
Route::post('/travellove/domesticpackage/mustang/enquiryform',[MustangpackageController::class,'store'])->name('mustangenquired');

Route::post('/travellove/domesticpackage/pokhara',[PokharapackageController::class,'create'])->name('pokharapackagecreate');
Route::post('/travellove/domesticpackage/pokhara/enquiry',[PokharapackageController::class,'createview'])->name('pokharaenquirypackage');
Route::post('/travellove/domesticpackage/pokhara/enquiryform',[PokharapackageController::class,'store'])->name('pokharaenquired');

Route::post('/travellove/outboundpackage/dubai',[DubaipackageController::class,'create'])->name('dubaipackagecreate');
Route::post('/travellove/outboundpackage/dubai/enquiry',[DubaipackageController::class,'createview'])->name('dubaienquirypackage');
Route::post('/travellove/outboundpackage/dubai/enquiryform',[DubaipackageController::class,'store'])->name('dubaienquired');

Route::post('/travellove/outboundpackage/indonesia',[IndonesiapackageController::class,'create'])->name('indonesiapackagecreate');
Route::post('/travellove/outboundpackage/indonesia/enquiry',[IndonesiapackageController::class,'createview'])->name('indonesiaenquirypackage');
Route::post('/travellove/outboundpackage/indonesia/enquiryform',[IndonesiapackageController::class,'store'])->name('indonesiaenquired');

Route::post('/travellove/outboundpackage/malaysia',[MalaysiapackageController::class,'create'])->name('malaysiapackagecreate');
Route::post('/travellove/outboundpackage/malaysia/enquiry',[MalaysiapackageController::class,'createview'])->name('malaysiaenquirypackage');
Route::post('/travellove/outboundpackage/malaysia/enquiryform',[MalaysiapackageController::class,'store'])->name('malaysiaenquired');

Route::post('/travellove/outboundpackage/maldives',[MaldivespackageController::class,'create'])->name('maldivespackagecreate');
Route::post('/travellove/outboundpackage/maldives/enquiry',[MaldivespackageController::class,'createview'])->name('maldivesenquirypackage');
Route::post('/travellove/outboundpackage/maldives/enquiryform',[MaldivespackageController::class,'store'])->name('maldivesenquired');

Route::post('/travellove/outboundpackage/singapore',[SingaporepackageController::class,'create'])->name('singaporepackagecreate');
Route::post('/travellove/outboundpackage/singapore/enquiry',[SingaporepackageController::class,'createview'])->name('singaporeenquirypackage');
Route::post('/travellove/outboundpackage/singapore/enquiryform',[SingaporepackageController::class,'store'])->name('singaporeenquired');


Route::post('/travellove/outboundpackage/thailand',[ThailandpackageController::class,'create'])->name('thailandpackagecreate');
Route::post('/travellove/outboundpackage/thailand/enquiry',[ThailandpackageController::class,'createview'])->name('thailandenquirypackage');
Route::post('/travellove/outboundpackage/thailand/enquiryform',[ThailandpackageController::class,'store'])->name('thailandenquired');


Route::get('/travellove/internationalticket', function(){
    return view('internationalticket');
})->name('internationalticket');
Route::get('/travellove/aboutus', function(){
    return view('aboutus');
})->name('aboutus');
// Route::get('/travellove/enquiry', function(){
//     return view('ticketenquiry');
// })->name('doneway');
// Route::post('/travellove/enquiry', function(){
//     return view('ticketenquiry');
// })->name('doneway');

Route::get('/travellove/domesticticket', function(){
    return view('domesticticket');
})->name('domesticticket');

Route::post('/travellove/domesticticket/oneway',[OnewaydomesticController::class,'store'])->name('onewaydomestic');
Route::post('/travellove/domesticticket/oneway/enquiry/{id}',[OnewaydomesticController::class,'update'])->name('onewaydomesticenquired');

Route::post('/travellove/domesticticket/twoway',[TwowaydomesticController::class,'store'])->name('twowaydomestic');
Route::post('/travellove/domesticticket/twoway/enquiry/{id}',[TwowaydomesticController::class,'update'])->name('twowaydomesticenquired');

Route::get('/travellove/outboundticket', function(){
    return view('internationalticket');
})->name('outboundticket');

Route::post('/travellove/outboundticket/oneway',[OnewayoutboundController::class,'store'])->name('onewwayoutbound');
Route::post('/travellove/outboundticket/oneway/enquiry/{id}',[OnewayoutboundController::class,'update'])->name('onewayoutboundenquired');

Route::post('/travellove/outboundticket/twoway',[TwowayoutboundController::class,'store'])->name('twowayoutbound');
Route::post('/travellove/outboundticket/twoway/enquiry/{id}',[TwowayoutboundController::class,'update'])->name('twowayoutboundenquired');


Route::get('/travellove/admin/ticket',function(){
    return view('adminside.ticketnavbar');
});
Route::get('/travellove/admin/package',function(){
    return view('adminside.packagenavbar');
});

Route::get('/travellove/admin/dashboard',function(){
    return view('adminside.dashboard');
});
Route::get('/travellove/admin/ticket/onewaydomestic',[OnewaydomesticController::class,'show'])->name('onewaydomesticticket');
Route::get('/travellove/admin/ticket/twowaydomestic',[TwowaydomesticController::class,'show'])->name('twowaydomesticticket');
Route::get('/travellove/admin/ticket/onewayoutbound',[OnewayoutboundController::class,'show'])->name('onewayoutboundticket');
Route::get('/travellove/admin/ticket/twowayoutbound',[TwowayoutboundController::class,'show'])->name('twowayoutboundticket');

Route::get('/travellove/admin/ticket/onewaydomestic_delete/{onewaydomestic}',[OnewaydomesticController::class,'Delete'])->name('deleteOnewaydomestic');
Route::post('/travellove/admin/ticket/onewaydomestic_edit/{onewaydomestic}',[OnewaydomesticController::class,'Edit'])->name('editOnewaydomestic');
Route::get('/travellove/admin/ticket/onewaydomestic_update/{onewaydomestic}',[OnewaydomesticController::class,'updateadmin'])->name('updateOnewaydomestic');
Route::get('/travellove/admin/ticket/onewaydomestic_add',[OnewaydomesticController::class,'new'])->name('newonewaydomesticenquiry');
Route::post('/travellove/admin/ticket/onewaydomestic_addform',[OnewaydomesticController::class,'storeadmin'])->name('newonewaydomesticenquired');

Route::get('/travellove/admin/ticket/twowaydomestic_delete/{twowaydomestic}',[TwowaydomesticController::class,'Delete'])->name('deleteTwowaydomestic');
Route::post('/travellove/admin/ticket/twowaydomestic_edit/{twowaydomestic}',[TwowaydomesticController::class,'Edit'])->name('editTwowaydomestic');
Route::get('/travellove/admin/ticket/twowaydomestic_update/{twowaydomestic}',[TwowaydomesticController::class,'updateadmin'])->name('updateTwowaydomestic');
Route::get('/travellove/admin/ticket/twowaydomestic_add',[TwowaydomesticController::class,'new'])->name('newtwowaydomesticenquiry');
Route::post('/travellove/admin/ticket/twowaydomestic_addform',[TwowaydomesticController::class,'storeadmin'])->name('newtwowaydomesticenquired');

Route::get('/travellove/admin/ticket/onewayoutbound_delete/{onewayoutbound}',[OnewayoutboundController::class,'Delete'])->name('deleteOnewayoutbound');
Route::post('/travellove/admin/ticket/onewayoutbound_edit/{onewayoutbound}',[OnewayoutboundController::class,'Edit'])->name('editOnewayoutbound');
Route::get('/travellove/admin/ticket/onewayoutbound_update/{onewayoutbound}',[OnewayoutboundController::class,'updateadmin'])->name('updateOnewayoutbound');
Route::get('/travellove/admin/ticket/onewayoutbound_add',[OnewayoutboundController::class,'new'])->name('newonewayoutboundenquiry');
Route::post('/travellove/admin/ticket/onewayoutbound_addform',[OnewayoutboundController::class,'storeadmin'])->name('newonewayoutboundenquired');

Route::get('/travellove/admin/ticket/twowayoutbound_delete/{twowayoutbound}',[TwowayoutboundController::class,'Delete'])->name('deleteTwowayoutbound');
Route::post('/travellove/admin/ticket/twowayoutbound_edit/{twowayoutbound}',[TwowayoutboundController::class,'Edit'])->name('editTwowayoutbound');
Route::get('/travellove/admin/ticket/twowayoutbound_update/{twowayoutbound}',[TwowayoutboundController::class,'updateadmin'])->name('updateTwowayoutbound');
Route::get('/travellove/admin/ticket/twowayoutbound_add',[TwowayoutboundController::class,'new'])->name('newtwowayoutboundenquiry');
Route::post('/travellove/admin/ticket/twowayoutbound_addform',[TwowayoutboundController::class,'storeadmin'])->name('newtwowayoutboundenquired');
