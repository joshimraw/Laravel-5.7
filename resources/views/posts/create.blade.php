@extends('main')

@section('title', '| Create New Post')


@section('content')

<div class="row">
	<div class="col-md-6 col-md-offset-3">
		{!! Form::open(['url' => 'posts', 'data-parsley-validate' => '']) !!}
		    {!! Form::label('title', 'Post Title') !!}
		    {!! Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength'=>'25')) !!}

		    {!! Form::label('body', 'Post Body') !!}
		    {!! Form::textarea('body', null, array('class' => 'form-control', 'required' => ''))!!}
		    {!! Form::submit('Crete Post', array('class' => 'btn btn-success btn-block', 'style' => 'margin-top: 10px;')) !!}
		{!! Form::close() !!}
	</div>
</div>

@endsection

@section('scripts')

<script src="{{url('js/app.js')}}"></script>

@endsection