
<?php

include_once("main/functions.php");
include_once("includes/header.php");

$main = new main();
$validation = new Validation();

if(isset($_POST['Submit'])) {
    $sku = $main->escape_string($_POST['sku']);
    $name = $main->escape_string($_POST['name']);
    $price = $main->escape_string($_POST['price']);
    $size = $main->escape_string($_POST['size']);
    $weight = $main->escape_string($_POST['weight']);
    $height = $main->escape_string($_POST['height']);
    $width = $main->escape_string($_POST['width']);
    $length = $main->escape_string($_POST['length']);
    $dimension = $height . " x " . $width . " x " . $length;

    $msg = $validation->check_empty($_POST, array('sku', 'name', 'price'));



    if($msg != null) {
        echo $msg;
    }
    else {
        $result = $main->run("INSERT INTO products (sku,name,price,size,weight,dimension) VALUES('$sku','$name','$price','$size','$weight','$dimension')");
        header('location: index.php');
    }
}

include_once("includes/footer.php");
?>
