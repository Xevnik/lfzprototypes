// Create the route module and name it routeApp
var app = angular.module('routeApp',['ngRoute']);
// Config the routes
app.config(function($routeProvider) {
    $routeProvider
    // route for the home page
        .when('/home', {
            templateUrl: 'pages/home.html',
            controller: 'homeCtrl'
        })
        // route for the about page
        .when('/about', {
            templateUrl: 'pages/about.html',
            controller: 'aboutCtrl'
        })
        // route for the contact page
        .when('/contact', {
            templateUrl: 'pages/contact.html',
            controller: 'contactCtrl'
        })
        .otherwise({
            redirectTo: '/home'
        });
});
// Create the controllers for the different pages below
app.controller('routeCtrl', function($scope, $log){
    $scope.message = 'lorem ipsum';
});
// home page controller
// Create a message to display in the view
app.controller('homeCtrl', function($scope, $log){
    $scope.message = 'home lorem ipsum';
});
// about page controller
// Create a message to display in the view
app.controller('aboutCtrl',function($scope, $log){
    $scope.message = 'about lorem ipsum';
});
// contact page controller
// Create a message to display in the view
app.controller('contactCtrl', function($scope, $log){
    $scope.message = 'contact lorem ipsum';
});