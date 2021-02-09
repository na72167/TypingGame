<?php

// RouteクラスとAuthクラスは名前空間での指定がいらない。
// https://kohkimakimoto.hatenablog.com/entry/2014/01/17/153750

// public function auth(array $options = [])
// {
//     // Authentication Routes...
//     $this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
//     $this->post('login', 'Auth\LoginController@login');
//     $this->post('logout', 'Auth\LoginController@logout')->name('logout');

//     // Registration Routes...
//     if ($options['register'] ?? true) {
//         $this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
//         $this->post('register', 'Auth\RegisterController@register');
//     }

//     // Password Reset Routes...
//     if ($options['reset'] ?? true) {
//         $this->resetPassword();
//     }

//     // Email Verification Routes...
//     if ($options['verify'] ?? false) {
//         $this->emailVerification();
//     }
// }

Route::get('/', function () {
    return view('child');
});

// 認証系の物の物を一括で行う。
//vendor/laravel/framework/src/Illuminate/Routing/Router.phpで
//定義されたルーティングが読み込まれている。
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
