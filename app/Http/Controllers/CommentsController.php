<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comments;

class CommentsController extends Controller
{
	public function page()
	{
		$comments = Comments::get();
		return view('techsite.single',['comments'=>$comments]);
	}
    public function store(Request $request)
    {
    	Comments::create([
    		"name"=>$request->input("name"),
    		"email"=>$request->input("gmail"),
    		"comment"=>$request->input("comment"),
    	]);
        return redirect()->back();
    }
}


