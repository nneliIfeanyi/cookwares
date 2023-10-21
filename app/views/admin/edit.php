<?php require APPROOT . '/views/inc/header2.php'; ?>
<div class="container pt-3">
<div class="row">
  <div class="col-md-10 mb-5 mx-auto">
  <h2 class="text-center mt-2">Update Product</h2>
    <div class="card card-body bg-light mt-3">
      <p class="text-muted lh-1">Please note that you cannot edit the <span class="text-success">category</span> and <span class="text-success">condition</span> of the product</br>
      <p class="text-muted fs-6 lh-1">To edit <span class="text-success">category</span> and <span class="text-success">condition</span> simple delete the product and add again.</p>
      <form action="<?php echo URLROOT; ?>/admin/edit/<?php echo $data['product']->id;?>" method="post" enctype="multipart/form-data">

      <div class="form-group mb-3">
            <label>Category</label><br>
            <select class="form-select" name="category">
            <option value="<?php echo $data['product']->category; ?>"><?php echo $data['product']->category; ?></option>
                <option value="Blenders">Blenders</option>
                <option value="Utensils">Utensils</option>
                <option value="Gas cooker">Gas cooker</option>
                <option value="Micro waves">Micro waves</option>
                <option value="Others">Others</option>
            </select>
        </div>
        <div class="form-group mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control form-control-lg <?php echo (!empty($data['title_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['product']->title; ?>">
            <span class="invalid-feedback"><?php echo $data['title_err']; ?></span>
        </div> 

        <label>Change Pic</label>
        <div class="card rounded-0 mb-2" style="width: 100px;">
           <img class="card-img rounded-0" height="100" src="<?php echo URLROOT . '/' . $data['product']->img; ?>">
         </div>

        <div class="form-group">
            <input type="file" name="picture" class="form-control form-control-lg">
        </div>
        <div class="form-group">
            <input type="file" name="picture2" class="form-control form-control-lg">
        </div>
        <div class="form-group">
            <input type="file" name="picture3" class="form-control form-control-lg">
        </div>





        <br>
	  	
         <p class="pull-right "><input type="submit" class="btn btn-success btn-block" value="Proceed"></p>
      </form>

      <a href="<?php echo URLROOT;?>/admin/show" class="btn btn-light mb-3">
			<i class="fa fa-backward" aria-hidden="true"></i>Go Back
		</a>
    </div>
  </div>
</div>
</div>

  
<?php require APPROOT . '/views/inc/footer.php'; ?>