<?php

namespace App\Http\Controllers;

use App\Models\BlogSetting;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display the blog index page.
     */
    public function index(Request $request)
    {
        $featured = \App\Models\BlogPost::where('is_featured', true)->first();
        $postsQuery = \App\Models\BlogPost::where('is_featured', false)->orderBy('published_at', 'desc');

        // Simple client-side filter — category passed as query param for accessibility
        $activeCategory = $request->query('category', 'all');

        if ($activeCategory !== 'all') {
            $postsQuery->where('category', $activeCategory);
        }

        $posts = $postsQuery->get();

        $categories = ['All Stories', 'Engineering', 'Strategy', 'Product', 'Design'];

        // Simple client-side filter — category passed as query param for accessibility
        $activeCategory = $request->query('category', 'all');

        $settings = BlogSetting::getSingleton();

        return view('blog.index', compact('featured', 'posts', 'categories', 'activeCategory', 'settings'));
    }
}
