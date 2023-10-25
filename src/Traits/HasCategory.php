<?php
namespace Fibdesign\Toolkit\Traits;

use Fibdesign\Toolkit\Models\Category;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait HasCategory
{
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
