(function(){
	var app = angular.module("libben", []);

	app.controller("mainController", ["$scope", "$http", function($scope, $http){
		$scope.example = "hello world";
		$scope.tmp = this;
		$http.get('fillTables.php',{params: {key:"me"},  headers : {'Accept' : 'application/json'}}).then(function(success){
			$scope.tmp.data = success.data.example;
		});
		console.log($scope.tmp);
		$scope.fromPHP = $scope.tmp.data;
	}]);

	app.directive("usersTable", function(){
		return{
			restrict:"E",
			templateUrl: "suscritos.html"
		}
	});
})();