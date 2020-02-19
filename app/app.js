'use strict';

angular.module("UranData", [
	'ngRoute',
	'ngAnimate',
	'objectUD.list',
	'ObjectDB.service',
	'subobj.DB',
	]).
config(['$routeProvider', function($routeProvider){
	$routeProvider.
		when("/", {templateUrl: "catalog/catalog.html", controller: "objectsUDCtrl"  })
		.when("/subobj/:id", {templateUrl: "subobj/subobj.html", controller: "subobj"})
	
		.otherwise({redirectTo: "/"});
}]);



