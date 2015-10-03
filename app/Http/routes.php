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