<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use Illuminate\Support\Facades\DB;

$msg = "This is a simple message.";
return response()->json(array('msg' => $msg), 200);
/*
if (!empty($_GET["date"]) && !empty($_GET["resID"])) {
    $msg = "This is a simple message.";
    return response()->json(array('msg' => $msg), 200);
    /*
      echo "Welcome " . $_GET['date'] . "<br />";
      echo "You are " . $_GET['resID'] . " years old.";

      $sqlAllTables = 'select * from tables where id=' . $_GET['resID'];
      $tables = DB::select($sqlAllRestautants);
      $tablesAvailable = array();
      foreach ($tables as $t) {
      $sqltables = 'SELECT * FROM reservations where table_id=' . $t->id . ' and ' . 'date=' . $_GET['date'];
      $tablesOrdered = DB::select($sqltables);
      if (empty($tablesOrdered)) {
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

     */
//}