<?php require APPROOT . '/views/inc/header.php'; ?>

   
<!-- Open Content -->
<section class="">
<div class="container pb-3">
<div class="row">
<div class="col-lg-5 mt-2">
<div class="card mb-2">
<img class="card-img img-fluid" src="<?= URLROOT. '/'. $data['product']->img ?>" id="product-detail">
</div>

<?php if (!empty($data['product']->img2) && !empty($data['product']->img3)) :?>
<div class="row">
        <!--Start Controls-->
        <div class="col-1 align-self-center">
            <a href="#multi-item-example" role="button" data-bs-slide="prev">
                <i class="text-dark fa fa-chevron-left"></i>
                <span class="sr-only">Previous</span>
            </a>
        </div>
        <!--End Controls-->
        <!--Start Carousel Wrapper-->
        <div id="multi-item-example" class="col-10 carousel slide carousel-multi-item" data-bs-ride="carousel">
            <!--Start Slides-->
            <div class="carousel-inner product-links-wap" role="listbox">

                <!--First slide-->
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-4">
                            <a href="#">
                                <img class="card-img" src="<?= URLROOT. '/'. $data['product']->img ?>" alt="Product Image 1" style="height: 100px;">
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="#">
                                <img class="card-img" src="<?= URLROOT. '/'. $data['product']->img2 ?>" alt="Product Image 2" style="height: 100px;">
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="#">
                                <img class="card-img" src="<?= URLROOT. '/'. $data['product']->img3 ?>" alt="Product Image 3" style="height: 100px;">
                            </a>
                        </div>
                    </div>
                </div>

                <!--/.First slide-->
            </div>
            <!--End Slides-->
        </div>
        <!--End Carousel Wrapper-->
        <!--Start Controls-->
        <div class="col-1 align-self-center">
            <a href="#multi-item-example" role="button" data-bs-slide="next">
                <i class="text-dark fa fa-chevron-right"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!--End Controls-->
    </div>
<?php endif;?>
</div>


<div class="col-lg-7 mt-2">
<div class="card">
<div class="card-body lh-1">
<h1 class="h3"><?= $data['product']->title ?></h1>

<div class="row">
<div class="col d-grid">
<a href="https://wa.me/+2347061707267?text=I%20am%20interested%20in%20buying%20this%20<?=URLROOT.'/'.'users'.'/'.'view_p'.'/'.$data['product']->id?>" class="btn btn-success btn-block"><i class="fab fa-whatsapp fa-fw"></i>Inquiry</a>
</div>
<div class="col d-grid">
<a href="tel:07061707267" class="btn btn-outline-success btn-block"><i class="fa fa-phone fa-fw"></i>Call Now</a>
</div>
</div>
</div>
</div>

</div>
</div>
<div class="mt-3">
<p class="lead h4 text-center fw-bold py-2">Related Products</p> 
 <div class="row">
    <?php foreach($data['sellerGoods'] as $product) : ?>
        <div class="col-6 col-md-3">
            <div class="card mb-3 product-wap rounded-0">
                <div class="card rounded-0">
                    <img class="card-img rounded-0" src="<?php echo URLROOT . '/' . $product->img; ?>" style="height :90px;">
                    <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                        <ul class="list-unstyled">
                            <li><a class="btn btn-success text-white" href="<?=URLROOT?>/users/view_p/<?=$product->id?>">More</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body lh-1 fs-6">
                <a href="<?=URLROOT?>/users/view_p/<?=$product->id?>" class="h3 text-decoration-none">
                    <?php echo $product->brand . ' ' . $product->model; ?>
                    <p class="badge bg-secondary fs-6"><?=$product->cond_tion?></p>
                     <p class="text-center text-success"><b>&#8358;<?php echo $product->price; ?>.00</b></p>
                </a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
 </div>
</div>
</div>
</div>
</section>
<?php require APPROOT . '/views/inc/footer.php'; ?>
