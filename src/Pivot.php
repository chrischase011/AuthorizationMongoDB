<?php

namespace ChrisChase\Authorization;

use Illuminate\Database\Eloquent\Relations\Pivot as BaseModel;
use ChrisChase\Authorization\Traits\FlushesLoadedRelations;

abstract class Pivot extends BaseModel
{
    use FlushesLoadedRelations;
}
