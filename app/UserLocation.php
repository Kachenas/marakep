<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserLocation extends Model
{
    protected $table = 'user_locations';
    protected $guarded = ['id'];
    protected $primaryKey = 'id';
}
