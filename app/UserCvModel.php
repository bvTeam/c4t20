<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserCvModel extends Model
{
    protected $table = 'user_cv';

    protected $fillable = ['id', 'user_id', 'name', 'phone', 'email', 'description', 'probation', 'type_id', 'education'];


    public function type()
    {
        return $this->belongsTo(TypesModel::class, 'type_id', 'id');
    }

    public function company()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

}
