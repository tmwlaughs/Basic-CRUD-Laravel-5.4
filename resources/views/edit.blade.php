@extends('layout')

@section('content')
<div class="col-sm-10 col-sm-offset-1">
	<div class="panel panel-default">
		<div class="panel-body">
			<form method="POST" action="/crud/{{$crud->id}}">
				{{ csrf_field() }}
				{{ method_field('PATCH') }}
				<div class="form-group">
					<input type="text" name="name" value="{{$crud['name']}}"  class="form-control">
				</div>
				<div class="form-group">
					<textarea name="post" class="form-control">{{ $crud['post'] }}</textarea>
				</div>
				<button type="submit" class="btn btn-info">Update</button>
			</form>
		</div>
	</div>
</div>
@endsection
