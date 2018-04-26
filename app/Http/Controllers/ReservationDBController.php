<?php

namespace App\Http\Controllers;

use DummyFullModelClass;
use App\lain;
use Illuminate\Http\Request;
use DB;

session_start();
class ReservationDBController extends Controller
{

    public function insert(Request $request){
      $firstname = $request->input('firstname');
      $lastname = $request->input('lastname');
      $email = $request->input('email');
      $phone = $request->input('phone');      
      if(isset($_COOKIE['restaurantID'])){
          //$restaurantID = $request->cookie('restaurantID');
          $restaurantID = $_COOKIE['restaurantID'];
      }else{
          echo "you don't select a restaurant!<br>";
          echo '<a href="/">Go back to Home</a>';
          return;
      }
      $user = null;
      $userID = null;
      if(!empty($_SESSION['userID'])){
          $user = $_SESSION['userID'];
          $userID = $user->id;
      }else{
          echo "you don't login!<br>";
          echo '<a href="/login">Please login firstly!</a>';
          return;
      }         
      $guestNumber = $request->input('numbers');
      $serviceTime=$request->input('restime');
      $serviceDate=$request->input('resdate');
      $requirement = $request->input('requirement');
      //$date =  $_POST['date'];
      $timestamp = date('Y-m-d H:i:s', time()); 
      DB::insert('insert into reservations (user_id,restaurant_id,number_of_person,
              contact_person,phone_number,special_request,period,created_at) values(?,?,?,?,?,?,?,?)',[$userID,$restaurantID,$guestNumber,$firstname,$phone,$requirement,$serviceDate." ".$serviceTime,$timestamp]);
      echo "Record inserted successfully.<br/>";
      echo '<a href = "/insert">Click Here</a> to go back.';      
   }
    /**
     * Display a listing of the resource.
     *
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function index(lain $lain)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function create(lain $lain)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, lain $lain)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    public function show(lain $lain, DummyModelClass $DummyModelVariable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    public function edit(lain $lain, DummyModelClass $DummyModelVariable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, lain $lain, DummyModelClass $DummyModelVariable)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    public function destroy(lain $lain, DummyModelClass $DummyModelVariable)
    {
        //
    }
}
