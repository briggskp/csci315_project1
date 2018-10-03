<?php
require_once('database.php');

//Get code
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
?>

<!DOCTYPE html>
<html>
<!-- the head section -->
<head>
    <title>SportsPro Technical Support</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<!-- the body section -->
<body>
<main>
    <h1>SportsPro Technical Support</h1>
    <h2>Sports management software for the sports enthusiast</h2>
    <nav>
        <a href="index.php">Home</a>
    </nav>
    
    <h3>Product List</h3>
    <section>
        <!-- display a table of products -->
        
        <table>
            <tr>
                <th>Code</th>
                <th>Name</th>
                <th>Version</th>
                <th>Release Date</th>
            </tr>

            <?php foreach ($products as $product) : ?>
            <tr>
                <td><?php echo $product['code']; ?></td>
                <td><?php echo $product['name']; ?></td>
                <td><?php echo $product['version']; ?></td>
                <td><?php echo $product['release_date']; ?></td>
                <td><button>Delete</button>
            </tr>
            <?php endforeach; ?>            
        </table>
        <a href="">Add Product</a>
    </section>
</main>    
<footer>&copy; 2017 SportsPro, Inc</footer>
</body>
</html>