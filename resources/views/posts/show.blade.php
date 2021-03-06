@extends('main')

@section('title', '| Show post');


@section('content')

<div class="row">
	<div class="col-md-8">
		<h2>{{ $post->title }}</h2>
		<p class="lead"> {{ $post->body }} </p>
		<hr>
		<div class="tags">
			@foreach($tags as $tag)
				<span class="label label-default">{{ $tag->name }}</span>
			@endforeach
		</div>
	</div>

	<div class="col-md-4">
		<div class="well">
			<dl class="dl-horizontal">
				<label>URL slug:</label>
				<p><a href="{{ route('blog.single', $post->slug)}}">{{ url('blog/'.$post->slug) }}</a></p>
			</dl>
			<dl class="dl-horizontal">
				<label>Category:</label>
				<p>{{ $post->category->name }}</p>
			</dl>
			<dl class="dl-horizontal">
				<label>Create At:</label>
				<p>{{ date('M j, Y h:ia', strtotime($post->created_at)) }}</p>
			</dl>
			<dl class="dl-horizontal">
				<label>Last Update:</label>
				<p> {{ date('M j, Y h:ia', strtotime($post->updated_at)) }} </p>
			</dl>
			<hr>
			<div class="row">
				<div class="col-md-6">
					{!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class'=>'btn btn-primary btn-block')) !!}
				</div>
				<div class="col-md-6">
					{!! Form::open(['route'=> ['posts.destroy', $post->id], 'method'=> 'delete'])!!}
					{!! Form::submit('Delete', ['class'=> 'btn btn-danger btn-block']) !!}
					{!! Form::close() !!}
				</div>
				<div class="col-md-10 col-md-offset-1">
					{{Html::linkRoute('posts.index', 'All Posts', [], ['class'=>'btn btn-default btn-block'])}}
				</div>
			</div>
		</div>
	</div>
</div>



@endsection