@extends('layouts.master')

@section('content')

	<div class="col-lg-12" ng-controller="ComplainCtrl as register">
		<div class="row">
			<div class="col-lg-6">
				<div class="input-group input-group-lg col-lg-10">
					<input type="text" class="form-control" placeholder="Name" ng-model="newComplain.name">
				</div>
			</div>
			<div class="col-lg-4"></div>
			<div class="col-lg-2">
				<div class="input-group input-group-lg col-lg-12">
					<button class="btn btn-primary" ng-click="post()">Done!</button>
				</div>
			</div>
			<div class="input-group input-group-lg col-lg-12">
			<textarea rows="6" cols="50" class="form-control complains-description" placeholder="Description" ng-model="newComplain.description">
					
				</textarea>
			</div>
		</div>
	</div>

@stop