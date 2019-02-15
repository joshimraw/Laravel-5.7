@extends('main')

@section('title', 'All Tags')

@section('content')

<div class="row">
	<div class="col-md-4">
		<div class="well">
			{!! Form::open(['route'=>'tags.store', 'method'=>'POST']) !!}
				<h2>Add New Tag</h2>
				{{Form::label('name', 'Name')}}
				{{Form::text('name', null, ['class'=>'form-control'])}} <br>
				{{Form::submit('Add Tag', ['class'=>'btn btn-primary'])}}

			{!! Form::close() !!}
		</div>
	</div>
	<div class="col-md-8">
		<div class="well">
		<h2>All Tags</h2>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>#</th>
					<th>Name</th>
				</tr>
			</thead>
			<tbody>
				@foreach($tags as $tag)
					
					<tr>
						<td>{{ $tag->id }}</td>
						<td>{{ $tag->name }}</td>
					</tr>
				
				@endforeach
			</tbody>
		</table>
	</div>
</div>
</div>

@endsection