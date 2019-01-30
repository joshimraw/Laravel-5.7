	@extends('main')
	
	@section('title', '| Homepage')

	@section('content')

		<div class="jumbotron">
			<h1>Hello, world!</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque aliquam excepturi distinctio unde rerum accusantium dolorem consequatur earum !</p>
			<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
		</div>


		<div class="row">
			<div class="col-md-7 col-md-offset-1">
				@foreach($posts as $post)

				<div class="row">
					<div class="post-item">
						<h2> {{ $post->title }} </h2>
						<p> {{ substr($post->body, 0, 255) }} </p>
						<a href="{{ url('blog/'.$post->slug) }}" class="btn btn-info btn-small">Read more</a>
						<br>
						<br>
					</div>
				</div>
				
				@endforeach
			</div> <!-- end of col eight -->

			<div class="col-md-2 col-md-offset-1">
				<h2>All Archive </h2>
				<hr>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis id tempora quidem doloribus accusamus sed eligendi, molestias, voluptate, delectus nisi maiores dolorem! Quas quod possimus 
			</div>
		</div>

		@endsection





