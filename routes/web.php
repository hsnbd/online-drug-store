<?php
Route::get('/', 'BaseController@index')->name('master');
Route::get('/email/{token}', 'BaseController@confirmEmail');

Route::resources([
    'categories' => 'CategoryController',
    'sub_categories' => 'SubCategoryController',
    'diseases' => 'DiseaseController',
    'generics' => 'GenericController',
    'powers' => 'PowerController',
    'units' => 'UnitController',
    'medicines' => 'MedicineController',
    'remedies' => 'RemedyController',
    'shippings' => 'ShippingController',
    'sale_details' => 'SaleDetailController',
    'ratings' => 'RatingController',
    'comments' => 'CommentController',
    'watch_lists' => 'WatchListController',
]);
// Verb	         URI	                      Action	      Route Name
//-----------------------------------------------------------------------------
// GET	         /photos	                  index	          photos.index
// GET	         /photos/create	              create	      photos.create
// POST	         /photos                      store	          photos.store
// GET	         /photos/{photo}	          show	          photos.show
// GET	         /photos/{photo}/edit	      edit	          photos.edit
// PUT/PATCH	 /photos/{photo}	          update	      photos.update
// DELETE	     /photos/{photo}	          destroy	      photos.destroy

// Route::get('/', function () {
//     $med = \App\User::find(1);
//     foreach ($med->ratings as $comment) {
//         return $comment->rateable;
//     }

//     $u = \App\User::find(1);
//     foreach ($u->watch_lists as $comment) {
//         return $comment;
//     }
// });
// Route::group(['prefix', 'admin', 'namespace' => 'backend', 'before' => 'admin'], function()
// {
//     Route::resources([
//         'categories' => 'CategoryController',
//     ]);
// });
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::prefix('admin')->group(function ()
{
    Route::get('/customers/{id}/show', 'Admin\UserController@show')->name('customers.show');
    Route::get('/customers/{id}/edit', 'Admin\UserController@index')->name('customers.edit');
    Route::get('/customers/{id}/status', 'Admin\UserController@status')->name('customers.status');
    Route::get('/customers/{id}/delete', 'Admin\UserController@destroy')->name('customers.destroy');
    Route::get('/customers', 'Admin\UserController@index')->name('customers.index');



    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

    //register
    Route::get('/register', 'Auth\AdminRegisterController@showRegisterForm')->name('admin.register');
    Route::post('/register', 'Auth\AdminRegisterController@register')->name('admin.register.submit');

    // Password reset routes
    Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
    Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
});
Route::prefix('socialauth')->group(function ()
{
    Route::get('/{provider}/callback', 'Auth\SocialAuthController@handleProviderCallback')->name('social.callback');
    Route::get('/{provider}', 'Auth\SocialAuthController@redirectToProvider')->name('social.provider');
});
