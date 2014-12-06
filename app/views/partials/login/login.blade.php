@extends('layouts.master')

@section('content')

	<div class="row" ng-controller="UserCtrl as login">
		<div class="col-lg-2"></div>
		<div class="col-lg-4">
			<div class="input-group input-group-lg">
				<div class="col-lg-2">
					<span class="glyphicon glyphicon-user icon"> </span>
				</div>
				<div class="col-lg-10">
					<input type="text" class="form-control" placeholder="Username" ng-model="user.username">
				</div>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="input-group input-group-lg">
				<div class="col-lg-2">
					<span class="glyphicon glyphicon-asterisk icon"> </span>
				</div>
				<div class="col-lg-10">
					<input type="password" class="form-control" placeholder="Password" ng-model="user.password">
				</div>
			</div>
		</div>
		<div class="col-lg-2">
			<button class="btn btn-primary" ng-click="login()">Login</button>
		</div>
	</div>

@stop