<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $table = 'students';

    protected $fillable = ['first_name', 'last_name', 'middle_name', 'suffix', 'gender', 'birthdate'];
}
