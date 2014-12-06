@extends('layouts.master')

@section('content')

	<div class="col-lg-8">		
	</div>
	<div class="col-lg-4 complain-btn-add">
		<a class="btn btn-default" href="{{ URL::to('complains/create') }}">Add New Complain!</a>
	</div>
	<div class="col-lg-12">
		<div class="col-lg-1"></div>
		<div class="col-lg-11" ng-controller="ComplainCtrl as complain">
			<div class="panel panel-info col-lg-10" ng-repeat="complain in complains">
				<div class="row">
					<div class="col-lg-2 complain-user">
						<a href="#" class="thumbnail">				    	
					    </a>
					</div>
					<div class="col-lg-9 complain-body">
						<div class="complain-body-text">
							<div class="row">
								<p> <strong>[[ complain.name ]]</strong> </p>
							</div>
							<div class="row hero-unit">
								<p> [[ complain.description ]] </p>
								<hr>
								<p> Complain by [[ complain.user ]] </p>
							</div>
						</div>					
					</div>
					<div class="col-lg-1"></div>
				</div>	
			</div>
		</div>
	</div>

@stop