<?php

namespace App\Auth;


class Permission extends \Spatie\Permission\Models\Permission
{
    protected $connection = 'mysql';
}
