@extends('layouts.master')
@section('content')
<div class='row'>
  <div class="col-md-7">
	<div class="box">
            <div class="box-header">
              <h3 class="box-title">List of Subscriber</h3>
            </div>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
				  <th>ID</th>
                  <th>Mobile No.</th>
                  <th>Name</th>
                  <th>Balance</th>
                  <th>Status</th>  
                  <th>Status</th>  
                </tr>
                </thead>
                <tbody>
                @foreach( $subscriber as $val )
				<tr>
                  <td>{{ $val->id }}</td>
				  <td>{{ $val->mob_no }}</td>
                  <td>{{ $val->name }}</td>
                  <td>{{ $val->balance }}</td>
                  <td>@if($val->status==1) {{'Success'}} @else {{'Deleted'}} @endif</td>
                  <td><a href="#" class="btn btn-info">Edit</a> <a href="#" class="btn btn-warning">Delete</a></td>
                </tr>
                @endforeach
                </tbody>
                
              </table>
		</div> 
	</div>
	<div class="col-md-5">
		<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Create a Subscriber</h3>
            </div>
            <!-- /.box-header -->
			@if( Session::has('success') )
            <div class="alert alert-success">
                <button type="button" class="close fui-cross" data-dismiss="alert"></button>
                {{ Session::get('success') }}
            </div>
            @endif
            @if( Session::has('error') )
            <div class="alert alert-error">
                <button type="button" class="close fui-cross" data-dismiss="alert"></button>
                {{ Session::get('error') }}
            </div>
            @endif
            <!-- form start -->
            	<form class="" role="form" method="POST" action="{{ url('subscriber') }}" enctype="multipart/form-data">
				{{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Mobile No.</label>
                  <input type="number" class="form-control" name="mob_no" id="mobile" placeholder="Subscriber Mobile No.">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Name</label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="Subscriber Name">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Balance</label>
                  <input type="text" class="form-control" name="balance" id="balance" placeholder="Balance">
                </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
	</div>
</div>			
@endsection
	