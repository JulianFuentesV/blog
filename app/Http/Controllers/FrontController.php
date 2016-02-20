<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use App\Category; 
use Carbon\Carbon;

class FrontController extends Controller
{

	public function __construct()
	{
		Carbon::setLocale('es');
	}

    public function index()
    {
    	$articles = Article::orderBy('id', 'DESC')->paginate(6);
    	$articles->each(function($articles){
    		$articles->category;
    		$articles->images;
    	});

        $categories = Category::all();
        $categories->each(function($categories){
            $categories->articles;
        });

    	return view('welcome')
                ->with('articles', $articles)
                ->with('categories', $categories);
    }

    public function searchCategory($name)
    {
        $category = Category::Search($name)->first();
        $articles = $category->articles()->orderBy('id', 'DESC')->paginate(6);
        $articles->each(function($articles){
            $articles->category;
            $articles->images;
        });
        $categories = Category::all();
        $categories->each(function($categories){
            $categories->articles;
        });

        return view('welcome')
                ->with('articles', $articles)
                ->with('categories', $categories);
    }

    public function viewArticle($slug)
    {
    	$article = Article::findBySlugOrFail($slug);
    	$article->category;
    	$article->user;
    	$article->images;
    	return view('front.article')->with('article', $article);
    }
}
