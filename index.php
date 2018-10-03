<?php
require_once('database.php');

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
    
    ?> 
