<?php require APPROOT . '/views/inc/header.php';  ?>
        <div class="container pt-3">
        <div class="row">
        <?php include APPROOT . '/views/admin/inc.php' ?>
        <div class="col-md-9 mb-5 mx-auto">
         <div class="mx-auto mt-2 container text-center"><?php flash('msg'); ?></div>
            <div class="mx-auto mt-2 container text-center"><?php flash('upload_msg'); ?></div>
       
        <div class="card card-body bg-light mt-3">
      <p>Please use the form below to add product for sell</p>
      <form action="<?php echo URLROOT; ?>/admin/add" method="post" enctype="multipart/form-data">
        
        <div class="form-group mb-2">
            <label>Category</label><br>
            <select class="custom-select" name="sub_category">
                <option value="Blenders">Blenders</option>
                <option value="Electric Cooker">Electric Cooker</option>
                <option value="Pots">Pots</option>
                <option value="Gas coker">Gas coker</option>
                <option value="Kettles">Kettles</option>
                <option value="Micro waves">Micro waves</option>
                <option value="Cutleries">Cutleries</option>
            </select>
        </div>
         
        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control form-control-lg <?php echo (!empty($data['title_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['title']; ?>">
            <span class="invalid-feedback"><?php echo $data['title_err']; ?></span>
        </div> 


        <div class="form-group">
            <label>description</label>
            <input type="text" name="description" class="form-control form-control-lg <?php echo (!empty($data['desc_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['description']; ?>">
            <span class="invalid-feedback"><?php echo $data['desc_err']; ?></span>
        </div>


        <div class="form-group">
            <label>Condition:</label><br>
            <select name="condition">
                <option value="brandnew">Brand New</option>
                <option value="UKused">London Used</option>
            </select>
        </div>


        <div class="form-group">
            <label>Color:</label>
            <input type="text" name="color" class="form-control form-control-lg" value="<?php echo $data['color']; ?>">
        </div>  


        
        <div class="form-group mb-2">
            <label>Price</label>
            <input type="number" name="price" class="form-control form-control-lg <?php echo (!empty($data['price_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['price']; ?>">
            <span class="invalid-feedback"><?php echo $data['price_err']; ?></span>
        </div>


        <div class="form-group mb-2">
            <label>Product Pic 1</label>
            <input type="file" name="picture" class="form-control form-control-lg" >
        </div>   
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