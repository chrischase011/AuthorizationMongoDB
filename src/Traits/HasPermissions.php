<?php

namespace ChrisChase\AuthorizationMongoDB\Traits;

use ChrisChase\AuthorizationMongoDB\Authorization;
use ChrisChase\AuthorizationMongoDB\PermissionPivot;

trait HasPermissions
{
    /**
     * The belongsToMany permissions relationship.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function permissions()
    {
        return $this->belongsToMany(Authorization::permissionModel())->using(PermissionPivot::class);
    }
}
