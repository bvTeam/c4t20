<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyPostModel extends Model
{
    protected $table = 'company_post';

    protected $fillable = ['id', 'title', 'description', 'requirements', 'type_id', 'company_id', 'city'];

    public function type()
    {
        return $this->belongsTo(TypesModel::class, 'type_id', 'id');
    }

    public function company()
    {
        return $this->belongsTo(CompanyModel::class, 'company_id', 'id');
    }
}
