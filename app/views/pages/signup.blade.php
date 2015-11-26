@extends('layouts.default')


@section('content')


<div id="container">
	
	<div id="loginForm" data-url="{{$signupURL}}">
		<h2>Signup Form</h2>
		

		<div class="form">

			{{ Form::open() }}
			 
			{{Form::label('email','Email', array('class' => 'loginLabel'))}}
			{{Form::text('email', '', array('class' => 'loginField'))}}

			{{Form::label('password','Password',  array('class' => 'loginLabel'))}}
			{{Form::password('password', array('class' => 'loginField'))}}
			
			{{Form::submit('LOGIN', array('class' => 'primaryButton'))}}
			{{ Form::close() }}
		
		</div>

	</div>
	
</div>
@stop

@section('scripts')
{{HTML::script('/js/signup.js')}}
<script>$(function() { signup.init() });</script>
@stop