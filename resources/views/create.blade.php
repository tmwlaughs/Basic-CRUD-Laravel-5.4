@extends('layout')

@section('content')
<div class="col-sm-10 col-sm-offset-1">
	<div class="panel panel-default">
		<div class="panel-body">
			<form method="POST" action="/crud">
				{{ csrf_field() }}
				<div class="form-group">
					<label>Name</label>
					<input type="text" name="name" class="form-control">
				</div>
				<div class="form-group">
					<label>Post</label>
					<textarea name="post" class="form-control"></textarea>
				</div>
				<button type="submit" class="btn btn-default" >Post</button>
			</form>
		</div>
	</div>
</div>
@endsection
