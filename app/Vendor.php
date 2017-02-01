<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    //
    protected $fillable = [
      'name',
      'link',
      'image',
      'description',
    ];

    public function courses() {
      return $this->hasMany('App\Course');
    }


}
