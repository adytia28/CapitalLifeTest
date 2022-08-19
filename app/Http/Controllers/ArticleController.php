<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index() {
        return view('web.articles.index', [
            'articles' => Articles::paginate(8),
        ]);
    }

    public function detail($slug) {
        return view('web.articles.detail',[
            'article' => Articles::where('slug', $slug)->firstOrFail(),
        ]);
    }
}
