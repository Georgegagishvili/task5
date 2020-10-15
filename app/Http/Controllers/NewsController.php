<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\News;

class NewsController extends Controller
{
    public function page()
    {
    	$news = News::get();
    	return view('techsite.blog',['news'=>$news]);
    	
    }
    public function add_news()
    {
    	$news = News::get();
    	return view('techsite.add_news',['news'=>$news]);
    }
    public function store(Request $request)
    {
    	News::create([
    		"title"=>$request->input("title"),
    		"author"=>$request->input("author"),
    		"text"=>$request->input("text"),
    	]);
        return redirect()->route('blog');
    }
}
