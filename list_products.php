<!DOCTYPE html>
<html>
<!-- the head section -->
<head>
    <title>SportsPro Technical Support</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>
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
        <p class="last_paragraph">
        <a href="?action=show_add_form">Add Product</a>
        </p>
   
</main>
<footer>&copy; 2017 SportsPro, Inc</footer>
</body>
</html>

