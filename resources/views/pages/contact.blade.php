@extends('main')
@section('title', '| contact')

@section('content')
<h2>Contact to me</h2>
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<form action="{{url('contact')}}" method="post">
			{{ csrf_field() }}
		<div class="form-group">
			<label for="email">Email</label>
			<input type="email" id="email" name="email" class="form-control">
		</div>
		<div class="form-group">
			<label for="subject">Subject</label>
			<input type="text" id="subject" name="subject" class="form-control">
		</div>
		<div class="form-group">
			<label for="message">Message</label>
			<textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
		</div>
		<input type="submit" class="btn btn-primary" value="Submit">
	</div>
</form>
</div>


@endsection