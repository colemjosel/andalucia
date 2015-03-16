var myApp = angular.module('CarritoApp', ['ngCart']);

myApp.controller ('cart', ['$scope', '$http', 'ngCart', function($scope, $http, ngCart) {
    ngCart.setTaxRate(0);
    ngCart.setShipping(0);
}]);
