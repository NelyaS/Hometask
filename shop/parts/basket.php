<div class="col-lg-9">

    <div class="row">
        <?php foreach ($items as $item) : ?>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top img-fluid" src="http://placehold.it/700x400" alt=""></a>
                    <div class="card-block">
                        <h4 class="card-title"><a href="#"><?= $item['name'] ?></a></h4>
                        <h5>$24.99</h5>
                        <p class="card-text"><?= $item['description'] ?></p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                    </div>
                </div>
                <form method="post" action="">
                    <input type="submit" class="btn btn-success" value="Buy">
                    <input type="hidden" name="action" value="toBasket">
                    <input type="hidden" name="itemId" value="<?=$item['id']?>">
                </form>
            </div>
        <?php endforeach; ?>

    </div>
    <!-- /.row -->

</div>
<!-- /.col-lg-9 -->

</div>
