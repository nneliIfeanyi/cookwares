<?php require APPROOT . '/views/inc/header.php'; ?>
<?php include APPROOT . '/views/inc/showcase.php'; ?>
    <!-- Start Content -->
    <div class="container py-3">
        <div class="row">
            <div class="col-md-6">
                <ul class="list-inline shop-top-menu pb-3 pt-1">
                    <li class="list-inline-item">
                        <h2 class="text-success"><?=$data['title']?></h2>
                    </li>
                </ul>
            </div>
            
            <div class="mt-2 text-center"><?= flash('success')?></div>
        </div>
        <?php include APPROOT . '/views/inc/sample.php'; ?>
    </div>



<?php require APPROOT . '/views/inc/footer.php'; ?>
