<?php

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */


session_start();

Route::get('/', function () {

    $sql = 'select * from restaurants';
    $restaurants = DB::select($sql);
    if (empty($_SESSION['language'])) {
        $_SESSION['language'] = 'En';
    }
    return view('index', ['restaurants' => $restaurants]);
});
Route::get('changeLang/{lang}', 'LanguageController@index');

Route::get('sendbasicemail', 'MailController@basic_email');
Route::get('sendhtmlemail', 'MailController@html_email');
Route::get('sendattachmentemail', 'MailController@attachment_email');

Route::get('/userlogin', function () {
    return view('login');
});

Route::get('/userlogout', 'MyUserDBController@logout');

Route::get('/userregister', function () {
    return view('register');
});

Route::get('/reservation/checkTables/{date}/{resID}', 'ReservationDBController@checkAvailableTables');
/*
  Route::get('/reservation/checkTables/{date}/{resID}', function() {
  echo '123';
  });
 */
Route::get('/restaurant', function () {
    return view('restaurant');
});

Route::get('/reservation/{num}', function ($num) {
    $sql = 'select * from restaurants where id=' . $num;
    $restaurant = DB::select($sql);
    $sqlTables = 'select * from tables where restaurant_id=' . $num;
    $tables = DB::select($sqlTables);
    setcookie('restaurantID', $num, time() + 86400, "/");
    return view('reservation', ['restaurant' => $restaurant[0], 'tables' => $tables]);
});

Route::get('/registerOK', function () {
    return view('registerOK');
});

Route::get('/forms', function () {
    return view('forms');
});

Route::get('/footer', function () {
    return view('footer');
});

Route::get('/userdb/validation/{email}', 'MyUserDBController@validation');

Route::post('/userdb/login', 'MyUserDBController@login');
Route::resource('userdb', 'MyUserDBController');
//Route::resource('submit','ReservationDBController');

Route::post('/reservation/submit', 'ReservationDBController@insert');
//Auth::routes();

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('/admin', 'AdminController');

Route::resource('/admin/restaurants', 'AdminRestaurantsController');

Route::resource('/admin/restaurant/tables', 'AdminRestaurantTablesController');

Route::post('/admin/restaurant/tables/add_all', 'AdminRestaurantTablesController@insertAll');
Route::post('/admin/restaurant/tables/edit_all', 'AdminRestaurantTablesController@updateAll');

Route::get('/change_language/{locale}', function ($locale) {
    setcookie('my_locale', $locale, time() + (86400 * 30), "/");
    return redirect()->back();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
