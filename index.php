<?php
require_once('database.php');
require('product_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'list_products';
    }
}

if ($action == 'list_products') {
    $code = filter_input(INPUT_GET, 'code');
    if ($code == NULL || $code == FALSE) {
        $code = "DRAFT10";
        }
    //Obtain data in 'products' array
    $query = 'SELECT * FROM products';
    $statement = $db->prepare($query);
    $statement->bindValue(':code', $code);
    $statement->execute();
    $products = $statement->fetchAll();
    $statement->closeCursor();
    include('list_products.php');
}
else if ($action == 'delete_product'){
    $code = filter_input(INPUT_POST, 'code');
    if ($code == NULL || $code == FALSE) {
        $error = "Missing code.";
    } else { 
        delete_product($code);
        header("Location: .?code=$code");
    }   
}
else if ($action == 'show_add_form'){
    include('add_product.php');
}
 else if ($action == 'add_product') {
    $code = filter_input(INPUT_POST, 'code');
    $name = filter_input(INPUT_POST, 'name');
    $version = filter_input(INPUT_POST, 'version');
    $release_date = filter_input(INPUT_POST, 'release_date');
    if ($code == NULL || $name == NULL || 
            $version == NULL || $release_date == NULL) {
        $error = "Invalid product data. Check all fields and try again.";
    } else { 
        add_product($code, $name, $version, $release_date);
        header("Location: .?code=$code");
    }
}   
    
    ?> 
