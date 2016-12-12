<!-- File Handler -->
<pre>
<?php
//declare variables
$target_dir = __DIR__ . "/uploads";
$target_file = $target_dir . $_FILES["upload_file"]["name"];
$uploadOk = true;
$output = [];
print($target_dir);

if(file_exists($target_file)){
    $fileSplit = pathinfo($target_file);
    print_r($fileSplit);
}else{
    die("\nDirectory does not exist");
}
print_r($_FILES);
print_r($_POST);
print_r($target_file);
?>
</pre>
