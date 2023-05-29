 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
   <!-- Brand Logo -->
   <a href="<?= base_url() ?>admin/home" class="brand-link">
     <img src="<?= base_url() ?>assets/AdminLTE-3.2.0/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
     <span class="brand-text font-weight-light">Admin Panel</span>
   </a>

   <!-- Sidebar -->
   <div class="sidebar">
     <nav class="user-panel mt-3 pb-3 mb-3 d-flex">
       <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         <!-- Sidebar user panel (optional) -->
         <li class="nav-item">
           <a href="<?= base_url() ?>admin/home" class="nav-link">
             <i class="nav-icon fas fa-user-tie"></i>
             <p>
               <?= $this->session->session_data['name_surname'] ?>
               <i class="fas fa-angle-left right"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="<?= base_url() ?>login/password/<?= $this->session->session_data['id'] ?>" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Change Password</p>
               </a>
             </li>
           </ul>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="<?= base_url() ?>login/logout" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Log Out</p>
               </a>
             </li>
           </ul>
         </li>
       </ul>
     </nav>

     <!-- Sidebar Menu -->
     <nav class="mt-2">
       <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         <li class="nav-item">
           <a href="<?= base_url() ?>admin/users" class="nav-link">
             <i class="nav-icon fas fa-user"></i>
             <p>
               Users
             </p>
           </a>
         </li>
         <li class="nav-item">
           <a href="<?= base_url() ?>admin/stock" class="nav-link">
             <i class="nav-icon fas fa-book"></i>
             <p>
               Stock
             </p>
           </a>
         </li>
         <li class="nav-item">
           <a href="<?= base_url() ?>admin/announcements" class="nav-link">
             <i class="nav-icon fas fa-scroll"></i>
             <p>
               Announcements
             </p>
           </a>
         </li>
         <li class="nav-item">
           <a href="<?= base_url() ?>admin/messages" class="nav-link">
             <i class="nav-icon fas fa-envelope"></i>
             <p>
               Messages
             </p>
           </a>
         </li>
       </ul>
     </nav>
     <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
 </aside>