<br>
<div class="container">
    <form method="post" action="">
        <h4>Add category</h4>
        <input type="text" name="categoryName">
        <input type="submit" class="btn btn-success" value="save">
        <input type="hidden" name="action" value="add_category">
    </form>
    <br>

    <form method="post" action="">
        <h4>Add product</h4>
        <label>Product name</label><input type="text" name="productName"><br>
        <label>Product description</label><input type="text" name="description"><br>
        <p><select  name="category">
            <option>Выберите категорию</option>
            <?php foreach (getCategories() as $category) :?>
                <option value="<?=$category['id']?>"><?= $category['name']?></option>
            <?php endforeach; ?>
            </select></p>
        <input type="submit" class="btn btn-success" value="save">
        <input type="hidden" name="action" value="add_product">
    </form>
    <br>
</div>