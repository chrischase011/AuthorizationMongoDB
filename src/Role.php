<?php

namespace ChrisChase\Authorization;

use MongoDB\Laravel\Eloquent\Model;
use ChrisChase\Authorization\Traits\ManagesPermissions;

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
