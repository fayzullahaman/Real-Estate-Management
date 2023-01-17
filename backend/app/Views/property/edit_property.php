<?php echo view('/layouts/header.php'); ?>

<?php echo view('/layouts/topbar.php'); ?>

<?php echo view('/layouts/left_sidebar.php'); ?>

<div class="content-wrapper">

   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1 class="m-0">Edit Property</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
               </ol>
            </div>
         </div>
      </div>
   </div>
   <section class="content">
      <div class="container-fluid">

         <div class="row">
            <section class="col-lg-8 offset-2">
               <div class="card card-success">
                  <div class="card-header">
                     <h3 class="card-title">Property Edit Form</h3>
                     <?php
                     $errors = [];
                     if (session()->has('errors')) {
                        $errors = session()->errors;
                        // print_r($errors);
                     } ?>
                  </div>

                  <!--  -->
                  <form action="<?= site_url('/property/update/' . $property['id']); ?>" method="post" enctype="multipart/form-data">
                     <?= csrf_field(); ?>
                     <div class="card-body">
                        <div class="form-group">
                           <label>Property Name</label>
                           <input type="text" name="property_name" class="form-control" value="<?= old('property_name') ? old('property_name') : $property['property_name']; ?>">
                           <span class="text-danger">
                              <?=
                              isset($errors['property_name']) ? $errors['property_name'] : '';
                              ?>
                           </span>
                        </div>
                        <div class="form-group">
                           <label>Property Price</label>
                           <input type="text" name="property_price" class="form-control" value="<?= old('property_price') ? old('property_price') : $property['property_price']; ?>">
                           <span class="text-danger">
                              <?= isset($errors['property_price']) ? $errors['property_price'] : '' ?>
                           </span>
                        </div>
                        <div class="form-group">
                           <label for="type">Property Type: </label>
                           <select name="prop_type">
                              <option value="" selected disabled>Select One</option>
                              <?php foreach ($types as $type) : ?>
                                 <option value="<?= $type['id']; ?>" <?= ($property['property_type'] == $type['id']) ? "selected" : "" ?>><?= $type['type_name'] ?></option>
                              <?php endforeach; ?>
                           </select>
                        </div>
                        <div class="form-group">
                           <label>Property Image</label>
                           <input type="file" name="property_image" class="form-control">
                           <span class="text-danger">
                              <?= isset($errors['property_image']) ? $errors['property_image'] : '' ?>
                           </span>
                           <img style="width: 100px" src="<?= site_url($property['property_image']) ?>" alt="">
                        </div>
                        <div class="form-group">
                           <label>Property Address</label>
                           <input type="text" name="property_address" class="form-control" value="<?= old('property_address') ? old('property_address') : $property['property_address']; ?>">
                           <span class="text-danger">
                              <?= isset($errors['property_address']) ? $errors['property_address'] : '' ?>
                           </span>
                        </div>
                        <div class="form-group">
                           <label>Property Size</label>
                           <input type="number" name="property_size" class="form-control" value="<?= old('property_size') ? old('property_size') : $property['property_size']; ?>">
                           <span class="text-danger">
                              <?= isset($errors['property_size']) ? $errors['property_size'] : '' ?>
                           </span>
                        </div>
                        <div class="form-group">
                           <label>Property Details</label>
                           <textarea type="text" id="summernote" name="property_details" class="form-control" placeholder="Enter Product Details"><?= old('property_details') ? old('property_details') : $property['property_details']; ?></textarea>
                           <span class="text-danger">
                              <?= isset($errors['property_details']) ? $errors['property_details'] : '' ?>
                           </span>
                        </div>
                     </div>
                     <div class="card-footer">
                        <button type="submit" class="btn btn-success" onclick="return confirm('Are you sure you want to')">Update</button>
                     </div>
                  </form>
               </div>
            </section>
         </div>
      </div>
   </section>
</div>

<?php echo view('/layouts/footer.php'); ?>