@extends('layout')

@section('content')
	<form method="POST" action="/crud">
		{{ csrf_field() }}
		<input type="text" name="name" placeholder="name">
		<br>
		<textarea name="post" placeholder="post"></textarea>
		<br>
		<input type="submit">
	</form>
@endsection