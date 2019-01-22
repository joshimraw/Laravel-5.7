<?php

namespace App\Http\Controllers;

class PagesController extends Controller {
	public function getIndex(){
		return view('pages.welcome');
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