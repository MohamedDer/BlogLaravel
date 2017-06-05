<?php 

namespace App\Http\Controllers;
use App\Post;

class PagesController extends Controller {


	public function getIndex() {
		$posts= Post::orderBy('created_at','desc')->limit(4)->get();
		return view('welcome')->withPosts($posts);


	}

	public function getAbout (){ 

		$first = 'Mohamed';
		$last = 'Derkaoui';
		$fullname = $first . " ". $last;
		$email = 'medder12@gmail.com';
		$data =[];
		$data ['email']= $email;
		$data ['fullname'] = $fullname;
		return view('about')->withData($data);


	}


public function getContact() {

		return view('Contact');


	}


} 