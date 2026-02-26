<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeoPageController extends Controller
{
    public function show($slug)
    {
        $pages = config('seo_pages');

        if (!isset($pages[$slug])) {
            abort(404);
        }

        return view('seo-page', compact('pages', 'slug'));
    }
}
