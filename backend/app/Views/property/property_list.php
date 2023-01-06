<?php echo view('layouts/header1.php'); ?>
<!-- Navbar -->
<?php echo view('layouts/topbar.php'); ?>

<?php echo view('layouts/left_sidebar.php'); ?>

<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1 class="m-0">Property List</h1>
               <?php if (session()->has('msg')) : ?>
                  <div class="alert alert-success"><?= session()->msg; ?></div>

               <?php endif; ?>
               <?php if (session()->has('dlmsg')) : ?>
                  <div class="alert alert-danger"><?= session()->dlmsg; ?></div>
               <?php endif; ?>
            </div><!-- /.col -->
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
            <section class="col-lg-12">
               <div class="card">
                  <div class="card-header">
                     <h3 class="card-title">DataTable with default features</h3>
                  </div>
                  <div class="card-body">
                     <table id="example1" class="table table-bordered table-striped">
                        <thead>
                           <tr>
                              <th>SL</th>
                              <th>Image</th>
                              <th>Name</th>
                              <th>Type</th>
                              <th>Price</th>
                              <th>Size</th>
                              <th>Address</th>
                              <th>Action</th>
                           </tr>
                        </thead>

                        <tbody>
                           <?php
                           $count = 1;
                           foreach ($property as $proper) {; ?>
                              <tr>
                                 <td><?= $count ?></td>
                                 <td><img src="<?= $proper['property_image']; ?>" style="width: 90px;" alt=""></td>
                                 <td><?= $proper['property_name']; ?></td>
                                 <td><?= $proper['property_type']; ?></td>
                                 <td><?= $proper['property_price']; ?></td>
                                 <td><?= $proper['property_size']; ?></td>
                                 <td><?= $proper['property_address']; ?></td>
                                 <td>
                                    <a href="<?= site_url("/property/edit/" . $proper['id']) ?>" class="btn btn-info">Edit</a>
                                    <a href="<?= site_url("/property/delete/" . $proper['id']) ?>" class="btn btn-danger delete">Delete</a>
                                 </td>
                              </tr>
                           <?php $count++;
                           } ?>
                        </tbody>

                        <tfoot>
                           <tr>
                              <th>SL</th>
                              <th>Image</th>
                              <th>Name</th>
                              <th>Type</th>
                              <th>Price</th>
                              <th>Size</th>
                              <th>Address</th>
                              <th>Action</th>
                           </tr>
                        </tfoot>
                     </table>
                  </div>
               </div>
            </section>
         </div>
      </div>
   </section>

</div>


<?php echo view('layouts/footer1.php'); ?>

<script>
   $(function() {
      $(".delete").click(function(e) {
         e.preventDefault();
         $.post(this.href, function() {
            alert('Successfully Deleted');
            location.reload();
         });
      });
   });
</script>