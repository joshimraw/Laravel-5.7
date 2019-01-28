<?php

namespace App\Http\Controllers;
use App\Post;

class PagesController extends Controller {
	public function getIndex(){
		$posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
		return view('pages.welcome')->withPosts($posts);
	}

	public function getAbout(){
		$name = 'john doe';
		return view('pages.about')->with("myname", $name);
	}

	public function getContact(){
		$info = array(
			'name' => 'joshim',
			'cell' => '245445'
		);
		return view('pages.contact')->withInfo($info);
	}
}