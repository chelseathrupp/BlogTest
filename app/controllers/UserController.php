<?php

class UserController extends BaseController {


	public function showLogin()
	{
		$data = [
		'loginURL' => URL::route('login')
		];

		return View::make('pages.login', $data);
	}

	public function showSignup()
	{
		$data = [
		'signupURL' => URL::route('signup')
		];

		return View::make('pages.signup', $data);
	}

	public function doLogin(){

		$rsp = new AjaxResponse();

		if (Auth::attempt(['email' => Input::get('email'), 'password' => Input::get('password')])){

			$rsp->success = 1;
			$rsp->data = '/';

			return $rsp->toArray();

		}else{
			$rsp->success = 0;
			$rsp->error_code = 1;
			$rsp->error_msg = ['paword' => ['User name and password do not match']];

			return $rsp->toArray();
		}

	}


	public function createUser(){

		$rsp = new AjaxResponse();

		$email = Input::get('email');
		$password = Input::get('password');

		$rules = [
			'email' => 'required|email|unique:users',
			'password' => 'required|min:6|confirmed',
		];

		$validator = Validator::make([
			'email'=>$email, 
			'password'=>$password, 
		], $rules);

		if($validator->fails()){

			$rsp->success = 0;
			$rsp->error_code = 1;
			$rsp->error_msg = $validator->errors()->toArray();
		
		}else{
			$user = new User();
			$user->email = $email;
			$user->password = Hash::make($password);

			$user->confirmation_code = str_random(30);

			$user->save();

			$rsp->success = 1;
			$rsp->data = '/';

		}

		return $rsp->toArray();
			//doge runs back to ajax

	}

	
	

}
