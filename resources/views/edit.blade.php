@extends('layout')

@section('content')
	<form method="POST" action="{{ action('CRUDController@update', $id) }}">
		{{ csrf_field() }}
		{{ method_field('PATCH') }}
		<input type="text" name="name" value="{{$crud['name']}}">
		<br>
		<textarea name="post">{{ $crud['post'] }}</textarea>
		<br>
		<input type="submit">
	</form>
@endsection