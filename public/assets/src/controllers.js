var app = angular.module('wayApp', []);

app.config(function($interpolateProvider) {
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');
  });
  
app.controller('UserCtrl', function ($scope, $http) {
	$scope.user = {'username':'', 'password':''};
	$scope.login = function () {

		$http.post($scope.base + '/auth', $scope.user).
			success(function(data, status, headers, config) {
				window.location.assign($scope.base+'/home');
			}).
			error(function(data, status, headers, config) {
				console.log('Error');
			});
	}
	$scope.newUser = {'username':'', 'password':'', 'f_name': '', 'l_name': '', 'email': ''};

	$scope.register = function () {

		$http.post($scope.base + '/register', $scope.newUser).
			success(function(data, status, headers, config) {
				window.location.assign($scope.base+'/auth');
			}).
			error(function(data, status, headers, config) {
				console.log('Error');
			});
	}
});

app.controller('ComplainCtrl', function ($scope, $http) {
	$scope.complains = [];
	$http.get($scope.base + '/complains/list').
		success(function (data, status, headers, config) {
			$scope.complains = data;
		}).
		error(function(data, status, headers, config) {
			console.log('Error');
		});
	$scope.post = function () {

		$http.post($scope.base + '/complains', $scope.newComplain).
			success(function(data, status, headers, config) {
				window.location.assign($scope.base+'/complains');
			}).
			error(function(data, status, headers, config) {
				console.log('Error');
			});
	}
});