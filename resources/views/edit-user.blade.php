	@extends('master')
	@section('title','Edit User')
	@section('main')
	<div class="col-md-2"></div>
	<div class="col-md-6 main" style="margin-top: 50px;">
	<div class="panel-heading" >
		<h2>Edit User</h2>
		<p class="alert-red">{{$errors->email->first('email')}}</p>
	</div>
	<div class="panel-body">
		<form method="POST" action="{{route('users.update',['user'=>$user->id]) }}">
			@csrf
			@method('PUT')
			<div class="form-group">
				<label>User Name</label>
				<input type="text" required name="name" class="form-control" placeholder="Name" value="{{$user->name}}">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="text" required name="email" class="form-control" placeholder="Email" value="{{$user->email}}">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" required name="password" class="form-control"
				value="{{$user->password}}">
			</div>
			<div class="form-group">
				<label>Birthday</label>
				<input type="date" required name="birthday" class="form-control"
				value="{{$user->birthday}}">
			</div>
			<div class="form-group">
				<label>Gender</label>
				<select name="gender" required>
					<option  value="1" @if($user->gender===1)checked @endif>Male</option>
					<option  value="2" @if($user->gender===2)checked @endif>Female</option>
				</select>
			</div>
			<div class="form-group">
				<input type="submit" class="form-control btn btn-primary" value="Update">
			</div>
			<div class="form-group">
				<a href="{{asset('users/')}}"><input type="button" name="sub" class="form-control btn btn-danger" placeholder="" value="Cancle" ></a>
			</div>
		</form>
	</div>	
	</div>
	<div class="col-md-2"></div>
	</div>
	@stop