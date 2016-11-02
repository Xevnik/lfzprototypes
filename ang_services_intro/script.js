var app = angular.module('itunesSearch_app', []);
app.controller('itunesController', function($http, $log){
    this.artist = null;
    this.url = null;
    $log.log('adfasfdasdf');
    this.createUrl = function(){
        var tempArr = this.artist.split(' ');
        this.artist = tempArr.join('+');
        this.url = 'https://itunes.apple.com/search?term='+ this.artist +'&callback=JSON_CALLBACK';
        this.searchItunes();
    };
    this.searchItunes = function(){
        var self = this;
        $http({
            method: 'jsonp',
            url: self.url,
            cache: false
        }).then(
            function(response){
                self.data = response['data']['results'];
                $log.log(response)
            },
            function(response){
                $log.error('Failed to connect to server');
            });
    };
});