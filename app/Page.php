<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    //
    protected $fillable = [
      'title',
      'content',
      'course_id',
    ];

    public function course() {
      return $this->belongsTo('App\Course');
    }
}
