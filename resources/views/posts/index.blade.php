@extends('main')

@section('title')
	كل المنشورات
@stop

@section('content')
	<div class="container">
		<div class="row">
			 <div class="col-md-10">
			 	<h1>كل المنشورات</h1>
				
			 </div>

			 <div class="col-md-2">
				<a href="{{ route('posts.create') }}" class="btn btn-lg btn-block btn-primary btn-a-spacing">موضوع جديد</a>
			 </div>
			<div class="col-md-12">
			 <hr>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<table class="table">
					<thead>
						<th>#</th>
						<th>العنوان</th>
						<th>نص الموضوع</th>
						<th>نشر في:</th>
						<th></th>
					</thead>
					<tbody>
						@foreach ($posts as $post)
							<tr>
								<th>{{ $post->id }}</th>
								<td>{{ $post->title }}</td>
								<td>{{ substr($post->body, 0, 50) }}</td>
								<td>{{ $post->created_at }}</td>
								<td><a href="#" class="btn btn-primary">عرض</a> 
									<a href="#" class="btn btn-primary">تعديل</a></td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
@stop