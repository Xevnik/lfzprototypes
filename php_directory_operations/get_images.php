<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 11/10/16
 * Time: 9:41 AM
 */

$imgArray = glob('images/*.jpg');
if($imgArray == false){
    $output = array('success'=>false, 'errors'=>'Unable to find images','files'=>$imgArray);
}else{
    $output = array('success'=>true, 'errors'=>'','files'=>$imgArray);
}
print(json_encode($output));
?>