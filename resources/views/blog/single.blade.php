@extends('main')

{{-- @section('title', "| $post->title") --}}


@section('content')

<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<h1>{{ $post->title }}</h1>
		<p> {{ $post->body }} </p>
		<p><strong>Published in: </strong> {{ $post->category->name }}</p>
	</div>
</div>
<hr style="margin-top: 50px;">
<h3><span class="glyphicon glyphicon-comment"></span> {{ "Comment: " .$post->comments->count() }}</h3>
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		@foreach($post->comments as $comment)
		<div class="media">
			<div class="media-left">
				<img class="media-object" src="{{ "https://www.gravatar.com/avatar/".md5(strtolower(trim($comment->email))). "?d=". urlencode('mp') }}" alt="">
			</div>
			<div class="media-body">
				<div class="media-heading">
					<h4>{{ $comment->name }}</h4>
					<i>{{ $comment->created_at }}</i>
			<p>{{ $comment->comment }}</p>
				</div>
			</div>
		</div>
		@endforeach
	</div>
</div>
<hr style="margin-top: 50px;">
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		{{ Form::open(['route'=>['comments.store', $post->id], 'method'=>'POST']) }}
				<div class="col-md-6">
					{{ Form::label('name', 'Name')}}
					{{ Form::text('name', null, ['class'=>'form-control']) }}
				</div>

				<div class="col-md-6">
					{{ Form::label('email', 'Email')}}
					{{ Form::email('email', null, ['class'=>'form-control']) }}
				</div>

				<div class="col-md-12">
					{{ Form::label('comment', 'Comment')}}
					{{ Form::textarea('comment', null, ['class'=>'form-control', 'rows'=>'5']) }}
				</div>

				<div class="col-md-12">
					<br>
					{{ Form::submit('Add Comment', ['class'=>'btn btn-primary']) }}
				</div>
		{{ Form::close() }}
	</div>
</div>

@endsection