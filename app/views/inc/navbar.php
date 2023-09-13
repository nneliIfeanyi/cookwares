<!-- Header -->
	<?php if(isset($_SESSION['user_id'])): ?>
		<!-- Header -->
<nav class="navbar navbar-expand-lg sticky-top bg-dark shadow">
      <div class="container">
        <a class="navbar-brand text-success" href="<?=URLROOT?>/pages/index">
            <span class="fw-bold"><?=SITENAME?></span>
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link text-white" href="<?=URLROOT?>/admin/add">Add Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="<?=URLROOT?>/admin/show">Show Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="<?=URLROOT?>/admin/setting">Settings</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="<?=URLROOT?>/admin/logout">logout</a>
            </li>
          </ul>
          <span class="nav-item">
            <span class="fa-stack">
              <a href="https://facebook.com" target="_blank">
                <i class="fas fa-circle text-success fa-stack-2x"></i>
                <i class="fab fa-whatsapp fa-stack-1x text-white"></i>
              </a>
            </span>
            <span class="fa-stack">
              <a href="https://twitter.com" target="_blank">
                <i class="fas fa-circle text-success fa-stack-2x"></i>
                <i class="fab fa-facebook fa-stack-1x text-white"></i>
              </a>
            </span>
          </span>
        </div>
      </div>
    </nav>

	<?php else :  ?>
		<nav class="navbar navbar-expand-lg sticky-top bg-dark shadow">
      <div class="container">
      	<a class="navbar-brand text-success" href="<?=URLROOT?>/pages/index">
      		<span class="fw-bold"><?=SITENAME?></span>
      	</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
            <a class="nav-link text-white" href="<?=URLROOT?>/pages">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="<?=URLROOT?>/pages/blenders">Blenders</a>
            </li>
             <li class="nav-item">
              <a class="nav-link text-white" href="<?=URLROOT?>/pages/gas_cookers">Gas burner</a>
            </li>
             <li class="nav-item">
              <a class="nav-link text-white" href="<?=URLROOT?>/pages/microwaves">Micro wave</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="<?=URLROOT?>/pages/utensils">Utencils</a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link text-white" href="<?=URLROOT?>/pages/others">More</a>
            </li>
          </ul>
          <span class="nav-item">
            <span class="fa-stack">
              <a href="https://facebook.com" target="_blank">
                <i class="fas fa-circle text-success fa-stack-2x"></i>
                <i class="fab fa-whatsapp fa-stack-1x text-white"></i>
              </a>
            </span>
            <span class="fa-stack">
              <a href="https://twitter.com" target="_blank">
                <i class="fas fa-circle text-success fa-stack-2x"></i>
                <i class="fab fa-facebook fa-stack-1x text-white"></i>
              </a>
            </span>
          </span>
        </div>
      </div>
    </nav>
	<?php endif ;?>


<!-- Close Header -->

