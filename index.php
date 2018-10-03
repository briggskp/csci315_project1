<?php
require_once('database.php');

$query = 'SELECT * FROM products';
$statement = $db->prepare($query);
$statement->bindValue(':code', $code);
$statement->execute();
$products = $statement1->fetchAll();
$statement1->closeCursor();

?>

<!DOCTYPE html>
<html>
<!-- the head section -->
<head>
    <title>My Guitar Shop</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<!-- the body section -->
<body>
<main>
    <h1>Product List</h1>

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
                
            </tr>
            <?php endforeach; ?>            
        </table>
    </section>
</main>    
<footer></footer>
</body>
</html>