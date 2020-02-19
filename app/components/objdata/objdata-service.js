'use strict';
	angular.module('ObjectDB.service', [])
	.factory('ObjectAPIservice', ['$http', function($http){
		var ObjectAPI = {};

		ObjectAPI.getObjData = function() {
		    
		    var promise =$http.get("json/stationObjects.json");
		    promise.then(fulfilled, rejected);
			return $http.get("json/stationObjects.json");
		
		    function fulfilled(response) {

                console.log("Status: " + response.status); // status - статус код полученный от сервера
                console.log("Type: " + response.headers("content-type")); // headers - метод для чтения заголовков ответа
                console.log("Length: " + response.headers("content-length"));

                
            }

            function rejected(error) {
                console.error(error.status);
                console.error(error.statusText);
            }
		    
		    
		};

	
		return ObjectAPI;
	}]	);
	
	
	
	            
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

	
