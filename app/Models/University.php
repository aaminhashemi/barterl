<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\ItemDetail;
class University extends Model
{
    public function university()
    {
        return $this->belongsTo('App\Models\ItemDetail');
    }
}
