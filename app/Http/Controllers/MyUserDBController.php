<?php

namespace App\Http\Controllers;

use DummyFullModelClass;
use App\lain;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class MyUserDBController extends Controller {

    public function insert(lain $lain, Request $request) {

        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $password = $request->input('password');
        DB::insert('insert into user (firstname,lastname,email,phone,password) values(?,?,?,?,?)', [$firstname, $lastname, $email, $phone, $password]);
        echo "New user inserted successfully.<br/>";
        echo '<a href = "/register">Click Here</a> to go back.';
    }

    /**
     * Display a listing of the resource.
     *
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, lain $lain) {
        $users = DB::select('select * from user');
        
        if(!empty($users[0])){
            
            $user = $users[0];
            $password = $user->password;
            $inputPassword = $request->input('password');
            if($password==$inputPassword){
                
                $_SESSION['userID'] = $request->input('email');
                header("Refresh:0;url=http://localhost:8080");                
            }
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, lain $lain) {
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $password = $request->input('password');
        DB::insert('insert into user (firstname,lastname,email,phone,password) values(?,?,?,?,?)', [$firstname, $lastname, $email, $phone, $password]);
        //$request->session()->put('userID',$email);
        $_SESSION['userID'] = $email;
        echo "Data has been added to session";
        echo "New user inserted successfully.<br/>";
        echo '<a href = "/login">Click Here</a> to go login. or go to <a href = "/">Home</a>';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, lain $lain) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    public function show(lain $lain, DummyModelClass $DummyModelVariable) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    public function edit(lain $lain, DummyModelClass $DummyModelVariable) {
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
    public function update(Request $request, lain $lain, DummyModelClass $DummyModelVariable) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    public function destroy(lain $lain, DummyModelClass $DummyModelVariable) {
        //
    }

}
