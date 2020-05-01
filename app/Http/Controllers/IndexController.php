<?php

namespace App\Http\Controllers;
use App\Category;
use App\Topic;
use Carbon\Carbon;
use Illuminate\Http\Request;

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
		$top->increment('views');
		return view('postpage', compact('cat'))->with('top', $top);

	}
	public function showcat($id) {

		$cat = Category::find($id);
		$allcat = Category::orderby('id', 'asc')->get();
		$top = Topic::where('category_id', '=', $id)->paginate(6);
		return view('layouts.catpage', compact('top', 'allcat'))->with('cat', $cat);

	}
	public function carousel() {
		$carousel = \App\Carousel::orderby('id', 'asc')->get();
		return view('layouts.carousel1', compact('carousel'));

	}
	public function gallery() {
		$carousel = \App\Carousel::orderby('id', 'desc')->paginate(6);
		return view('gallery', compact('carousel'));

	}
	public function search() {
		$cat = Category::orderby('id', 'asc')->get();
		$q = Request('q');
		$top = Topic::with('cats')->where('title', 'LIKE', '%' . $q . '%')->orWhere('preview', 'LIKE', '%' . $q . '%')->orWhere('content', 'LIKE', '%' . $q . '%')->paginate(6);
		if (count($top) > 0) {
			return view('searchresults', compact('cat', 'top'))->withQuery($q);
		} else {
			return view('searchresults')->with('msg', 'أنا أسف ... لسه مهبدتش في الحوار ده!');
		}

	}

}
