'use strict';

angular.module('subobj.DB', ['ui.bootstrap'])
.controller('subobj', ['$scope', '$filter', 'ObjectAPIservice', '$routeParams', function($scope, $filter, ObjectAPIservice, $routeParams){

  
		$scope.stationId = $routeParams.id;
        
		ObjectAPIservice.getObjData().success(function(data){
			$scope.stations = $filter('filter')(data, {id: parseInt($scope.stationId)}, true)[0];
		});
	}]);



















	      
	      
	  
   //movieAPIservice.getMovies().then(function (response){
	 // 	$scope.stationslist=response.data;
	//         	$scope.stationName = $routeParams.stationName;
	        
     	
	//	});
//	}]);  
     
     
     //.then(successCallback, errorCallback);
     
     
     
    //	movieAPIservice.getMovies().success(function(data){
		  
	//	    $scope.stationNameId = $routeParams.stationName;
			
	//		$scope.movie = $filter('filter')(data, {stationName: parseInt($scope//.stationNameId)}, true)[0];
			
	//	});
//	}]);     
     
     
     
     
     
     
     
     
     
    

	
	
	