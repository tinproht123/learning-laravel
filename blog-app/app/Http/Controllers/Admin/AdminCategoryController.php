<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    public function index()
    {
        $popular_categories = Category::withCount('posts')->orderByDesc('posts_count')->take(5)->get();
        return view('admin.admin-categories', [
            'popular_categories' => $popular_categories
        ]);
    }
}