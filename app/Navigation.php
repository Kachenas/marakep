<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Navigation extends Model
{
    protected $table = 'navigations';
    protected $guarded = ['id'];
    protected $primaryKey = 'id';
}
