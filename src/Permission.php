<?php

namespace ChrisChase\AuthorizationMongoDB;

use MongoDB\Laravel\Eloquent\Model;
use ChrisChase\AuthorizationMongoDB\Traits\ClearsCachedPermissions;
use ChrisChase\AuthorizationMongoDB\Traits\HasRoles;
use ChrisChase\AuthorizationMongoDB\Traits\HasUsers;

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
