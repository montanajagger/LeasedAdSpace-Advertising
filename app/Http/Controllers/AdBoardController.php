<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\LasAdBoardPost;
use App\Models\LasBlogEntries;
use App\Models\LasCountedThing;
use App\Models\LasCountEvent;

class AdBoardController extends Controller {
    public function show()
    {
        $posts = LasAdBoardPost::select('las_ad_board_post.id as id',
                                        'las_ad_board_post.date_created as date_created',
                                        'las_ad_board_post.description as description',
                                        'las_ad_board_post.last_updated as last_updated',
                                        'las_ad_board_post.link as link',
                                        'las_ad_board_post.owner_id as owner_id',
                                        'las_ad_board_post.title as title',
                                        'las_ad_board_post.ad_board_posts_idx as ad_board_posts_idx',
                                        'las_ad_board_post.is_free as is_free',
                                        'las_ad_board_post.status as status',
                                        'members.first_name as first_name',
                                        'members.last_name as last_name',
                                        'members.email as email',
                                        'members.emailuser as emailuser')
                                ->where('status', 'PUBLISHED')
                                ->join('members', 'las_ad_board_post.owner_id', 'members.id')
                                ->orderBy('date_created', 'DESC')
                                ->paginate(25);

        foreach ($posts as $key => $post) {
            $thingRecord = LasCountedThing::where(['counted_thing_id' => $post->id, 'counted_thing_field' => 'views'])->first();
            if (isset($thingRecord)) {
                $count = LasCountedThing::where(['counted_thing_id' => $post->id, 'counted_thing_field' => 'views'])->first()->thing_count;
                $posts[$key]->thing_count = $count;
            } else {
                $posts[$key]->thing_count = 0;
            }

            if (strlen(strip_tags($posts[$key]->description)) > 200) {
                $posts[$key]->shortDescription = substr(strip_tags($posts[$key]->description), 0, 200) . '...';
            } else {
                $posts[$key]->shortDescription = strip_tags($posts[$key]->description);
            }

            $posts[$key]->description = strip_tags($posts[$key]->description);
        }

        // get posts list and count for today, last 7 days and last 30 days
        $todayPosts = LasAdBoardPost::whereDate('date_created', Carbon::today())->get();
        $todayPostsCount = $todayPosts->count();
        $weekPosts = LasAdBoardPost::whereDate('date_created', '>=', Carbon::today()->subDays(7))->get();
        $weekPostsCount = $weekPosts->count();
        $monthPosts = LasAdBoardPost::whereDate('date_created', '>=', Carbon::today()->subDays(30))->get();
        $monthPostsCount = $monthPosts->count();

        // get views count for today, last 7 days and last 30 days
        $todayViewsCount = LasCountEvent::whereDate('date_created', Carbon::today())->where('counted_thing_entity', 'AdBoardPost')->where('counted_thing_field', 'views')->get()->count();
        $weekViewsCount = LasCountEvent::whereDate('date_created', '>=', Carbon::today()->subDays(7))->where('counted_thing_entity', 'AdBoardPost')->where('counted_thing_field', 'views')->get()->count();
        $monthViewsCount = LasCountEvent::whereDate('date_created', '>=', Carbon::today()->subDays(30))->where('counted_thing_entity', 'AdBoardPost')->where('counted_thing_field', 'views')->get()->count();

        $lastTenPosts = LasBlogEntries::where('status', 'PUBLISHED')->orderBy('las_blog_entry.date_created', 'DESC')->join('las_counted_thing', 'las_counted_thing.counted_thing_id', 'las_blog_entry.id')->take(10)->get();
        foreach($lastTenPosts as $key => $post) {
            $timestamp = strtotime($post->date_created);

            $strTime = array("second", "minute", "hour", "day", "month", "year");
            $length = array("60","60","24","30","12","10");

            $currentTime = time();
            if($currentTime >= $timestamp) {
                $diff = time()- $timestamp;
                for($i = 0; $diff >= $length[$i] && $i < count($length)-1; $i++) {
                    $diff = $diff / $length[$i];
                }

                $diff = round($diff);

                $lastTenPosts[$key]->ago = "<strong>" . $diff . " " . $strTime[$i] . "s</strong> ago ";
            }
        }

        return View('frontend.AdBoard', ['pageTitle' => 'AdBoard',
                                              'posts' => $posts,
                                              'todayCount' => $todayPostsCount,
                                              'weekPostsCount' => $weekPostsCount,
                                              'monthPostsCount' => $monthPostsCount,
                                              'todayViewsCount' => $todayViewsCount,
                                              'weekViewsCount' => $weekViewsCount,
                                              'monthViewsCount' => $monthViewsCount,
                                              'lastTenPosts' => $lastTenPosts]);
    }
}
