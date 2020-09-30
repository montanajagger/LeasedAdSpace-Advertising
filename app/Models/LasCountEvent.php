<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LasCountEvent extends Model
{
    use HasFactory;
    protected $table = 'las_count_event';
    public $timestamps = true;
    public const CREATED_AT = 'date_created';
    public const UPDATED_AT = 'last_updated';
}
