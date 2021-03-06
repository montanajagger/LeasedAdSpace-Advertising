<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LasBannerAd extends Model
{
    use HasFactory;

    protected $table = 'las_banner_ad';
    public $timestamps = true;
    public const CREATED_AT = 'date_created';
    public const UPDATED_AT = 'last_updated';
}
