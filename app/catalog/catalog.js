'use strict';
angular.module('objectUD.list',['ui.bootstrap'])
	.controller('objectsUDCtrl',['$scope', 'ObjectAPIservice', function ($scope, ObjectAPIservice) {
	    
	    $scope.currentPage = 1;
		$scope.pageSize = 2;
		
		 
		ObjectAPIservice.getObjData().success(function(data){
			$scope.stationslist=data;
				});
		}]);
		
			 
   