
@extends('main')

@section('title', '| Blog')

@section('content')

<div class="row">
	<div class="col-md-8 col-md-offset-2">
		@foreach($posts as $post)

		<h2>{{ $post->title }}</h2>
		<p><strong>Published:</strong> {{ date('M j, Y', strtotime($post->created_at)) }}</p>

		<p>{{ substr($post->body, 0, 255) }} {{ strlen($post->body) > 255 ? "...":"" }}</p>
		<a href="{{ route('blog.single', $post->slug)}}" class="btn btn-info btn-small">Read more</a>
		<hr>

		@endforeach
	</div>
</div>

@endsection