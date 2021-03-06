@extends('layout')

@section('content')
	<div class="col-sm-10 col-sm-offset-1">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h2>List of the posts</h2>
			</div>
			<div class="panel-body">
				<a href="crud/create" class="btn btn-primary" role="button">Post Something</a>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Post</th>
							<th colspan="2" class="text-center">Action</th>
						</tr>
					</thead>

					<tbody>
					@foreach($crud as $post)
						<tr>
							<td>{{ $post['id'] }}</td>
							<td>{{ $post['name'] }}</td>
							<td>{{ $post['post'] }}</td>
							<td class="text-center"><a href="/crud/{{$post->id}}/edit" class="btn btn-info" role="button">Edit</a></td>
							<td class="text-center">
								<form method="POST" action="/crud/{{$post->id}}">
								{{ csrf_field() }}
								{{ method_field('DELETE') }}
								<button type="submit" class="btn btn-danger">Delete</button>
								</form>
							</td>
						</tr>
					@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection
