<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatasController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

    public function create()
    {
    	return view('datas.create');
    }

    public function report()
    {
        return view('datas.report');
    }

    public function transaction()
    {
        return view('datas.transaction');
    }

    public function line()
    {
        return view('datas.line');
    }

    public function pie()
    {
        return view('datas.pie');
    }

    public function store()
    {
    	$data = request()->validate([
    		'product' => 'required',
    		'quantity' => 'required',
    		'total_amount' => 'required | integer',
    	]);

    	auth()->user()->datas()->create($data);

    	
    	request()->all();
    	return redirect('/ABCRestaurant/' . auth()->user()->id);
    }
}
