<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CCVModel extends Model
{
    protected $table = 'company_cv';

    protected $fillable = ['id', 'firstname', 'lastname', 'headline', 'url'];
}
