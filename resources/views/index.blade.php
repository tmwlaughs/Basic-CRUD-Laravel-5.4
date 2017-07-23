@extends('layout')

@section('content')
	<a href="crud/create">Post Something</a>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Post</th>
			</tr>
		</thead>

		<tbody>
			@foreach($crud as $post)
			<tr>
				<td>{{ $post['id'] }}</td>
				<td>{{ $post['name'] }}</td>
				<td>{{ $post['post'] }}</td>
				<td><a href="{{ action('CRUDController@edit', $post['id']) }}">Edit</a></td>
				<td>
					<form method="POST" action="{{ action('CRUDController@destroy', $post['id']) }}">
						{{ csrf_field() }}
						{{ method_field('DELETE') }}
						<button type="submit">Delete</button>							
					</form>
				</td>
			</tr>		
			@endforeach
		</tbody>
	</table>
@endsection