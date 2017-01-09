@extends('main')

	@section('title')
		مقالات
	@stop

	@section('content')
		<!-- Start Content -->
		<div class="container">
			<div class="row">
				<div class="col-md-8">

					@foreach ($posts as $post)
					<!-- Start Content -->
					<div class="post">
		                <h3>{{ $post->title }}</h3>
		                <p>{{ $post->body }}</p>
		                <a href="#" class="btn btn-primary">إقراء المزيد</a>
		            </div>
		            
		            <hr>
					@endforeach


		        </div>
	          	<div class="col-md-3 col-md-offset-1">
	            	<h2>القائمة الجانبية</h2>
	          	</div>
		    </div>
		</div>
		<!-- End Content -->
@stop