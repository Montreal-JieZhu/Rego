<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    //
    public function seating_type(){
        return $this->belongsTo("App\SeatingType");
    }


}
