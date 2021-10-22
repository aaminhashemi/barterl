<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\ItemDetail;

class Category extends Model
{
    protected $fillable = ['name'];
    public function category()
    {
        return $this->hasMany('App\Models\ItemDetail');
    }
}
