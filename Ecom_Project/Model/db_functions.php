<?php

// FIrst 4 Products from Product DB
function get_4_products(){
    global $db;
    $query = "SELECT * FROM products LIMIT 4";
    $statement = $db->prepare($query);
    $statement->execute();
    $products_4 = $statement->fetchAll();
    $statement->closeCursor();
    return $products_4;
};

function getAllProducts() {
    global $db;
    $query = "SELECT * FROM products";
    $statement = $db->prepare($query);
    $statement->execute();
    $all_products = $statement->fetchAll();
    $statement->closeCursor();
    return $all_products;
};


function getProductById($product_id) {
    global $db;
    $query = "SELECT * FROM products WHERE product_id = :product_id";
    $statement = $db->prepare($query);
    $statement->bindValue(':product_id', $product_id, PDO::PARAM_INT);
    $statement->execute();
    return $statement->fetch(PDO::FETCH_ASSOC);
}

?>