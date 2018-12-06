<?php

function get_product($code) {
    global $db;
    $query = 'SELECT * FROM products
              WHERE code = :code';
    $statement = $db->prepare($query);
    $statement->bindValue(":code", $code);
    $statement->execute();
    $product = $statement->fetch();
    $statement->closeCursor();
    return $product;
}

function get_products(){
    global $db;
    $query = 'SELECT * FROM products';
    $statement = $db->prepare($query);
    $statement->bindValue(":code", $code);
    $statement->bindValue(":name", $name);
    $statement->bindValue(":version", $version);
    $statement->bindValue(":release_date", $release_date);
    $statement->execute();
    $products = $statement->fetchAll();
    $statement->closeCursor();
    return $products;
}

function add_product($code, $name, $version, $release_date) {
    global $db;
    $query = 'INSERT INTO products
                 (code, name, version, release_date)
              VALUES
                 (:code, :name, :version, :release_date)';
    $statement = $db->prepare($query);
    $statement->bindValue(':code', $code);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':version', $version);
    $statement->bindValue(':release_date', $release_date);
    $statement->execute();
    $statement->closeCursor();
}

function delete_product($code){
    global $db;
    $query = 'DELETE FROM products
              WHERE code = :code';
    $statement = $db->prepare($query);
    $statement->bindValue(':code', $code);
    $statement->execute();
    $statement->closeCursor();
}
?>
