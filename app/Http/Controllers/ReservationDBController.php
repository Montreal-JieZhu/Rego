<?php

namespace App\Http\Controllers;

use DummyFullModelClass;
use App\lain;
use Illuminate\Http\Request;
use DB;

session_start();

class ReservationDBController extends Controller {

    public function checkAvailableTables(Request $request, $date, $resID) {
        $tablesAvailable = array();
        if ($date && $resID) {
//echo $date;
//echo $resID;
            $sqlAllTables = 'select * from tables where restaurant_id=' . $resID;
//echo $sqlAllTables;
            $tables = DB::select($sqlAllTables);

            $date1 = date_create($date);
            $date2 = date_create(date('Y-m-d', time()));
            $diff = date_diff($date1, $date2);
//echo 'diff' . $diff->d;
            $nowhour = date('H', time());
//echo 'now time' . $nowhour;
            /*
             * status 0 means those day is available for lunch and dinner
             * status 1 just dinner
             * status 2 just lunch
             * status 3 neither
             */

            if ($diff->d == 0) {
//echo '1-1' . '<br>';
                if ($nowhour < 13) {
//echo '2' . '<br>';
                    foreach ($tables as $t) {
//echo '3' . '<br>';
                        $sqltables = 'SELECT * FROM reservations where table_id=' . $t->id . ' and ' . 'date=\'' . $date . '\'';
                        $tablesOrdered = DB::select($sqltables);
                        if (empty($tablesOrdered[0])) {
//echo '4' . '<br>';
                            array_push($tablesAvailable, array('tableObj' => $t, "status" => 0));
                        } else {
//echo '5' . '<br>';
                            foreach ($tablesOrdered as $to) {

                                if ($to->lunch_available == 1 && $to->dinner_available == 0) {
                                    array_push($tablesAvailable, array('tableObj' => $t, "status" => 1));
                                } elseif ($to->lunch_available == 0 && $to->dinner_available == 1) {
                                    array_push($tablesAvailable, array('tableObj' => $t, "status" => 2));
                                } else {
                                    array_push($tablesAvailable, array('tableObj' => $t, "status" => 3));
                                }
                            }
                        }
                    }
                } else {
//echo '1-2' . '<br>';
                    foreach ($tables as $t) {
                        $sqltables = 'SELECT * FROM reservations where table_id=' . $t->id . ' and ' . 'date=\'' . $date . '\'';
                        $tablesOrdered = DB::select($sqltables);
                        if (empty($tablesOrdered[0])) {
//echo '2' . '<br>';
                            array_push($tablesAvailable, array('tableObj' => $t, "status" => 1));
                        } else {
                            foreach ($tablesOrdered as $to) {
//echo '3' . '<br>';
                                if ($to->dinner_available == 0) {
                                    array_push($tablesAvailable, array('tableObj' => $t, "status" => 1));
                                } else {
                                    array_push($tablesAvailable, array('tableObj' => $t, "status" => 3));
                                }
                            }
                        }
                    }
                }
            } else {
                foreach ($tables as $t) {
                    $sqltables = 'SELECT * FROM reservations where table_id=' . $t->id . ' and ' . 'date=\'' . $date . '\'';
                    $tablesOrdered = DB::select($sqltables);
                    if (empty($tablesOrdered[0])) {
                        array_push($tablesAvailable, array('tableObj' => $t, "status" => 0));
                    } else {
                        foreach ($tablesOrdered as $to) {
                            if ($to->lunch_available == 1 && $to->dinner_available == 0) {
                                array_push($tablesAvailable, array('tableObj' => $t, "status" => 1));
                            } elseif ($to->lunch_available == 0 && $to->dinner_available == 1) {
                                array_push($tablesAvailable, array('tableObj' => $t, "status" => 2));
                            } else {
                                array_push($tablesAvailable, array('tableObj' => $t, "status" => 3));
                            }
                        }
                    }
                }
            }
        }
        return response()->json($tablesAvailable, 200);
    }

    public function insert(Request $request) {
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $email = $request->input('email');
        $phone = $request->input('phone');
        if (isset($_COOKIE['restaurantID'])) {
            $restaurantID = $_COOKIE['restaurantID'];
        } else {
            echo "you don't select a restaurant!<br>";
            echo '<a href="/">Go back to Home</a>';
            return;
        }
        $selectedContent = $request->input('selected');
        $pieces = explode("-", $selectedContent);
        $tableID = $pieces[0];
        $resTimeID = 'resTime' . $pieces[1];
        $user = null;
        $userID = null;
        if (!empty($_SESSION['userID'])) {
            $user = $_SESSION['userID'];
            $userID = $user->id;
        } else {
            echo "you don't login!<br>";
            echo '<a href="/login">Please login firstly!</a>';
            return;
        }
        $guestNumber = $request->input('numbers');
        $serviceTime = $request->input($resTimeID);
        $serviceDate = $request->input('resdate');
        $requirement = $request->input('requirement');

        $sqltables = 'SELECT * FROM reservations where table_id=' . $tableID . ' and ' . 'date=\'' . $serviceDate . '\'' . ' and ' . 'restaurant_id=' . $restaurantID;
        $tablesOrdered = DB::select($sqltables);
        $timestamp = date('Y-m-d H:i:s', time());
        if (empty($tablesOrdered)) {
            switch ($serviceTime) {
                case '1':
                    DB::insert('insert into reservations (user_id,restaurant_id,number_of_person,
              contact_person,phone_number,special_request,created_at,table_id,date,lunch_available) values(?,?,?,?,?,?,?,?,?,?)', [$userID, $restaurantID, $guestNumber, $firstname, $phone, $requirement,
                        $timestamp, $tableID, $serviceDate, 1]);
                    break;
                case '2':
                    DB::insert('insert into reservations (user_id,restaurant_id,number_of_person,
              contact_person,phone_number,special_request,created_at,table_id,date,dinner_available) values(?,?,?,?,?,?,?,?,?,?)', [$userID, $restaurantID, $guestNumber, $firstname, $phone, $requirement,
                        $timestamp, $tableID, $serviceDate, 1]);
                    break;
            }
        } else {
            switch ($serviceTime) {
                case '1':
                    DB::update('update reservations set lunch_available =? where table_id=' . $tableID . ' and ' . 'date=\'' . $serviceDate . '\'' . ' and ' . 'restaurant_id=' . $restaurantID, [1]);
                    break;
                case '2':
                    DB::update('update reservations set dinner_available =?  where table_id=' . $tableID . ' and ' . 'date=\'' . $serviceDate . '\'' . ' and ' . 'restaurant_id=' . $restaurantID, [1]);
                    break;
            }
        }
        $msg = 'Your favorite table is reserved, Please come on time！';
        $nextStep = 'Nothing';
        return view('reservationOK', ['firstname' => $firstname, 'lastname' => $lastname, 'email' => '', 'msg' => $msg, 'nextStep' => $nextStep]);

        //echo "Your reservation is accepted successfully.<br/>";
        //echo '<a href = "/">Click Here</a> to go back to home.';
    }

    /**
     * Display a listing of the resource.
     *
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function index(lain $lain) {
//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function create(lain $lain) {
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
