@extends('dblayout.dbheader')
@section('content')
 <div class="app-wrapper">   
	<div class="app-content pt-3 p-md-3 p-lg-4">
		<div class="container">
	            <div class="row">
		            <div class="col-sm-12">
                 
			            <form method="post" action="{{route('clients.store')}}"  enctype="multipart/form-data">
			              @csrf
                          <div class="row g-3">
                            <div class="col">
                              <label for="Image"><h5>{{__('Choose Image')}}</h5></label><br>
                              <input type="file" class="form-control-file mb-4" name="image" accept="image/jpeg,image/png,image/jpg">
                              <small class="text-danger">@error('image') {{ $message }} @enderror</small>
                            </div>                           
                          </div>
                          <button type="submit" class="btn text-white" style="background-color: #E43B3B;">Submit</button>
                        </form>

                    </div>
		        </div>
	    </div>
	</div>
 </div>		
@endsection