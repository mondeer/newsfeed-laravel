<?php

Route::get('/', 'BlogCtrl@show');

Route::post('/hire/imond', 'HireCtrl@hire');

Route::get('/newblog', 'BlogCtrl@create');

Route::post('/newblog', 'BlogCtrl@postCreate');

Route::get('/viewblog/{id}', array('as'=>'viewblog', 'uses'=>'BlogCtrl@showblog'));

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/imondwork', function(){
  return view('work');
});

Route::get('/imondcontact', function(){
  return view('imondcontact');
});

Route::get('imond/sms', 'SmsCtrl@sms_init');

Route::post('imond/sms', 'SmsCtrl@imondSend');


Route::get('imond/contact', 'ContactCtrl@index');

Route::post('imond/contact', 'ContactCtrl@saveContact');

Route::get('/wiki', 'WikiCtrl@wikiGrab');
