<?php

namespace App\Http\Controllers;

use App\Category;
use App\Topic;
use Carbon\Carbon;

Carbon::setLocale('ar');

class IndexController extends Controller {
	public function index() {
		$carousel = \App\Carousel::orderby('id', 'asc')->get();
		$cat = Category::orderby('id', 'asc')->get();
		$top = Topic::with('cats')->orderby('created_at', 'DESC')->paginate(6);
		return view('index', compact('cat', 'top', 'carousel'));

	}
	public function show($id) {
		$cat = Category::orderby('id', 'asc')->get();
		$top = Topic::find($id);
		return view('postpage', compact('cat'))->with('top', $top);

	}
	public function carousel() {
		$carousel = \App\Carousel::orderby('id', 'asc')->get();
		return view('layouts.carousel1', compact('carousel'));

	}

}
