<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticlesController extends Controller
{
    
    public function __construct(){
        $this->middleware('auth');
    }

    public function index() {
        $articles = Article::all();
        # Devuelto una vista previa del content nadamas...
        $articles->each(
            function($item, $key){
                $item['content'] = substr(strip_tags($item['content']),0, 20) . '...';
            }
        );
        return view ('articles.list', compact('articles'));
    }
        
    public function show(Article $article) {
        return view ('articles.view', compact('article'));
    }
    
    public function create() {
        return view ('articles.create');
    }

    public function store() {

        $query = request()->validate([
            'title' => ['required'],
            'content' => ['required']
        ]);

        $save = Article::create($query);

        if($save == TRUE) { return ('True');
        } else { return ('False'); }
    }
    
}
