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
use Illuminate\Http\Request;
use Illuminate\Http\Response;


Route::get('/', function () {
    $restaurants = DB::table('restaurants')->get();
    return view('index', ['restaurants' => $restaurants]);
});

Route::get('sendbasicemail','MailController@basic_email');
Route::get('sendhtmlemail','MailController@html_email');
Route::get('sendattachmentemail','MailController@attachment_email');

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', 'MyUserDBController@logout');

Route::get('/register', function () {
    return view('register');
});

Route::get('/restaurant', function () {
    return view('restaurant');
});

Route::get('/reservation/{num}', function ($num) {
    $sql = 'select * from restaurants where id=' . $num;
    $restaurant = DB::select($sql);
    //$restaurants = DB::table('restaurants')->get();  
    //$minutes = 60;
    //$response = new Response('restaurantID');
    //$response->withCookie(cookie('restaurantID', $num, $minutes));
    //return $response;
    setcookie('restaurantID', $num, time() + 86400, "/"); 
    return view('reservation', ['restaurant' => $restaurant[0]]);
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
Route::post('/userdb/login', 'MyUserDBController@validation');
Route::resource('userdb', 'MyUserDBController');
//Route::resource('submit','ReservationDBController');

Route::post('/reservation/submit', 'ReservationDBController@insert');
//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
  Route::get('/admin', function(){
  return view('admin.index');
  });
 */


Route::resource('/admin', 'AdminController');

Route::resource('/admin/restaurants', 'AdminRestaurantsController');
