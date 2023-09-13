<?php require APPROOT . '/views/inc/header.php'; ?>
<style>
.cssmarquee {
height: 50px;
overflow: hidden;
position: relative;
}
.cssmarquee h1 {
font-size: 1em;
position: absolute;
width: 100%;
height: 100%;
margin: 0;
line-height: 50px;
text-align: center;
transform:translateX(100%);
animation: cssmarquee 12s linear infinite;
}
@keyframes cssmarquee {
0% {
transform: translateX(100%);
}
100% {
transform: translateX(-100%);
}
}
</style>
 
<div class="cssmarquee" style="background: ;">
<h1 style="text-transform: lowercase;font-style: italic;">WELCOME TO <span class="text-success">Tony-rock</span> online market</h1>
</div>
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
    </div>
    <?php include APPROOT . '/views/inc/sample.php'; ?>
           
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>
