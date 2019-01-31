<?php
/**
 * Created by PhpStorm.
 * User: mantey
 * Date: 31/01/2019
 * Time: 3:26 PM
 */

// mantey\contactform\src\routes\web.php

Route::group(['namespace' => 'mantey\contactform\Http\controllers', 'middleware' => ['web']], function(){
    Route::get('contact', 'ContactFormController@index');
    Route::post('contact', 'ContactFormController@sendMail')->name('contact');
});