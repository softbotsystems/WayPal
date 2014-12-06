@extends('layouts.master')

@section('content')
	<!-- Split button -->
	<div class="col-lg-12">
		<div class="col-lg-1"></div>
		<div class="col-lg-4">
			<div class="home-round btn-roads"></div>
			<div class="">
				<a class="home-btn-text" href="{{ URL::to('roadmaps') }}">ROADMAPS</a>
			</div>
		</div>		
		<div class="col-lg-2"></div>			
		<div class="col-lg-4">
			<div class="home-round btn-complain"></div>
		   <div class="">
		   		<a class="home-btn-text" href=" {{ URL::to('complains') }} ">COMPLAINS</a>
		   </div>
		</div>
		<div class="clearfix"></div>
		<div class="col-lg-1"></div>
		<div class="col-lg-4">
			<div class="home-round btn-black-spot"></div>
		    <div class="">
		    	<a class="home-btn-text" href=" {{ URL::to('maps') }} ">LOCATIONS</a>
		    </div>
		 </div>		 
		<div class="col-lg-2"></div>		 	
		 <div class="col-lg-4">
		 	<div class="home-round btn-register"></div>
		    <div class="">
		    	<a class="home-btn-text" href=" {{ URL::to('register') }} ">REGISTER</a>
		    </div>
		 </div>		 
	 </div>


@stop