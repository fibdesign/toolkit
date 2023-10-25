<?php
namespace Fibdesign\Toolkit\Traits;

use Fibdesign\Toolkit\Models\File;
use Illuminate\Database\Eloquent\Relations\MorphMany;

trait HasFiles
{
    public function files(): MorphMany
    {
        return $this->morphMany(File::class,'fileable');
    }
}
