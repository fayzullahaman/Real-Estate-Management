<?php echo view('layouts/header1.php'); ?>
<?php echo view('layouts/topbar.php'); ?>
<?php echo view('layouts/left_sidebar.php'); ?>

<div class="content-wrapper">
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
                              <th>Email</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php
                           $count = 1;
                           foreach ($users as $user) { ?>
                              <tr>
                                 <td><?= $count ?></td>
                                 <td><img src="" alt="No Image"></td>
                                 <td><?= $user['name']; ?></td>
                                 <td><?= $user['email']; ?></td>
                                 <td class="d-flex">
                                    <a href="<?= site_url("/users/edit/" . $user['id']) ?>" class="btn btn-info mx-2">Edit</a>
                                    <form method="post" action="<?= site_url("/users/delete/" . $user['id']) ?>">
                                       <?= csrf_field(); ?>
                                       <button onclick="return confirm('Are you sure you want to')" class="btn btn-danger" type="submit">Delete</button>
                                    </form>
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
                              <th>Email</th>
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