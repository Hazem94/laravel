@extends('layout.tamp')

@section('title', 'Home Page')

@section('body')
	<center><a href="todo/create" class="btn btn-info">Add New</a></center>
	<center><h1>ToDo List: </h1></center>
	<ul class="list-group ">
		@foreach($todos as $todo)
			<li class="list-group-item">
				{{$todo->body}}    
				<span class="float-right">{{$todo->created_at->diffforhumans()}}</span>	 
	    	</li>
		@endforeach
    </ul>
@endsection