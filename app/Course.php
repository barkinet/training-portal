<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    protected $fillable = [
      'name',
      'description',
      'vendor_id',
    ];

    public function vendor() {
      return $this->belongsTo('App\Vendor');
    }

    public function pages() {
      return $this->hasMany('App\Page');
    }
}
