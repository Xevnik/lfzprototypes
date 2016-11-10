<div id="image_container">
    <?php
    $imgArray = glob('images/*.jpg');
    foreach($imgArray as $img){
        ?>
        <img src="<?=$img?>">
        <?php
    }
    ?>
</div>