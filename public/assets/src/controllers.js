var app = angular.module('wayApp', []);
app.controller('LoginCtrl', function ($scope, $http) {
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
});