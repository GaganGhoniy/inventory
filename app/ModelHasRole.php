<?php

namespace App;

use App\Auth\Role;
use Illuminate\Database\Eloquent\Model;

class ModelHasRole extends Model
{
    protected $connection = 'mysql';
    protected $table = "model_has_roles";
    protected $with = ['role'];
    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id', 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'model_id', 'id');
    }
}
