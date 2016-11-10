var app = angular.module('sgtApp', []);

app.provider('sgtData', function(){
    //Create a variable to hold this
    var sgtScope = this;
    //Create a variable to hold your api key but set it to an empty string
    sgtScope.apiKey = '';
    //Create a variable to hold the API url but set it to an empty string
    sgtScope.apiUrl = '';
    //Add the necessary services to the function parameter list
    this.$get = function($http, $q, $log){
        //return an object that contains a function to call the API and get the student data
        return {
            call_Api: function(){
                var data = 'api_key=' + sgtScope.apiKey;
                var defer = $q.defer();
                $http({
                    url: sgtScope.apiUrl,
                    method: 'POST',
                    data: data,
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                }).then(function(response){
                    $log.info('apiCall', response);
                    defer.resolve(response);
                },function(data){
                    $log.info('apiCall fail ', response);
                    defer.reject('Something unexpected has occured');
                });
                return defer.promise;
            }
        };
        //Refer to the prototype instructions for more help
    };
});

//Config your provider here to set the api_key and the api_url
app.config(function(sgtDataProvider) {
    sgtDataProvider.apiUrl = 'http://s-apis.learningfuze.com/sgt/get';
    sgtDataProvider.apiKey = 'Mmkxjt1mxT';
});

//Include your service in the function parameter list along with any other services you may want to use
app.controller('ioController', function(sgtData, $log){
    //Create a variable to hold this, DO NOT use the same name you used in your provider
    var ioScope = this;
    //Add an empty data object to your controller, make sure to call it 'data'
    ioScope.data = {};
    //Add a function called getData to your controller to call the SGT API
    //Refer to the prototype instructions for more help
    ioScope.getData = function(){
        sgtData.call_Api()
            .then(
                function(response){
                    $log.info('data= ', response);
                    ioScope.data = response.data;
                },
                function(response){
                    $log.warn('Error= ', response);
                    alert('Well, this is embarrassing...');
                });
    }

});