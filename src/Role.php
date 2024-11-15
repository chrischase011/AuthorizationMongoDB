<?php

namespace ChrisChase\AuthorizationMongoDB;

use MongoDB\Laravel\Eloquent\Model;
use ChrisChase\AuthorizationMongoDB\Traits\ManagesPermissions;

class Role extends Model
{
    use ManagesPermissions;

    /**
     * The fillable model attributes.
     *
     * @var array
     */
    protected $fillable = ['name', 'label'];
}
