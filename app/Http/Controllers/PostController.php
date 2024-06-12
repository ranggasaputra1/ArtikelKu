<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {    
        $tittle = '';
        $authorName = request('author');
        $categoryName = request('category');

        $postsQuery = Post::latest()->filter(request(['search', 'category', 'author']));

        if ($categoryName) {
            $category = Category::firstWhere('slug', $categoryName);
            $tittle = 'in ' . $category->name;
            $categoryPostCount = $postsQuery->count();
        } else {
            $categoryPostCount = null;
        }

        if ($authorName) {
            $author = User::firstWhere('name', $authorName);
            $tittle = 'by: ' . $author->name;
            $postCount = $postsQuery->count();
        } else {
            $postCount = null;
        }

        return view('posts', [
            "tittle" => "Artikel " . $tittle,
            "header" => "Seluruh Artikel ",
            'posts' => $postsQuery->paginate(7)->withQueryString(),
            'postCount' => $postCount,
            'categoryPostCount' => $categoryPostCount,
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "tittle" => "Single Post",
            "active" => "posts",
            "post" => $post
        ]);
    }
}