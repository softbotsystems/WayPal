var app = angular.module('wayApp', ['ngRoute']);

app.config(['$routeProvider',
	function($routeProvider) {
		$routeProvider.
			when('/auth', {
				controller: 'LoginCtrl'
		}).
			when('/home', {
				controller: 'HomeCtrl'
		}).
			otherwise({
				redirectTo: '/'
		});
  }]);