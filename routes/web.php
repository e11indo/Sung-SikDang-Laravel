<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SungController;

Route::get('/',[SungController::class,'index']) -> name('home');

Route::get('brand',function(){
    return view('brand');
}) -> name('brand');

Route::get('menu',function(){
    return view('menu');
}) -> name('menu');

Route::get('navigation',function(){
    return view('navigation');
}) -> name('navigation');

Route::get('reservation',function(){
    return view('reservation');
}) -> name('reservation');

Route::get('inquiry',function(){
    return view('inquiry');
}) -> name('inquiry');

Route::get('notice',[SungController::class,'notice']) -> name('notice');

Route::get('notice_create',function(){
    return view('notice_create');
}) -> name('notice_create');

Route::post('notice_create',[SungController::class,'save']);
Route::get('notice_view/{id}',[SungController::class,'view']) -> name('notice_view');
Route::post('inquiry_save',[SungController::class,'inquiry']);

Route::get('reflect',function(){
    return view('reflect');
}) -> name('reflect');

Route::get('event',function(){
    return view('events.event');
}) -> name('event');

Route::get('event/num=1&thumnail=1',function(){
    return view('events.event_1');
}) -> name('event_1');


Route::get('review',[SungController::class,'review']) -> name('review');
Route::get('review_view/{id}',[SungController::class,'review_view']) -> name('review_view');
Route::get('review_create',function(){
    return view('review_create');
}) -> name('review_create');

Route::post('/review_save',[SungController::class,'review_save']);
Route::post('/review_search',[SungController::class,'review_search']);
Route::post('/review_modify/{id}',[SungController::class,'review_modify']);
Route::post('/review_delete/{id}',[SungController::class,'review_delete']);
Route::post('/review_update/{id}',[SungController::class,'review_update']);

