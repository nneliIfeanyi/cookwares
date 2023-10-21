<?php require APPROOT . '/views/inc/header2.php';  ?>
        <div class="container pt-3">
        <div class="row">
             <div class="col-lg-3">
                <h2 class="h5">Welcome back</h2>
            </div>
        <div class="col-md-9 mb-5 mx-auto">
            <p class="text-center h2">Showcase your products for sale</p>
         <div class="mx-auto mt-2 container text-center"><?php flash('msg'); ?></div>
            <div class="mx-auto mt-2 container text-center"><?php flash('upload_msg'); ?></div>
       
        <div class="card card-body bg-light mt-3">
      <p>Please use the form below to add product for sell</p>
        <form action="<?php echo URLROOT; ?>/admin/add" method="post" enctype="multipart/form-data">
        
        <div class="form-group mb-3">
            <label>Category</label><br>
            <select class="form-select" name="category" required>
            <option value="">Select category</option>
                <option value="Blenders">Blenders</option>
                <option value="Utensils">Utensils</option>
                <option value="Gas cooker">Gas cooker</option>
                <option value="Micro waves">Micro waves</option>
                <option value="Others">Others</option>
            </select>
        </div>
        
        <div class="form-group mb-3">
            <label>Product name</label>
            <input type="text" name="name" required class="form-control form-control-lg <?php echo (!empty($data['title_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['title']; ?>">
            <span class="invalid-feedback"><?php echo $data['title_err']; ?></span>
        </div>

        <div class="form-group">
            <label>Product Pic</label>
            <input type="file" name="picture" class="form-control form-control-lg <?php echo (!empty($data['err'])) ? 'is-invalid' : ''; ?>" >
            <span class="invalid-feedback"><?php echo $data['err']; ?></span>
        </div>   
        <div class="form-group">
            <label>Product Pic</label>
            <input type="file" name="picture2" class="form-control form-control-lg">
        </div> 
        <div class="form-group">
            <label>Product Pic</label>
            <input type="file" name="picture3" class="form-control form-control-lg <?php echo (!empty($data['title_err'])) ? 'is-invalid' : ''; ?>">
            <span class="invalid-feedback"><?php echo $data['err']; ?></span>
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