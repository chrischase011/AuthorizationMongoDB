<?php

namespace ChrisChase\Authorization\Traits;

use ChrisChase\Authorization\Authorization;
use ChrisChase\Authorization\PermissionPivot;

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
