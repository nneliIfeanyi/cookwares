<?php require APPROOT . '/views/inc/header2.php'; ?>

<div class="container">

    <div class="row">
        <div class="col-md-12 mb-5 mx-auto">
            <div class="row">
            <div class="mt-2 text-center"><?= flash('success')?></div>
                <h4 class="display-6 text-center">All Products</h4>
                 <div class="mt-2 text-center"><?= flash('msg')?></div>
            <?php foreach($data['products'] as $product) : ?>
                 <div class="col-6 col-md-3">
                    <div class="card mb-4 product-wap rounded-0">
                        <div class="card rounded-0">
                            <img class="card-img rounded-0" height="140" src="<?php echo URLROOT . '/' . $product->img; ?>">
                        </div>
                    <div class="card-body">
                        <a href="" class="h3 text-decoration-none"><?php echo $product->title ;?></a>
                        
                    <div class="row mb-2">
                        <div class="col">
                        <p class=" text-center"><a class="text-success fs-6" href="<?=URLROOT?>/admin/edit/<?=$product->id?>">Edit</a></p>
                        </div>
                        <div class="col">
                        <form class="pull-right" action="<?php echo URLROOT; ?>/admin/delete/<?php echo $product->id; ?>" method="post">
                        <input type="submit" class="text-danger fs-6" value="Delete">
                        </form>
                        </div>
                    </div>
                    
                
                    </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
</div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>