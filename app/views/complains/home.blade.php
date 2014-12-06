@extends('layouts.master')

@section('content')

	<div class="col-lg-12" ng-controller="ComplainCtrl as complain">		
		<div class="row">
			<div class="col-lg-1"></div>
			<div class="panel panel-info col-lg-10">
				<div class="col-lg-10 complain-body" ng-repeat="complain in complains">
					<div class="complain-body-text">
						<div class="row hero-unit">
							<h2> [[ complain.name ]] </h2>
						</div>
						<div class="row">
							<p> [[ complain.description ]] </p>
						</div>
					</div>
				</div>
				<div class="col-lg-2 complain-user">
					
				</div>
			</div>
			<div class="col-lg-1"></div>
		</div>
		<div class="col-lg-1"></div>
		<div class="col-lg-10">
			<a class="btn btn-default" href="{{ URL::to('complains/create') }}">Add New Complain!</a>
		</div>
	</div>

@stop