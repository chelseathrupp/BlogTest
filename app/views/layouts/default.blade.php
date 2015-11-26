
@include('includes.header')


<div class="container">
	
	@yield('content')

</div>



{{ HTML::script('https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js') }}
@yield('scripts')

</body>
</html>