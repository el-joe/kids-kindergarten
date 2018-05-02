@extends('layouts.app')

@section('title','Contact Us')
@section('style')
<style type="text/css">
	
	.row input{
		margin:15px;
		padding: 15px;
		border-radius: 5px;
	}
	.text{
		height: 200px;
	}

</style>
@endsection
@section('content')
<br><br><br><br><br>
<div class="container">
	@if(Session::has('success'))
		<div class="container-fluid text-center alert alert-success">{{ Session::get('success') }}</div>
	@endif
		{!! Form::open(['route' => 'contact' , 'method'=>'post','files'=>true]) !!}
		{{ csrf_field() }}
	  <div class="form-group">
	    <label class="control-label col-sm-2" for="name">Name:</label>
	    <div class="col-sm-10">
	      <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name*" required>
	    </div>
	  </div>
	  <div class="form-group">
	    <label class="control-label col-sm-2" for="email">Email:</label>
	    <div class="col-sm-10">
	      <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email*" required>
	    </div>
	  </div>
	  <div class="form-group">
	    <label class="control-label col-sm-2" for="phone">Phone:</label>
	    <div class="col-sm-10">
	      <input type="tel" name="phone" class="form-control" id="phone" placeholder="Enter Phone*" required>
	    </div>
	  </div>
	  <div class="form-group">
	  	<label class="control-label col-sm-2" for="file">Avatar</label>
	  	<div class="col-sm-10">
    		<input type="file" name="avatar" class="form-control-file" id="file">
    	</div>
	  </div>
	  <div class="form-group">
		  <label class="control-label col-sm-2" for="comment">Comment:</label>
		  <div class="col-sm-10">
		  	<textarea class="form-control" name="comment" rows="5" id="comment" required></textarea>
		  </div>
	  </div>
	  <div class="form-group">
	  	<div class="col-sm-2">
	  		<input type="submit" class="btn btn-danger form-control"></input>
	    </div>
	  </div>
	{!! Form::close() !!}
</div>
<br><br><br><br><br>
@include('layouts.contactUs')
@include('layouts.footer')

@endsection