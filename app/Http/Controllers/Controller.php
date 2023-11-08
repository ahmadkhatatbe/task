<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    function home(){
        $articles=Article::with('user')->get();
        
        return view('welcome',compact('articles'));
    }
    function single($id)
    {
        $articles = Article::where('id',$id)->with('user')->get();
        return view('single', compact('articles'));
    }
}
