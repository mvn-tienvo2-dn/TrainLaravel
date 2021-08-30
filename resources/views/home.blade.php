@extends('master')
@section('title','List User')
@section('main')
<div class="col-md-10 main">
	<div class="panel-heading" >
		<h2>List User</h2>
	</div>
         @if(session('success'))
         <p class="alert-red">{{session('success')}}</p>
         @endif   
<div class="btnAdd">
	<a href="{{asset('users\create')}}"><button class="btn btn-primary">Thêm sản phẩm</button></a></div>	
<table class="table">
	<thead>
		<tr>
		 <th>ID</th>
 		 <th>Name</th>  
 		 <th>Email</th>  
 		 <th>Created at</th>    
         <th>Action</th>  
 		 <th>Action</th> 
		</tr>
	</thead>
 	<tbody> 
 		@foreach($userslist as $user)
 		<tr>
 			<td>{{$user->id}}</td>
 			<td>{{$user->name}}</td>
 			<td>{{$user->email}}</td>
 			<td>{{$user->created_at}}</td>
  			<td><a href="{{asset('users/update/'.$user->id)}}"><button type="button" class="btn btn-warning" onclick="return confirm('Bạn có muốn sửa ?');">Edit</button></a></td>
  			<td><a href="{{asset('users/delete/'.$user->id)}}"><button type="button" class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa ?');">Delete</button></a></td>	
 		</tr>
    @endforeach
 	</tbody>
 </table>
</div>
@stop
