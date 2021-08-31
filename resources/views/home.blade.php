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
 		 <th>Gender</th>
 		 <th>Grade</th>    
         <th>Action</th>  
 		 <th>Action</th> 
		</tr>
	</thead>
 	<tbody> 
 		@foreach($userslist as $user)
 		<tr>
 			<td>{{$user->id}}</td>
 			<td><a href="{{route('users.show',['user'=>$user->id])}}">{{$user->name}}</a></td>
 			<td>{{$user->email}}</td>
 			<td>{{$user->created_at}}</td>
 			<td>{{$user->gender_name}}</td>
 			<td>{{$user->grade}}</td>
  			<td>
  				<form action="{{ route('users.edit', ['user'=>$user->id]) }}" method="POST">
  					@csrf
  					@method('GET')
  					<button type="submit" class="btn btn-warning"
  					onclick="return confirm('Are you want to Edit ?');">Edit
  				</button>
  			    </form>
  			</td>
  			<td>
  				<form action="{{asset('users/'.$user->id)}}" method="POST">
  					@csrf
  					@method('DELETE')
  					<button type="submit" class="btn btn-danger"
  					onclick="return confirm('Are you want to Delete ?');" id="btndelete">Delete
  				</button>
  			    </form>
  			</td>>	
 		</tr>
    @endforeach
 	</tbody>
 </table>
</div>
@stop
