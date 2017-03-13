<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
//use App\Article;

class ArticleController extends Controller
{
    /*
        public function staticCreate(){
        $article = Article::firstOrCreate(
            [
                'name' => 'First Article'
            ]);
        return "Article ".$article->name." is ready";
    }
    
    public function get(){
        $id = request()->route("id");
        if(is_null($id)){
            $articles = \App\Article::all();
            return view("articles", ["articles"=>$articles]);
        }
        $article = Article::find($id);
        if(is_null($article)){
            return redirect("article");
        }
        return view("article", ["article"=>$article]);
    }*/
    //$article = new \App\Article();
    //$article->name = "First Article";
    //$article->save();
}
