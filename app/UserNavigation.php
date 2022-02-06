<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserNavigation extends Model
{
    protected $table = 'user_navigations';
    protected $guarded = ['id'];
    protected $primaryKey = 'id';
}
