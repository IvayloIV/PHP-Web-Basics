<table border="2">
    <tr>
        <th>Name</th>
        <th>Price</th>
        <th>Category name</th>
        <th>Details</th>
    </tr>
    <?php foreach ($products->getList($skippedItems, $productPerPage) as $product): ?>
        <tr>
            <td><?= $product['name'] ?></td>
            <td><?= $product['price'] ?></td>
            <td><?= $product['category_name'] ?></td>
            <td><a href='product_details.php?id=<?= $product['id'] ?>'>View</a></td>
            <td><a href='create_product.php?id=<?= $product['id'] ?>'>Edit</a></td>
            <td><a href='delete_product.php?id=<?= $product['id'] ?>'>Delete</a></td>
        </tr>
    <?php endforeach; ?>
</table>
<?php if($currentPage > 1): ?>
    <a href="?page=1">Go to First</a> |
<?php endif; ?>
<?php for ($i = 1; $i <= $pagesCount; $i++): ?>
    <a href="?page=<?= $i ?>"><?= $i ?></a> |
<?php endfor; ?>
<?php if($currentPage < $pagesCount): ?>
    <a href="?page=<?= $pagesCount ?>">Go to Last</a>
<?php endif; ?>
