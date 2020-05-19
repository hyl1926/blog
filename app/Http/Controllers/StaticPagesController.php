<?php

namespace App\Http\Controllers;

use \App\News;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class StaticPagesController extends Controller
{
    //
	public function home(){
		return view('home');
	}
	
	public function about(){
		return view('about');
	}

	public function news(){
		//$n = \App\News::all();
		//$n = \App\News::find([主键]);
		//$n = \App\News::where('addtime','1552585879')->orderBy('addtime','desc')->take(2)->first();
		//$n = \App\News::where('addtime','>=','1552585879')->orderBy('addtime','desc')->take(5)->get();
		$n = \App\News::where('addtime','>=','1552585879')->orderBy('addtime','desc')->paginate(2);
		//echo "<pre>";
		//$nt = json_decode(json_encode($n), true);
		//print_r($n);die;


		return view('news',['n'=>$n]);

		//$user = new News();
		//$user->title = "rrrrrr";
		//$user->content = " 123 ";
		//$user->save();
	}

	public function addnews(Request $request){

		if($request->input('title')){
			$new = new \App\News;

			$new->title = $request->input('title');
			$new->content = $request->input('content');
			$new->addtime = time();

			$new->save();
			return redirect('news');
		}

		

		return view('add');
	}

	public function edit(Request $request){

		$id = $request->input('id');
		$news = \App\News::find($id);

		if($request->input('title')){

			$news->title = $request->input('title');
			$news->content = $request->input('content');

			$news->save();
			return redirect('news');
		}

		return view('edit',['new'=>$this->retarray($news)]);

	}

	public function del(Request $request){
		\App\News::destroy($request->input('id'));

		return redirect('news');
	}

	//查询结果对象转换为数组
	public function retarray($obj){
		return json_decode(json_encode($obj), true);
	}
}
