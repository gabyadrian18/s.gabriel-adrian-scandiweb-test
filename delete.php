<?php
include ("main/functions.php");

$main = new main();

if (isset($_POST['deletethis'])) {
    $box = $_POST['num'];
    while (list ($key, $val) = @each($box)) {
        $rez = $main->run("delete from products where id=$val");
    }

    header('location: index.php');

}


?>