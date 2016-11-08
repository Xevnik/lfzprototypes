<!-- Session Setter -->
<?php
session_start();
?>
<form action="session_reader.php">
    Name:
    <br><input type="text" name="user_name"
               value="<?php echo isset($_SESSION['user_name'])?$_SESSION['user_name']:''; ?>"><br>
    Age:
    <br><input type="text" name="user_age"
               value="<?php echo isset($_SESSION['user_age'])?$_SESSION['user_age']:''; ?>"><br>
    Occupation:
    <br><input type="text" name="user_occupation"
               value="<?php echo isset($_SESSION['user_occupation'])?$_SESSION['user_occupation']:''; ?>"><br>
    <button>Submit</button>
</form>

<?php
print_r($_SESSION);
?>