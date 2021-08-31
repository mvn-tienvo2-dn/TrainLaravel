	@extends('master')
	@section('title','Show Posts')
	@section('main')
	<div class="col-md-2"></div>
	<div class="col-md-6 main" style="margin-top: 50px;">
	<div class="panel-heading" >
		<h2>List Post</h2>
	</div>
	<div class="panel-body">
		@foreach($postlist as $post)
		<p>{{$post->content}}</p>>
		@endforeach
	</div>	
	</div>
	<div class="col-md-2"></div>
	</div>
	@stop