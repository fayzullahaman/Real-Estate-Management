<?php echo view('/layouts/header.php'); ?>
<!-- Navbar -->
<?php echo view('/layouts/topbar.php'); ?>

<?php echo view('/layouts/left_sidebar.php'); ?>

<div class="content-wrapper">

   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1 class="m-0">Add New Property</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
               </ol>
            </div>
         </div>
      </div>
   </div>
   <?php if (session()->has('errors')) {
      $errors = session()->errors;
   } ?>
   <section class="content">
      <div class="container-fluid">
         <div class="row">
            <section class="col-lg-8 offset-2">
               <div class="card card-info">

                  <div class="card-header">
                     <h3 class="card-title">Property Entry Form</h3>
                  </div>

                  <form action="<?= base_url('/property/create'); ?>" method="post" enctype="multipart/form-data">
                     <?= csrf_field(); ?>
                     <div class="card-body">
                        <div class="form-group">
                           <label>Property Name</label>
                           <input type="text" name="property_name" class="form-control" value="<?= old('property_name') ?>" placeholder="Enter Product email">
                           <span class="text-danger">
                              <?= isset($errors['property_name']) ? $errors['property_name'] : '' ?>
                           </span>
                        </div>
                        <div class="form-group">
                           <label>Product Details</label>
                           <textarea type="text" id="summernote" name="property_details" class="form-control" placeholder="Enter Product Details"><?= old('property_details') ?></textarea>
                           <span class="text-danger">
                              <?= isset($errors['property_details']) ? $errors['property_details'] : '' ?>
                           </span>
                        </div>
                        <div class="form-group">
                           <label>Product Price</label>
                           <input type="text" name="property_price" class="form-control" value="<?= old('property_price') ?>" placeholder="Enter Product Price">
                           <span class="text-danger">
                              <?= isset($errors['property_price']) ? $errors['property_price'] : '' ?>
                           </span>
                        </div>
                        <div class="form-group">
                           <label>Product Image</label>
                           <input type="file" name="property_image" class="form-control" value="<?= old('property_image') ?>">
                           <span class="text-danger">
                              <?= isset($errors['property_image']) ? $errors['property_image'] : '' ?>
                           </span>
                        </div>

                     </div>
                     <div class="card-footer">
                        <button type="submit" class="btn btn-info" onclick="return confirm('Product Added Successfully')">Submit</button>
                     </div>
                  </form>

               </div>
            </section>

         </div>

      </div>
   </section>
</div>

<?php echo view('/layouts/footer.php'); ?>