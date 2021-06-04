<?php

use Illuminate\Http\Request;

Route::get('contact',function(){
	return view('contact::contact');
});

Route::post('contact',function(Request $request){
	return [
		'data'=>$request->all(),
		'mail'=>config('contact.email')
	];
});