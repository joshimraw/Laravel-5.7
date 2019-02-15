@extends('main')

@section('title', '| Create New Post')


@section('content')

<div class="row">
	<div class="col-md-6 col-md-offset-3">
		{!! Form::open(['url' => 'posts', 'data-parsley-validate' => '']) !!}
		    {!! Form::label('title', 'Post Title') !!}
		    {!! Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength'=>'25')) !!}

		    {!! Form::label('slug', 'Post Slug') !!}
		    {!! Form::text('slug', null, array('class' => 'form-control', 'required' => '', 'minlength'=>'5', 'maxlength'=>'255')) !!}

		    {!! Form::label('category_id', 'Category') !!}
		    <select name="category_id" class="form-control">
		    	@foreach($categories as $category)
					<option value="{{ $category->id }}">{{ $category->name }}</option>
		    	@endforeach
		    </select>

		    {!! Form::label('tags', 'Tags') !!}
		    <select name="tags[]" class="form-control select2-multi" multiple="multiple">
		    	@foreach($tags as $tag)
					<option value="{{ $tag->id }}">{{ $tag->name }}</option>
		    	@endforeach
		    </select>

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