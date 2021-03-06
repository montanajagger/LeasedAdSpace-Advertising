<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Members;

class LasBlogEntries extends Model
{
    use HasFactory;

    protected $table = 'las_blog_entry';
    public $timestamps = true;
    public const CREATED_AT = 'date_created';
    public const UPDATED_AT = 'last_unpdated';

    public function author()
    {
        return $this->hasOne('App\Models\Members', 'id', 'author_id');
    }

    public function count()
    {
        return $this->hasOne('App\Models\LasCountedThing', 'counted_thing_id', 'id');
    }
}
