@extends('main')

@section('title')
	مشاهدة الموضوعات
@stop

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<h1>{{ $post->title }}</h1>
				<br>
				<p class="lead">{{ $post->body }}</p>
			</div>
			<div class="col-md-4">
				<div class="well">

					<dl class="dl-horizontal">
  						<dt>تاريخ النشر</dt>
  						<dd>{{ date('M j, Y h:i a', strtotime($post->created_at)) }}</dd>
					</dl>

					<dl class="dl-horizontal">
  						<dt>أخر تعديل</dt>
  						<dd>{{ date('M j, Y h:i a', strtotime($post->updated_at)) }}</dd>
					</dl>

					<hr>

					<div class="row">
						<div class="col-sm-6">
							<a href="{{route('posts.edit', ['post'=>$post->id])}}" class="btn btn-primary btn-block">تعديل</a>
						</div>

						<div class="col-sm-6">
							<a href="{{route('posts.destroy', ['post'=>$post->id])}}" class="btn btn-danger btn-block">حذف</a>
						</div>
					</div>

				</div>
	        </div>
		</div>
	</div>
@stop
