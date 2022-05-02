<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    function getCategory(){
        $res = DB::table('categories')->get();

        $result = json_decode(json_encode($res), true);

        return $result;
    }
}
