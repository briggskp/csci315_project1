<?php include 'header.php'; ?>
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
                <th>&nbsp;</th>
            </tr>
            <?php foreach ($products as $product) : ?>
            <tr>
                <td><?php echo $product['code']; ?></td>
                <td><?php echo $product['name']; ?></td>
                <td><?php echo $product['version']; ?></td>
                <td><?php echo $product['release_date']; ?></td>
                <td><form action="." method="post">
                    <input type="hidden" name="action"
                           value="delete_product">
                    <input type="hidden" name="code"
                           value="<?php echo $product['code']; ?>">
                    <input type="hidden" name="name"
                           value="<?php echo $product['name']; ?>">
                    <input type="submit" value="Delete">
                </form></td>
            </tr>
            <?php endforeach; ?>            
        </table>
        <p class="last_paragraph">
        <a href="?action=show_add_form">Add Product</a>
        </p>
   
</main>
<?php include 'footer.php'; ?>

