<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 11/15/16
 * Time: 11:11 AM
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ajax</title>
    <script src="https://code.jquery.com/jquery-2.2.4.js"></script>

</head>
<body>
Title<br><input type="text" name="title" id="title"><br>
Details<br><textarea name="details" id="details" cols="20" rows="5"></textarea><br>
<button type="button" onclick="sendToInsert()">Submit</button>

<script>
    function sendToInsert(){
        var data = {
            title: $('#title').val(),
            details: $('#details').val()
        };
        $.ajax({
            method: 'POST',
            data: data,
            url:index_insert.php,
            dataType: 'text',
            success: function(resp){
                console.log('success: ', resp);
            }
        })
    }
</script>
</body>
</html>

