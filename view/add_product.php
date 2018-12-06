<?php include 'header.php'; ?>
<main>
    <h1>Add Product</h1>
    <form action="../controller/index.php" method="post">
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
        <input type="text" name="release_date" />
        <br>

        <label>&nbsp;</label>
        <input type="submit" value="Add Product" />
        <br>
    </form>
    <p class="last_paragraph">
        <a href="index.php?action=list_products">View Product List</a>
    </p>
</main>
<?php include 'footer.php'; ?>

