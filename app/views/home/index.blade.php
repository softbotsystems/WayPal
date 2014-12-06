@extends('layouts.master')

@section('content')
	<div class="col-lg-12">
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-10 hero-unit">
				<h1> {{ Auth::user()->f_name . ' ' . Auth::user()->l_name }} </h1>
			</div>
		</div>
	</div>
@stop