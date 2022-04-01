<?php

namespace Modules\Roles\Entities;

use Laratrust\Models\LaratrustRole;
use Modules\Base\Http\Filters\Filterable;

class Role extends LaratrustRole
{
    use Filterable;

    protected $fillable = [
        'name',
    ];

    // scopes ----------------------------
    public function scopeWhereRoleNot($query, $role_name)
    {
        return $query->whereNotIn('name', (array)$role_name);
    }

    public function scopeWhereRole($query, $role_name)
    {
        return $query->whereIn('name', (array)$role_name);
    }
}
