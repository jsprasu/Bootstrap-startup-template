var app =  angular.module('mainApp', [], function ($interpolateProvider) {
  $interpolateProvider.startSymbol('[[');
  $interpolateProvider.endSymbol(']]');
});

app.controller('ProductsController', function ($scope, $window, $http) {
  $scope.products = [];
  $scope.isLoading = false;

  var render = function () {
    $scope.isLoading = true;
    $http({
      method: 'GET',
      url: baseURL + '/products'
    }).then(function successCallback(response) {
      $scope.products = response.data;
      $scope.isLoading = false;
    }, function errorCallback(response) {
      console.log(response);
      $scope.isLoading = false;
    });
  };

  render();
});