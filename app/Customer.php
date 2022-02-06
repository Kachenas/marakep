<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['first_name', 'middle_name','last_name','birthdate','street','barangay','city','province','country','contact_number','valid_id','signature'];
}
