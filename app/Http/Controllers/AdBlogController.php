<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LasBlogEntries;

class AdBlogController extends Controller
{
    public function show()
    {
        $blogs = LasBlogEntries::where('admin_removed', '0')
                                ->where('status', 'PUBLISHED')
                                ->orderBy('publication_date', 'DESC')
                                ->paginate(6);

        return View('frontend.AdBlog', ['pageTitle' => 'Ad Blog', 'blogs' => $blogs]);
    }
}
