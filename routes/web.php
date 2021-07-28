<?php

//Route::redirect('/', '/login');




Route::group(['namespace' => 'Frontend'], function () {

    Route::get('/', 'HomeController@index');

    Route::get('about-us', 'AboutusController@index');

    Route::get('gallery', 'GalleryController@index');
    // Route::get('warranty', 'HomeController@warranty');

    Route::get('products/{category}', 'ProductsController@category')->name('categories');
    // Route::get('/file/{name}', 'ProductsController@downloadfile')->name('downloadfile');
    Route::resource('our-products', 'ProductsController');
    Route::get('our-products/{id}-{slug}', 'ProductsController@show');

    Route::get('contact-us', 'ContactusController@index');
    Route::post('contact-us/send', 'ContactusController@sendContact');

    Route::get('get-a-quote', 'QuoteController@index');
    Route::post('get-a-quote/send', 'QuoteController@sendQuote');
    
    Route::post('/search', 'HomeController@search')->name('search');

    Route::get('package-info', function () {
        return view('frontend.package-info');
    });

    Route::get('security-check', function () {
        return view('frontend.security-check');
    });

    
});

Route::redirect('/home', '/admin');

Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');

    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');

    Route::resource('permissions', 'PermissionsController');

    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');

    Route::resource('roles', 'RolesController');

    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');

    Route::resource('users', 'UsersController');

    Route::delete('products/destroy', 'ProductsController@massDestroy')->name('products.massDestroy');
    Route::delete('products/image/{image}', 'ProductsController@deleteImage')->name('products.deleteProductImages');
    Route::resource('products', 'ProductsController');

    Route::delete('category/destroy', 'categoryController@massDestroy')->name('category.massDestroy');

    Route::resource('category', 'categoryController');

    // Route::delete('color/destroy', 'colorController@massDestroy')->name('color.massDestroy');

    // Route::resource('color', 'colorController');

    Route::resource('gallery', 'GalleryController');

    Route::resource('slider', 'SliderController');

    Route::resource('aboutus', 'AboutUsController');

    Route::resource('contactus', 'ContactUsController');

    // Route::resource('partners', 'PartnersController');

    Route::resource('footer', 'FooterController');

    Route::resource('global-settings', 'GlobalSettingController');

    // Route::resource('product-page', 'ProductPageController');

    Route::resource('home-page', 'HomePageController');

    // Route::resource('warranty-page', 'WarrantyController');

    Route::resource('gallery-page', 'GalleryPageController');

});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
\Unisharp\LaravelFilemanager\Lfm::routes();
// '\vendor\UniSharp\LaravelFilemanager\Lfm::routes()';
});