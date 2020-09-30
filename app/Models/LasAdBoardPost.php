<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LasAdBoardPost extends Model
{
    use HasFactory;

    protected $table = 'las_ad_board_post';
    public $timestamps = true;
    public const CREATED_AT = 'date_created';
    public const UPDATED_AT = 'last_updated';

    public function member()
    {
        return $this->hasOne('App\Models\Members', 'owner_id');
    }

    public function count()
    {
        return $this->hasOne('App\Models\LasCountedThing', 'counted_thing_id', 'id');
    }

    public function todayViewsCount()
    {
        return $this->hasMany('App\Models\LasCountEvent', 'counted_thing_id', 'id')->where('counted_thing_field', 'views')->whereDate('date_created', Carbon::today())->get()->count();
    }

    public function lastSevenDaysViewsCount()
    {
        return $this->hasMany('App\Models\LasCountEvent', 'counted_thing_id', 'id')->where('counted_thing_field', 'views')->whereDate('date_created', '>=', Carbon::today()->subDays(7))->get()->count();
    }

    public function lastThirtyDaysViewsCount()
    {
        return $this->hasMany('App\Models\LasCountEvent', 'counted_thing_id', 'id')->where('counted_thing_field', 'views')->whereDate('date_created', '>=', Carbon::today()->subDays(30))->get()->count();
    }
}
