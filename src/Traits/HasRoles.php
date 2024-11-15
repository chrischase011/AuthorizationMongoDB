<?php

namespace ChrisChase\AuthorizationMongoDB\Traits;

use ChrisChase\AuthorizationMongoDB\Authorization;
use ChrisChase\AuthorizationMongoDB\RolePivot;

trait HasRoles
{
    /**
     * The belongsToMany roles relationship.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles()
    {
        return $this->belongsToMany(Authorization::roleModel())->using(RolePivot::class);
    }
}
