<?php

namespace ChrisChase\AuthorizationMongoDB;

use Illuminate\Database\Eloquent\Relations\Pivot as BaseModel;
use ChrisChase\AuthorizationMongoDB\Traits\FlushesLoadedRelations;

abstract class Pivot extends BaseModel
{
    use FlushesLoadedRelations;
}
