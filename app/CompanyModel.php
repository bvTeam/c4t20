<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyModel extends Model
{
    protected $table = 'company';

    protected $fillable = ['id', 'name', 'phone', 'email', 'address', 'city'];
}
