<?php

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
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
//------home page of job search
Route::get('/', function () {
    return view('index');
});

//------admin login page
Route::get('/admin', function () {
    return view('adminlog');
});

//----- add company 
Route::get('/addcompany', function () {
    return view('admin.addcompany');
});

//------view company
Route::get('/viewdetail', function () {
    return view('admin.viewdetail');
});

//------add vacancy
Route::get('/addvac', function () {
    return view('admin.addvac');
});

//------view vacancy
Route::get('/viewvac', function () {
    return view('admin.viewvac');
});

//------admin dashboard
Route::get('/admindash', function () {
    return view('admin.admin-dash');
});

//------admin view all application
Route::get('/viewAllApp', function () {
    return view('admin.viewAllApplication');
});

//----- add company 
Route::get('/feedback', function () {
    return view('admin.viewfeedback');
});

//------user login page
Route::get('/userlog', function () {
    return view('userlog');
});


//------user registraion page
Route::get('/userreg', function () {
    return view('userreg');
});


//-----profile
Route::get('/adminpro', function () {
    return view('admin.profile');
});

Route::get('/readmore', function () {
    return view('readmore');
});

Route::get('/addresume', function () {
    return view('addresume');
});

//-----profile
Route::get('/profile', function () {
    return view('profile');
});

//-----my Application
Route::get('/myapplication', function () {
    return view('myapplication');
});

//-----success page
Route::get('/success', function () {
    return view('success');
});

//-----contact page
Route::get('/about', function () {
    return view('about');
}); 

//---- check admin login
Route::post('chklog','App\Http\Controllers\adminController@chklog');

//-----check user login
Route::post('chkuser','App\Http\Controllers\candidateController@chkuser');

//------user regiter
Route::post('userreg','App\Http\Controllers\candidateController@userreg');

//---- add company
Route::post('addcom','App\Http\Controllers\insertController@addcom');

//-----add vacancy
Route::post('addvac','App\Http\Controllers\insertController@addvac');

//-------delete record from company details
Route::get('delcom/{cid}','App\Http\Controllers\delController@delcom');

//-----delete record from add vacancies
Route::get('delid/{id}','App\Http\Controllers\delController@delvac');

//--------user session clear
Route::get('/logout','App\Http\Controllers\candidateController@logout');

//------- admin session clear
Route::get('/adminlogout','App\Http\Controllers\adminController@adminlogout');

//-------read more get data to show vacancy details
Route::get('readmore/{id}','App\Http\Controllers\adminController@readmore');

// -----upload resume
Route::post('addresume','App\Http\Controllers\candidateController@addresume');

// -----upload Picture 
Route::post('addpic','App\Http\Controllers\candidateController@addpic');

// -----apply form 
Route::get('apply/{id}','App\Http\Controllers\insertController@apply');

// -----view profile user for admin 
Route::get('/viewProfile/{uid}','App\Http\Controllers\adminController@userprofile');

// -----update phone number 
Route::post('/updatePhone','App\Http\Controllers\updateController@updatePhone');

// -----update password 
Route::post('/updatePass','App\Http\Controllers\updateController@updatePass');

// -----update password 
Route::post('/updateQual','App\Http\Controllers\updateController@updateQual');

// -----feedback form 
Route::post('feedback','App\Http\Controllers\adminController@feedback');