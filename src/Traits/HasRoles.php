<?php

namespace ChrisChase\Authorization\Traits;

use ChrisChase\Authorization\Authorization;
use ChrisChase\Authorization\RolePivot;

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
