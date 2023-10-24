<!DOCTYPE html>
<?php
if(isset($_GET["id"])){
    $productId = $_GET["id"];

    //simulated product details

    $products = [
        1 => ["name" => "Product 1", "description" =>
        "Description for Product 1", "price" => "RM20.00"],
        2 => ["name" => "Product 2", "description" =>
        "Description for Product 2", "price" => "RM25.00"],
    ];

    if(isset($products[$productId])){
        $product = $products[$productId];
        
        echo "<h2>" . $product["name"] . "</h2>";
        echo "<p>Description: " . $product["description"]."</p>";
    }else{
        echo "Product not found.";
    }
}else{
    echo "Product ID not provided";
}
?>
</html>