<?php

namespace ChrisChase\AuthorizationMongoDB\Traits;

use ChrisChase\AuthorizationMongoDB\Authorization;
use ChrisChase\AuthorizationMongoDB\UserPivot;

trait HasUsers
{
    /**
     * The belongsToMany users relationship.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany(Authorization::userModel())->using(UserPivot::class);
    }
}
