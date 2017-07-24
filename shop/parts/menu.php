<!-- Page Content -->
<div class="container">

    <div class="row">

        <div class="col-lg-3">

            <h1 class="my-4">Shop Name</h1>
            <div class="list-group">
                <?php foreach (getCategories() as $menuItem) : ?>
                <a href="../shop.php?id=<?= $menuItem['id']?>" class="list-group-item"><?=$menuItem['name']?></a>
                <?php endforeach; ?>
            </div>

        </div>