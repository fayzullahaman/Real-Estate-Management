<?php echo view('/layouts/header.php'); ?>
<!-- Navbar -->
<?php echo view('/layouts/topbar.php'); ?>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<?php echo view('/layouts/left_sidebar.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1 class="m-0">Edit Products</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
               </ol>
            </div><!-- /.col -->
         </div><!-- /.row -->
      </div><!-- /.container-fluid -->
   </div>
   <!-- /.content-header -->

   <!-- Main content -->
   <section class="content">
      <div class="container-fluid">

         <!-- Main row -->
         <div class="row">
            <!-- Left col -->
            <section class="col-lg-8 offset-2">
               <div class="card card-success">
                  <!-- /.card-header -->
                  <!-- general form elements -->
                  <!-- <div class="card card-info"> -->
                  <div class="card-header">
                     <h3 class="card-title">Product Edit Form</h3>
                     <?php
                     $errors = [];
                     if (session()->has('errors')) {
                        $errors = session()->errors;
                        // print_r($errors);
                     } ?>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form action="<?= base_url('products/update/' . $product['id']); ?>" method="post" enctype="multipart/form-data">
                     <?= csrf_field(); ?>
                     <div class="card-body">
                        <?php
                        // if (isset($errors) && count($errors) > 0) {
                        //    echo "<ul>";
                        //    foreach ($errors as $err) {
                        //       echo "<li>$err</li>";
                        //    }
                        //    echo "</ul>";
                        // }
                        ?>
                        <div class="form-group">
                           <label>Product Name</label>
                           <input type="text" name="product_name" class="form-control" value="<?= old('product_name') ? old('product_name') : $product['product_name']; ?>" placeholder="Enter Product email">
                           <span class="text-danger">
                              <?=
                              isset($errors['product_name']) ? $errors['product_name'] : '';
                              ?>
                           </span>
                        </div>
                        <div class="form-group">
                           <label>Product Details</label>
                           <textarea type="text" id="summernote" name="product_details" class="form-control" placeholder="Enter Product Details"><?= old('product_details') ? old('product_details') : $product['product_details']; ?></textarea>
                           <span class="text-danger">
                              <?=
                              isset($errors['product_details']) ? $errors['product_details'] : '';
                              ?>
                           </span>
                        </div>
                        <div class="form-group">
                           <label>Product Price</label>
                           <input type="text" name="product_price" class="form-control" value="<?= old('product_price') ? old('product_price') : $product['product_price']; ?>" placeholder="Enter Product Price">
                           <span class="text-danger">
                              <?=
                              isset($errors['product_price']) ? $errors['product_price'] : '';
                              ?>
                           </span>
                        </div>
                        <div class="form-group">
                           <label>Product Image</label>
                           <input type="file" name="product_image" class="form-control">
                           <span class="text-danger">
                              <?=
                              isset($errors['product_image']) ? $errors['product_image'] : '';
                              ?>
                           </span>
                        </div>
                     </div>
                     <div class="card-footer">
                        <button type="submit" class="btn btn-success" onclick="return confirm('Product Update Successfully')">Upadte</button>
                     </div>
                  </form>
                  <!-- </div> -->
               </div>
            </section>

            <!-- right col -->
         </div>
         <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
   </section>
   <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php echo view('/layouts/footer.php'); ?>