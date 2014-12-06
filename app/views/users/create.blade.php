@extends('layouts.master')

@section('content')

	<div class="col-lg-12" ng-controller="UserCtrl as register">
		<div class="row">
			<div class="col-lg-1"></div>
			<div class="col-lg-5">
				<div class="input-group input-group-lg col-lg-10">
					<input type="text" class="form-control" placeholder="First Name" ng-model="newUser.f_name">
				</div>
			</div>
			<div class="col-lg-1"></div>	
			<div class="col-lg-5">
				<div class="input-group input-group-lg col-lg-10">
					<input type="text" class="form-control" placeholder="Last Name" ng-model="newUser.l_name">
				</div>
			</div>
			<div class="col-lg-1"></div>	
			<div class="col-lg-5">
				<div class="input-group input-group-lg col-lg-10">
					<input type="text" class="form-control" placeholder="Email" ng-model="newUser.email">
				</div>
			</div>
			<div class="col-lg-1"></div>	
			<div class="col-lg-5">
				<div class="input-group input-group-lg col-lg-10">
					<input type="text" class="form-control" placeholder="Phone" ng-model="newUser.phone">
				</div>
			</div>
			<div class="col-lg-1"></div>
			<div class="col-lg-5">
				<div class="input-group input-group-lg col-lg-10">
					<input type="text" class="form-control" placeholder="Username" ng-model="newUser.username">
				</div>
			</div>
			<div class="col-lg-1"></div>	
			<div class="col-lg-5">
				<div class="input-group input-group-lg col-lg-10">
					<input type="password" class="form-control" placeholder="Password" ng-model="newUser.password">
				</div>
			</div>
			<div class="col-lg-1"></div>	
			<div class="col-lg-5">
				<div class="input-group input-group-lg col-lg-10">
					<button class="btn btn-primary" ng-click="register()">Go!</button>
				</div>
			</div>
		</div>
	</div>

@stop