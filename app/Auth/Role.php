<?php

namespace App\Auth;


class Role extends \Spatie\Permission\Models\Role
{
    protected $connection = 'mysql';
    protected $fillable = [
        'name', 'guard_name'
    ];
}
