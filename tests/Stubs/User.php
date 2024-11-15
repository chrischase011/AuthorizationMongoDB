<?php

namespace ChrisChase\AuthorizationMongoDB\Tests\Stubs;

use Illuminate\Foundation\Auth\User as BaseUser;
use ChrisChase\Authorization\Traits\Authorizable;

class User extends BaseUser
{
    use Authorizable;

    protected $fillable = ['name'];
}
