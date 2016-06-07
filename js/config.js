angular.module('app')
.config(function($routeProvider) {
	$routeProvider
		.when('/login',{
			templateUrl: 'views/login.php',
			controller: 'loginCtrl'
		})
		.when('/newUser',{
			templateUrl: 'views/newUser.php',
			controller: 'newUserCtrl'
		})
		.when('/user',{
			templateUrl: 'views/user.php',
			controller: 'userCtrl'
		})
		.when('/admin',{
			templateUrl: 'views/admin.php',
			controller: 'adminCtrl'
		})
		.when('/logout',{
			templateUrl: 'logout.php',
			controller: 'logoutCtrl'
		})
		.otherwise({
			redirectTo: '/login'
		});
});