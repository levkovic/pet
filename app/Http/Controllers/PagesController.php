<?php

namespace App\Http\Controllers;

use App\Notifications\SubscriptionRenewalFailed;
use Illuminate\Http\Request;
use App\User;

class PagesController extends Controller
{
	public function index()
	{
		return view('app');
	}

    public function home()
	{
		return view('welcome',[
			'foo' => 'bar'
		]);
	}

	public function about()
	{
		return view('about');
	}

	public function contact()
	{
		return view('contact');
	}

	public function test()
	{
		$user = User::first();

		$user->notify(new SubscriptionRenewalFailed());

		echo 'wearein';
	}
}
