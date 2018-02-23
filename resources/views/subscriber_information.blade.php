@extends('layouts.dashboard')
@section('content')
<div class='row'>
  <div class="col-md-6">
             @if ($errors->has('mob_no'))
                 <span class="help-block">
                   <strong>{{ $errors->first('mob_no') }}</strong>
                 </span>
            @endif
			  <form role="form" id="choose_form" method="post" action="{{ route('subscribersave') }}" >
			  {{ csrf_field() }}
              <div class="form-group">
                <label>Find a Subscriber</label>
                <select class="form-control select2" name="mob_no" style="width: 100%;">
                  <option value="">Choose a Subscriber</option>
				  @foreach( $subscriber as $sub ) 
					<option value="{{$sub['id']}}" <?php if(isset($sess['id'])==$sub['id']){ echo 'selected=selected'; } ?> >{{$sub['mob_no']}}</option>
				  @endforeach
                </select>
              </div>
              <div class="form-group">
			  <input type="submit" value="GO" id="find_mob" />
			  </div>
              <!-- /.form-group -->
            </form>
			</div>
</div>			
@endsection
	