<?php

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Quote;

class QuoteController extends Controller
{
	public function postQuote(Request $request)
	{
		$quote = new Quote();
		$quote->type = $request->input('type');
		$quote->nation = $request->input('nation');
		$quote->religion = $request->input('religion');
		$quote->district = $request->input('district');
		$quote->kulaya = $request->input('kulaya');
		$quote->age = $request->input('age');
		$quote->discription = $request->input('discription');
		$quote->save();
		return response()->json(['quote'=>$quote],201);
		//return view('welcome');
	}

	public function getQuote(){
		return view('welcome');
	}

}