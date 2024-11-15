<?php

namespace ChrisChase\Authorization\Tests\Stubs;

use Illuminate\Foundation\Auth\User as BaseUser;
use ChrisChase\Authorization\Traits\Authorizable;

class User extends BaseUser
{
    use Authorizable;

    protected $fillable = ['name'];
}
