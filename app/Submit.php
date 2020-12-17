<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submit extends Model
{
    protected $fillable = ['filecsv'];

    public function getPic()
    {
        if(!$this->picture){
            return asset('images/default.jpg');
        }
        return asset('images/'.$this->picture);
    }
}
