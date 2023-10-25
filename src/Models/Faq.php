<?php

namespace Fibdesign\Toolkit\Models;

use Fibdesign\Toolkit\Traits\HasCategory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasCategory;
    protected $guarded = [];
}
