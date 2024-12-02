<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get("/about", function() {
    return view ("about", [
        "name" => "Deda",
        "nickname" => "mraz"
        ]);
});

Route::get("/contacts", function() {
    return view ("contacts", [
        "phoneNumber" => "0641323322",
        "adress" => "Serbia"
    ]);
});
