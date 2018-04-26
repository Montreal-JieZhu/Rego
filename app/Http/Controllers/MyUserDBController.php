<?php

namespace App\Http\Controllers;

use DummyFullModelClass;
use App\lain;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

session_start();

class MyUserDBController extends Controller {

    public function logout(lain $lain, Request $request) {
        $_SESSION['userID'] = null;
        header('Refresh:0;url=' . config('myregoapp.HOME_URL'));
        //return view('index');
    }

    public function validation(lain $lain, Request $request) {
        $sql = "select * from users where email='" . $request->input('email') . "'";
        $users = DB::select($sql);
        if (!empty($users[0])) {
            $user = $users[0];
            $password = $user->password;
            $inputPassword = $request->input('password');
            if ($password == $inputPassword) {
                $_SESSION['userID'] = $user;
                switch($request->input('type')){
                    case 'user':                    
                    header('Refresh:0;url=' . config('myregoapp.HOME_URL'));
                    break;
                    case 'restauteur':
                    header('Refresh:0;url=' . config('myregoapp.HOME_URL').'/admin');
                    break;
                    
                }
        } else {
            echo 'Your password is not correct, please check it!';
            header('Refresh:0;url=' . config('myregoapp.HOME_URL') . '/login');
        }
        } else {
            echo 'Your account name is not correct, please check it!';
            header('Refresh:0;url=' . config('myregoapp.HOME_URL') . '/login');
        }
    }

    public function insert(lain $lain, Request $request) {
        
    }

    /**
     * Display a listing of the resource.
     *
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, lain $lain) {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, lain $lain) {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, lain $lain) {
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $password = $request->input('password');
        DB::insert('insert into users (first_name,last_name,email,phone_number,password) values(?,?,?,?,?)', [$firstname, $lastname, $email, $phone, $password]);
        return view('registerOK', ['firstname' => $firstname, 'lastname' => $lastname, 'email' => $email]);
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
