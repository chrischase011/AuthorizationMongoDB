<?php

namespace DirectoryTree\Authorization;

use MongoDB\Laravel\Eloquent\Model;
use DirectoryTree\Authorization\Traits\ClearsCachedPermissions;
use DirectoryTree\Authorization\Traits\HasRoles;
use DirectoryTree\Authorization\Traits\HasUsers;

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
