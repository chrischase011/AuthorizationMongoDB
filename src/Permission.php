<?php

namespace ChrisChase\Authorization;

use MongoDB\Laravel\Eloquent\Model;
use ChrisChase\Authorization\Traits\ClearsCachedPermissions;
use ChrisChase\Authorization\Traits\HasRoles;
use ChrisChase\Authorization\Traits\HasUsers;

class Permission extends Model
{
    use HasRoles, HasUsers, ClearsCachedPermissions;

    /**
     * The fillable model attributes.
     *
     * @var array
     */
    protected $fillable = ['name', 'label'];
}
