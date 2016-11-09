<!-- Session Setter -->
<?php
session_start();
?>
<form action="session_reader.php">
    Name:
    <br><input type="text" name="user_name"
               value="<?php echo isset($_SESSION['user_name'])?$_SESSION['user_name']:''; ?>"><br>
    <?php echo isset($_SESSION['errors']['name'])?$_SESSION['errors']['name'].'<br>':''; ?>
    Age:
    <br><input type="text" name="user_age"
               value="<?php echo isset($_SESSION['user_age'])?$_SESSION['user_age']:''; ?>"><br>
    <?php echo isset($_SESSION['errors']['age'])?$_SESSION['errors']['age'].'<br>':''; ?>
    Occupation:
    <br><input type="text" name="user_occupation"
               value="<?php echo isset($_SESSION['user_occupation'])?$_SESSION['user_occupation']:''; ?>"><br>
    <?php echo isset($_SESSION['errors']['occupation'])?$_SESSION['errors']['occupation'].'<br>':''; ?>

    <button>Submit</button>
</form>
<pre>
    <?php
    //print_r($_SESSION);
    ?>
</pre>