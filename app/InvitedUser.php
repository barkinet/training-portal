<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InvitedUser extends Model
{
    //
    protected $fillable = [
      'name',
      'email',
      'key',
      'role_id',
      'department_id',
      'active',
      'message',
    ];

}
