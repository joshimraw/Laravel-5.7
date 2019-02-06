@extends('main')

@section('title', 'All Categories')

@section('content')

<div class="row">
	<div class="col-md-4">
		<div class="well">
			{!! Form::open(['route'=>'categories.store', 'method'=>'POST']) !!}
				<h2>Add New Category</h2>
				{{Form::label('name', 'Name')}}
				{{Form::text('name', null, ['class'=>'form-control'])}} <br>
				{{Form::submit('Add Category', ['class'=>'btn btn-primary'])}}

			{!! Form::close() !!}
		</div>
	</div>
	<div class="col-md-8">
		<div class="well">
		<h2>All Categories</h2>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>#</th>
					<th>Name</th>
				</tr>
			</thead>
			<tbody>
				@foreach($categories as $category)
					
					<tr>
						<td>{{ $category->id }}</td>
						<td>{{ $category->name }}</td>
					</tr>
				
				@endforeach
			</tbody>
		</table>
	</div>
</div>
</div>

@endsection