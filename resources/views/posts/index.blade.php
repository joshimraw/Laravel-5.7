@extends('main')

@section('title', ' All Post')



@section('content')

<div class="row">
	<div class="col-md-10">
		<h1>All Posts</h1>
	</div>
	<div class="col-md-2">
		<a href="{{route('posts.create')}}" class="btn btn-primary btn-block">Create Post</a>
	</div>
</div>
<hr>

<div class="row">
	<div class="col-md-12">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Title</th>
					<th>Body </th>
					<th>Created at</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($posts as $post)
					<tr>
						<td>{{ $post->id }}</td>
						<td>{{ $post->title }}</td>
						<td>{{ substr($post->body, 0, 80) }} {{ strlen($post->body) > 80 ? "..." : "" }}</td>
						<td>{{ date('M j, Y', strtotime($post->created_at)) }}</td>
						<td><a class="btn btn-default btn-sm" href="{{route('posts.show', $post->id)}}">View</a> 
						 <a class="btn btn-default btn-sm" href="{{route('posts.edit', $post->id)}}"> Edit</a></td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>

@endsection