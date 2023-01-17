<aside class="main-sidebar sidebar-dark-primary elevation-4">
   <!-- Brand Logo -->
   <a href="<?= base_url() ?>" class="brand-link">
      <img src="/assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Panel</span>
   </a>

   <!-- Sidebar -->
   <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
         <div class="image">
            <img src="/assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
         </div>
         <div class="info">
            <a href="#" class="d-block">Fayzullah Aman</a>
         </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
         <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
               <button class="btn btn-sidebar">
                  <i class="fas fa-search fa-fw"></i>
               </button>
            </div>
         </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
         <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
               <a href="/" class="nav-link active">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                     Dashboard
                  </p>
               </a>
            </li>
            <!-- <li class="nav-item">
               <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                     Layout Options
                     <i class="fas fa-angle-left right"></i>
                     <span class="badge badge-info right">6</span>
                  </p>
               </a>
               <ul class="nav nav-treeview">
                  <li class="nav-item">
                     <a href="/pages/layout/top-nav.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Top Navigation</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="/pages/layout/top-nav-sidebar.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Top Navigation + Sidebar</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="/pages/layout/boxed.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Boxed</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="/pages/layout/fixed-sidebar.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Fixed Sidebar</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="/pages/layout/fixed-sidebar-custom.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Fixed Sidebar <small>+ Custom Area</small></p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="/pages/layout/fixed-topnav.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Fixed Navbar</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="/pages/layout/fixed-footer.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Fixed Footer</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="/pages/layout/collapsed-sidebar.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Collapsed Sidebar</p>
                     </a>
                  </li>
               </ul>
            </li> -->
            <li class="nav-item">
               <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-chart-pie"></i>
                  <p>
                     Property
                     <i class="right fas fa-angle-left"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview">
                  <li class="nav-item">
                     <a href="<?php echo base_url("property") ?>" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>All Property</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?php echo base_url("property/new") ?>" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>New Property</p>
                     </a>
                  </li>
               </ul>
            </li>
            <li class="nav-item">
               <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-chart-pie"></i>
                  <p>
                     Users
                     <i class="right fas fa-angle-left"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview">
                  <li class="nav-item">
                     <a href="<?php echo base_url("users") ?>" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>All Users</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?php echo base_url("users/new") ?>" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>New Users</p>
                     </a>
                  </li>
               </ul>
            </li>
            <li class="nav-item">
               <a href="<?= site_url('/users/logout') ?>" class="nav-link">
                  <i class="nav-icon fas fa-chart-pie"></i>
                  <p>
                     Logout
                  </p>
               </a>
            </li>
         </ul>
      </nav>
      <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
</aside>