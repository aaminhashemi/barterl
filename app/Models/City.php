<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\ItemDetail;
class City extends Model
{
    public function city()
    {
        return $this->hasMany('App\Models\ItemDetail');
    }
}
