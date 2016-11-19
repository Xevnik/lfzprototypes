<!--login_form.php-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>User Auth</title>
    <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
</head>
<body>
<input type="text" name="username" id="username" placeholder="Username"><br>
<input type="password" name="userPassword" id="userPass" placeholder="Password"><br>
<button type="button">Login</button>
<span></span>
</body>
<script>
    $(document).ready(function(){
        $('button').click(sendLogin);
    });

    function sendLogin() {
        var dataObj = {
            'username': $('#username').val(),
            'password': $('#userPass').val()
        };

        $.ajax({
            url: 'login_handler.php',
            data: dataObj,
            cache: false,
            method: 'post',
            dataType: "json",
            success: function (resp) {
                console.log('Server Response: ', resp);
                $('span').text(resp.message);
            }
        });
    }
</script>
</html>