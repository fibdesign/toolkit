<?php
namespace Fibdesign\Toolkit\Traits;

use Fibdesign\Toolkit\Models\Comment;
use Illuminate\Database\Eloquent\Relations\MorphMany;

trait HasComments
{
    public function comments(): MorphMany
    {
        return $this->morphMany(Comment::class,'commentable');
    }
}
