<?php require APPROOT . '/views/inc/header.php';  ?>
        <div class="container pt-3">
        <div class="row">
             <div class="col-lg-3">
                <h2 class="h5">Welcome back <span class="text-success"><?=$_SESSION['user_name']?></span></h2>
            </div>
        <div class="col-md-9 mb-5 mx-auto">
            <p class="text-center h2">Showcase your products for sale</p>
         <div class="mx-auto mt-2 container text-center"><?php flash('msg'); ?></div>
            <div class="mx-auto mt-2 container text-center"><?php flash('upload_msg'); ?></div>
       
        <div class="card card-body bg-light mt-3">
      <p>Please use the form below to add product for sell</p>
        <form action="<?php echo URLROOT; ?>/admin/add" method="post" enctype="multipart/form-data">
        
        <div class="form-group mb-2">
            <label>Category</label><br>
            <select class="custom-select" name="category">
                <option value="Blenders">Blenders</option>
                <option value="Utensils">Utensils</option>
                <option value="Gas cooker">Gas cooker</option>
                <option value="Micro waves">Micro waves</option>
                <option value="Others">Others</option>
            </select>
        </div>
        
        <div class="form-group">
            <label>Product name</label>
            <input type="text" name="name" class="form-control form-control-lg <?php echo (!empty($data['brand_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['brand']; ?>">
            <span class="invalid-feedback"><?php echo $data['brand_err']; ?></span>
        </div>  
        <div class="form-group">
            <label>description</label>
            <input type="text" name="description" class="form-control form-control-lg <?php echo (!empty($data['desc_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['description']; ?>">
            <span class="invalid-feedback"><?php echo $data['desc_err']; ?></span>
        </div>
        <div class="form-group">
            <label>Condition:</label><br>
            <select name="condition" class="form-control form-control-lg">
                <option>--Please select--</option>
                <option value="brandnew">Brand New</option>
                <option value="UKused">London Used</option>
                <option value="secondhand">2nd Hand</option>
            </select>
        </div>
        
        <div class="form-group mb-2">
            <label>Price</label>
            <input type="number" name="price" class="form-control form-control-lg <?php echo (!empty($data['price_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['price']; ?>">
            <span class="invalid-feedback"><?php echo $data['price_err']; ?></span>
        </div>

        <div class="form-group">
            <label>Product Pic</label>
            <input type="file" name="picture" class="form-control form-control-lg" >
        </div>   
        <div class="form-group">
            <label>Product Pic</label>
            <input type="file" name="picture2" class="form-control form-control-lg" >
        </div> 
        <div class="form-group">
            <label>Product Pic</label>
            <input type="file" name="picture3" class="form-control form-control-lg" >
        </div> 
        <div class="form-row text-center">
          <div class="col mt-2">
            <input type="submit" class="btn btn-success btn-block" value="Proceed">
          </div>
        </div>
      </form>
     
    </div>
  </div>
</div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>