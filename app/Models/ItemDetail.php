<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\University;
use App\Models\Category;
use App\Models\City;
use Illuminate\Database\Eloquent\SoftDeletes;

class ItemDetail extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'itemdetails';

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
    public function category(){
        return $this->belongsTo('App\Models\Category', 'cat_id');
    }
    public function university(){
        return $this->belongsTo('App\Models\University', 'uni_id');
    }
    public function city(){
        return $this->belongsTo('App\Models\City', 'city_id');
    }

    public function getUnameAttribute($key)
    {
        return $this->user->firstname.' ' .$this->user->lastname;
    }
    public function getCnameAttribute($key)
    {
        return $this->city->name;
    }
     public function getCatAttribute($key)
    {
        return $this->category->name;
    }
    public function getUniAttribute(){
        return $this->university->name;
    }

    protected $fillable = [
        'name',
        'description',
        'contactway',
        'exchangedesc',
        'user_id',
        'cat_id',
        'uni_id',
        'city_id',
        'photo',
        'img',
    ];
}
