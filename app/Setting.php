<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    const DEFAULT_TEMPLATE = 1;
    const TOTAL_TEMPLATE = 4;

    protected $fillable = ['template_number'];
}
