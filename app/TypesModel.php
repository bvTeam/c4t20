<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypesModel extends Model
{
    protected $table = 'types';

    protected $fillable = ['id', 'type'];

    public function type()
    {
        return $this->hasMany(TypesModel::class, 'type_id', 'id');
    }

    public function company()
    {
        return $this->hasMany(CompanyModel::class, 'company_id', 'id');
    }
}
