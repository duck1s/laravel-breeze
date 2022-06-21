<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {
        $articles = Article::paginate(20);

        return view('blog', [
            'articles' => $articles
        ]);
//        for($i=1; $i<=100; $i++) {
//            Article::create([
//                'title' => "Blog article " . $i,
//                'intro' => "Intro",
//                'content' => "Content",
//                'author' => "Joeri Breedveld",
//                'image' => "blog.jpg",
//                'published' => true
//            ]);
//        }
    }
}
