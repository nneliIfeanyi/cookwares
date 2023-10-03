<!--  <div class="col-lg-3">
                <h1 class="h2 pb-2 fw-bold">Products</h1>
                <ul class="list-unstyled templatemo-accordion">
                    <li class="pb-2">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            Appliances
                            <i class="fa fa-fw fa-chevron-circle-down mt-1"></i>
                        </a>
                        <ul class="collapse show list-unstyled pl-3">
                            <li><a class="text-decoration-none" href="<?=URLROOT?>/products/microwaves">Microwaves</a></li>
                            <li><a class="text-decoration-none" href="<?=URLROOT?>/products/gas_cookers">Gas Burners</a></li>
                            <li><a class="text-decoration-none" href="<?=URLROOT?>/products/hotplates">Electric Cooker</a></li>
                            <li><a class="text-decoration-none" href="<?=URLROOT?>/products/blenders">Blenders</a></li>
                        </ul>
                    </li>
                   <li class="pb-2">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            Utensils
                            <i class="fa fa-fw fa-chevron-circle-down mt-1"></i>
                        </a>
                        <ul class="collapse show list-unstyled pl-3">
                            <li><a class="text-decoration-none fs-6" href="<?=URLROOT?>/products/pots">Pots</a></li>
                            <li><a class="text-decoration-none fs-6" href="<?=URLROOT?>/products/kettles">Kettles</a></li>
                            <li><a class="text-decoration-none fs-6" href="<?=URLROOT?>/products/cutleries">Cutleries</a></li>
                        </ul>
                    </li>
                </ul>
            </div>-->
 <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="<?php echo URLROOT; ?>/pages"><?php echo SITENAME; ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
          
            <li class="nav-item">
              <a class="nav-link text-white" href="<?=URLROOT?>/admin">Add Products</a>
            </li>
             <li class="nav-item">
              <a class="nav-link text-white" href="<?=URLROOT?>/admin/show">All products</a>
            </li>
             <li class="nav-item">
              <a class="nav-link text-white" href="<?=URLROOT?>/admin/setting">setting</a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link text-white" href="<?=URLROOT?>/users/logout">More</a>
            </li>
          </ul>
          
        </div>
  </div>
</nav>