@extends('main')

@section('title', '| Show post');


@section('content')

<div class="row">
	<div class="col-md-8">
		{!! Form::model($post, ['route'=> ['posts.update', $post->id], 'method'=>'put'] ) !!}
		{!! Form::label('title', 'Post Title') !!}
		{!! Form::text('title', null, array('class'=>'form-control')) !!}
		
		{!! Form::label('body', 'Post Body') !!}
		{!! Form::textarea('body', null, array('class'=> 'form-control')) !!}
	</div>

	<div class="col-md-4">
		<div class="well">
			<dl class="dl-horizontal">
				<dt>Create At:</dt>
				<dd>{{ date('M j, Y h:ia', strtotime($post->created_at)) }}</dd>
			</dl>
			<dl class="dl-horizontal">
				<dt>Last Update:</dt>
				<dd> {{ date('M j, Y h:ia', strtotime($post->updated_at)) }} </dd>
			</dl>
			<hr>
			<div class="row">
				<div class="col-md-6">
					{!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class'=>'btn btn-default btn-block')) !!}
				</div>
				<div class="col-md-6">
					{!! Form::submit('Save Changes', ['class'=> 'btn btn-success btn-block']) !!}
				</div>
			</div>
		</div>
	</div>
	{!! Form::close(); !!}
</div>



@endsection