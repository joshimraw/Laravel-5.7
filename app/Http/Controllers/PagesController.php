<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;
use Mail;
use Session;

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
		return view('pages.contact');
	}
	public function postContact(Request $request){
		$this->validate($request, [
			'email'		=> 'required|email|min:9',
			'subject'	=> 'required|max:60',
			'message'	=> 'required|max:255|min:10'
		]);
		$data = array(
			'email' 	=> $request->email,
			'subject'	=> $request->subject,
			'bodyMessage'=> $request->message,
		);
		Mail::send('email.contact', $data, function($message) use($data){
			$message->from($data['email']);
			$message->to('joshim7m@gmail.com');
			$message->subject($data['subject']);
		});
		Session::flash('success', 'Mail has sent');
		return redirect()->route('blog.index');
	}
}