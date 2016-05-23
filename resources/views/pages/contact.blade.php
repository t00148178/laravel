@extends('app')

@section('content')

@if ($name == 'Peter')
	<h1>Contact {{ $name }} Here</h1>
@else
	<h1>Contact anyone else Here</h1>

@endif

	

@stop

@section('footer')
	<hr>
	<h3>2016 - Peter Mikulasko</h3>
	<script>alert(' Contact form footer section scripts ')</script>
@stop


