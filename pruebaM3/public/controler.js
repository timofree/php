var miapp = angular.module("Superapp",[]);



miapp.controller("TestController", function($scope , $http){

    
     $http.get('datos.json').success(function(data) {

        $scope.datos = data; 
       
});

    });