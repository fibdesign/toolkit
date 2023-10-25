<?php

namespace Fibdesign\Toolkit\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class File extends Model
{
    use SoftDeletes;
    protected $guarded = [];

    public function fileable(): MorphTo
    {
        return $this->morphTo();
    }
}
