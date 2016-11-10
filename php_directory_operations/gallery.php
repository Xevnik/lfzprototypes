<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 11/10/16
 * Time: 9:59 AM
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Load files</title>
    <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<style>
    img{
        width: 25%;
    }
    .modal-body img{
        width: 100%;
    }
</style>
<div class="container">
    <h2>Modal with JS, jQuery and php</h2>
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

</div>
<script>
    $(document).ready(function(){
        load_files();
        click_handlers();
    });
    function click_handlers(){
        $('.container').on('click','img', function(){
            console.log('An image was clicked: ', $(this).attr('src'));
            var imgSrc = $(this).attr('src');
            var $modalImg = $('<img>', {src: imgSrc});
            $('.modal-body').html('').append($modalImg);
            $('#myModal').modal();
        });
    }
    function load_files(){
        $.ajax({
            method: 'GET',
            url: 'get_images.php',
            dataType: 'JSON',
            success: function(resp){
                if(resp.success){
                    console.log('ajax call ', resp);
                    for (var img in resp.files) {
                        var $img = $('<img>',{
                            src: resp.files[img]
                        });
                        $('.container').append($img);
                    }
                }
            }
        });
    }
</script>
</body>
</html>
