<?php
use App\Medicine;

// Route::get('/', function () {
//     $med = \App\User::find(1);
//     foreach ($med->ratings as $comment) {
//         return $comment->rateable;
//     }
// });

Route::get('/', function () {
    $u = \App\User::find(1);
    foreach ($u->watch_lists as $comment) {
        return $comment;
    }
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
