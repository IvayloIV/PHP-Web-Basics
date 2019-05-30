<form method="POST">
    <label>
        <span>Name:</span>
        <input type="text" name="name" value="<?= $product['name'] ?>">
    </label>
    <br>
    <label>
        <span>Description:</span>
        <textarea name="description" cols="20" rows="4"><?= $product['description'] ?></textarea>
    </label>
    <br>
    <label>
        <span>Price:</span>
        <input type="number" name="price" value="<?= $product['price'] ?>">
    </label>
    <br>
    <label>
        <span>Category:</span>
        <select name="category_id">
            <?php foreach ($listCategories as $category): ?>
                <?= $selected = $product['category_name'] === $category['name'] ? 'selected' : ''; ?>
                <option value="<?= $category['id'] ?>" <?= $selected ?>><?= $category['name'] ?></option>
            <?php endforeach; ?>
        </select>
    </label>
    <div>
        <input type="hidden" name="id" value="<?= $product['id'] ?>">
        <input type="submit" value="Create">
    </div>
</form>