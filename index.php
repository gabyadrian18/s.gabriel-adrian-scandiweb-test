<?php
include ("includes/header.php");
include ("main/functions.php");

$main = new main();

?>
<body>

<div class="container">
    <div class="d-flex pt-3">
        <h3>Product List</h3>
        <hr>
        <div>

            <form method="post" name="form1" action="delete.php">
            <input type="submit" id="#delete-product-btn" name="deletethis" value="MASS DELETE" class="btn btn-danger
            float-right
            ml-auto" />

            <a href="add-product.php" class="btn btn-success float-right ml-auto">ADD</a>
        </div>
    </div>

    <hr>

    <div class="row">
        <?php
        $query = "SELECT * FROM products ORDER BY id DESC";
        $result = $main->getfSQL($query);

        foreach ($result as $key => $res) {
            echo "

            <div class='col-md-3 mt-3'>
                <div class='card text-center bg-light'>
                
                    <div class='col-xs-12 text-right'>
                        <input class='form-check-input delete-checkbox' type='checkbox' name='num[]' id='delete-checkbox' value='".$res['id']."' aria-label='...'>
                    </div>
                    
			        <div class='card-body'>
			        
			            <p class='card-text'>".$res['sku']."</p>
			            <p>".$res['name']."</p>
			            <p>".$res['price']." $ </p>";
                        if ($res['size'] !== "") {
                            echo "<p> Size: ".$res['size']." MB </p>";
                        } else if ($res['weight'] !== "") {
                            echo "<p> Weight: ".$res['weight']." KG </p>";
                        } else {
                            echo "<p> Dimension: ".$res['dimension']."</p>";
                        }


                        echo "</div></div></div>";
        }
        ?>
    </div>
</form>
</div>

</body>

<?php
include_once("includes/footer.php");
?>

