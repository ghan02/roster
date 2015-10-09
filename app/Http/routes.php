<?php

Html::macro('navlink', function($name, $title = null,$parameters = array(), $subHeader = null){
    $active = ( URL::current() == URL::route($name, $parameters) ) ? ' class="active"':'';
    return '<li'.$active.'> <a href ='.URL::route($name, $parameters).'> '.$title.$subHeader .'</a> </li>';
});

Route::get('/', function () {
    return view('welcome');
});
Route::get('/',['as'=>'pages.home','uses'=>'PagesController@home']);

Route::get('login',['as'=>'pages.login','uses'=>'PagesController@login']);

// login user 
Route::post('login',['as'=>'user.login','uses'=>'SessionsController@login']);
// logout user
Route::get('logout',['as'=>'user.logout','uses'=>'SessionsController@logout']);

// profile options
$router->group(['middleware'=>'auth'], function($router) {
	Route::get('profile',['as'=>'user.profile','uses'=>'PagesController@profile']);
	Route::get('profile/events',['as'=>'user.events','uses'=>'PagesController@myevents']);
	Route::get('profile/password',['as'=>'user.password','uses'=>'PagesController@password']);
	Route::resource('events','RostereventController');
	Route::get('getUserEvents','PagesController@getUserEvents');
	Route::get('getApprovedUserEvents','PagesController@getApprovedUserEvents');
	Route::get('downloadfile/{file}','PagesController@downloadfile');
});

Route::get('roster/events',['as'=>'roster.events','uses'=>'PagesController@rosterevents']);
Route::get('search/events/{term}/{myevents?}',['as'=>'events.search','uses'=>'PagesController@searchevents']);

// show event info for all users 
Route::get('users/event/{id}',['as'=>'events.show','uses'=>'PagesController@showEvent']);
