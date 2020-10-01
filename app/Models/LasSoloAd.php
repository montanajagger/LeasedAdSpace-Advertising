<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LasSoloAd extends Model
{
    use HasFactory;

    protected $table = 'las_solo_ad';
    public $timestamps = true;
    public const CREATED_AT = 'date_created';
    public const UPDATED_AT = 'last_unpdated';

    public function author()
    {
        return $this->hasOne('App\Models\Members', 'id', 'owner_id');
    }
}
