<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $fillable = [
        'mcode', 'bname', 'faddress', 'vname', 'phone', 'tin', 'image_path'
    ];

    public function getBnameAttribute($val){
        $lower = strtolower($val);
        $scap = ucwords($lower);
        return $scap;
    }
    public function getfaddressAttribute($val){
        $lower = strtolower($val);
        $scap = ucwords($lower);
        return $scap;
    }
    // public function getVnameAttribute($val){
    //     $lower = strtolower($val);
    //     $scap = ucwords($lower);
    //     return $scap;
    // }
}
