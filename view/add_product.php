<html>
    <head>
    <title>Add Product</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>
<main>
    <h1>Add Product</h1>
    <form action="index.php" method="post" id="add_product_form">
        <input type="hidden" name="action" value="add_product">

        <label>Code:</label>
        <input type="text" name="code" />
        <br>

        <label>Name:</label>
        <input type="text" name="name" />
        <br>

        <label>Version:</label>
        <input type="text" name="version" />
        <br>        
        
        <label>Release Date:</label>
        <input type="text" name="release-date" />
        <br>

        <label>&nbsp;</label>
        <input type="submit" value="Add Product" />
        <br>
    </form>
    <p class="last_paragraph">
        <a href="index.php?action=list_products">View Product List</a>
    </p>
    <footer>&copy; 2017 SportsPro, Inc</footer>

</main>
</html>

