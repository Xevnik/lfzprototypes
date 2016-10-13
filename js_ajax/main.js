//Create GLOBAL variable below here on line 2
var global_result;
$(document).ready(function(){
    $('button').click(function(){
        console.log('click initiated');
        $.ajax({
            dataType: 'json',
            url: 'http://ax.itunes.apple.com/WebObjects/MZStoreServices.woa/ws/RSS/topMovies/json',
            success: function(result) {
                console.log('AJAX Success function called, with the following result:', result);

                //feature set 2, 3, and 4

                global_result = result;
                var movies = global_result['feed']['entry'];
                console.log('Movies: ', movies);
                //loop the amount of items in movies
                for(var i in movies) {
                    var movie = global_result['feed']['entry'][i]
                    //goes and set movie and director
                    var movieTitleAndDirector = movie['title']['label'];
                    //assigns the 3rd movie image
                    var movieImage3 = movie['im:image'][2]['label'];
                   //create new img element using object properties
                    var newHeading = $('<h3>',{
                        text: movieTitleAndDirector
                    });
                    var newImg = $('<img>',{
                        src: movieImage3
                    });
                    //put the movie title with director and img into page
                    $('#main').append(newHeading, newImg);
                }
            }
        });
        console.log('End of click function');
    });
});