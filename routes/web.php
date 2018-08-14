<?php

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
Route::get('/','LogInController@logpage');
Route::post('/','LogInController@login');
Route::get('/Reply','ComplaintsAndInquiriesController@ReplyPage');
Route::post('/Reply','ComplaintsAndInquiriesController@ReplyPage');
Route::get('/Inquiries','ComplaintsAndInquiriesController@InquiriesPage');
Route::post('/Inquiries','ComplaintsAndInquiriesController@PostInquiry');
Route::get('/ComplaintsAndInquiries','ComplaintsAndInquiriesController@ComplaintsAndInquiriesPage');
Route::post('/Replies','ComplaintsAndInquiriesController@RepliesPage');
Route::get('/Replies','ComplaintsAndInquiriesController@RepliesPage');
Route::get('/HospitalsView','LogInController@HospitalsPage');
Route::get('/Submit','ComplaintsAndInquiriesController@SubmitPage');
Route::post('/Reply','ComplaintsAndInquiriesController@comment');

/*Route::get('/', function () {
    return view('index');
});*/   

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
