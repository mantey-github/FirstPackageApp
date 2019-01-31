Laravel Contact Form
==============
This package is a simple laravel package for embedding contact form into your laravel application.

# Installation

Edit your composer.json file, add this in the require property:

    "mantey/contactform": "1.*"
    
fetch the package by:

    composer update
    
Add the service provider in your config/app.php file

    'mantey\contactform\ContactFormServiceProvider::class'

Publish the package

    php artisan vendor:publish


