<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin', ['section' => 'dashboard']);
});

Route::get('/admin/{section?}', function ($section = 'dashboard') {
    $validSections = ['dashboard', 'users', 'reports', 'settings', 'products', 'orders'];

    if (!in_array($section, $validSections)) {
        abort(404);
    }

    return view('admin', ['section' => $section]);
})->where('section', 'dashboard|users|reports|settings|products|orders')->name('admin');