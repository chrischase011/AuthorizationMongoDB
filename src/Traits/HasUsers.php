<?php

namespace ChrisChase\Authorization\Traits;

use ChrisChase\Authorization\Authorization;
use ChrisChase\Authorization\UserPivot;

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
