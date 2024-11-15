<?php

namespace ChrisChase\AuthorizationMongoDB;

class UserPivot extends Pivot
{
    /**
     * Flush the users relation on attach / detach.
     *
     * @var string
     */
    protected static $flushingRelation = 'users';
}
