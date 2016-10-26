@extends('main')

@section('title')
	إضافة موضوع
@stop

@section('stylesheet')
	{{ Html::style('CSS/parsley.css') }}
@stop

@section('content')
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>إضافة موضوع جديد</h1>
			<hr>
			{!! Form::open(['route' => 'posts.store', 'data-parsley-validate' => '']) !!}
    			{{ Form::label('title', 'عنوان الموضوع:') }}
    			{{ Form::text('title', null, ['class' => 'form-control', 'required' => '', 'style' => 'margin-bottom:10px', 'maxlength' => '120']) }}

    			{{ Form::label('body', 'نص الموضوع:', ['style' => 'margin-top:20px']) }}
    			{{ Form::textarea('body', null, ['class' => 'form-control', 'required' => '', 'style' => 'margin-bottom:10px']) }}

    			{{ Form::submit('نشر الموضوع', ['class' => 'btn btn-primary btn-lg btn-block', 'style' => 'margin-top:20px']) }}
			{!! Form::close() !!}
		</div>
	</div>
@stop

@section('scripts')
	{{ Html::script('JS/parsley.min.js') }}
@stop