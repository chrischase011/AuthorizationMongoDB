<?php

namespace DirectoryTree\Authorization;

use MongoDB\Laravel\Eloquent\Model;
use DirectoryTree\Authorization\Traits\ManagesPermissions;

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
