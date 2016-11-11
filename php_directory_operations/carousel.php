<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 11/10/16
 * Time: 9:59 AM
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        .carousel-inner > .item > img,
        .carousel-inner > .item > a > img {
            width: 70%;
            margin: auto;
        }
        img{
            width: 100%;
            position: absolute;
            left: 0;
            top: 0;
        }
        .image_container{
            position: relative;
            width: 800px;
            height: 600px;
            left:50%;
            transform: translateX(-50%);
        }
        button{
            position: absolute;
            z-index: 1;
        }
        #prev{
            left: 0;
        }
        #next{
            right: 0;
        }
        .hidden{
            left: 100%;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="image_container">
        <button id='prev' class="btn btn-info" onclick="prev_image(this)"> < </button>
        <button id='next' class="btn btn-info" onclick="next_image(this)"> > </button>
    </div>
</div>
<script>
    var image_array = [];
    var activeImg = 0;
    $(document).ready(function(){
        load_files();
    });
    function initialize(){
        console.log('Start it!');
        $('#'+activeImg).removeClass('hidden');
    }
    function load_files(){
        $.ajax({
            method: 'GET',
            url: 'get_images.php',
            dataType: 'JSON',
            success: function(resp){
                if(resp.success){
                    console.log('ajax call ', resp);
                    for (var img = 0; img < resp.files.length; img++){
                        var imgSrc = resp.files[img];
                        console.log(imgSrc);
                        image_array.push(imgSrc);
                        var $img = $('<img>',{
                            src: imgSrc,
                            class: 'hidden',
                            id: img
                        });
                        $('.image_container').append($img);
                    }
                    console.log('Image Array ', image_array);
                    initialize();

                }
            }
        });
    }
    function prev_image(current){
        console.log('prev ', current);
    }
    function next_image(current){
        console.log('next ', current)
    }
</script>
</body>
</html>


