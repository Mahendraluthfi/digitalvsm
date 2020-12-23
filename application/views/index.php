<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>MAS - Digital VSM</title>
  <link rel="icon" href="<?php echo base_url('dist/img/icon.png') ?>">    
  <link rel="stylesheet" href="<?php echo base_url() ?>plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url() ?>plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">  
  <link rel="stylesheet" href="<?php echo base_url() ?>plugins/toastr/toastr.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>plugins/summernote/summernote-bs4.css">
  
</head>
<body class="sidebar-mini layout-navbar-fixed layout-fixed text-sm">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark navbar-info">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <!-- <li class="nav-item d-none d-sm-inline-block"></li> -->
      <!-- <li class="nav-item d-none d-sm-inline-block"></li> -->
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fas fa-cog"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">  
          <?php if($this->session->userdata('vsm_department') == "MOS"){ ?>        
          <a href="<?php echo base_url('rules') ?>" class="dropdown-item">
            <i class="fas fa-cog"></i> Rules
          </a>
          <a href="<?php echo base_url('rules/embed') ?>" class="dropdown-item">
            <i class="fas fa-map"></i> Embed
          </a>
          <?php } ?>
          <a href="<?php echo base_url('config') ?>" class="dropdown-item">
            <i class="fas fa-key"></i> Change Password
          </a>
          <div class="dropdown-divider"></div>
          <a href="<?php echo base_url('login/logout') ?>" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Logout</a>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-info elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url() ?>" class="brand-link">
      <img src="<?php echo base_url() ?>dist/img/icon.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">MAS Sumbiri Digital VSM</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <!-- <div class="image">
          <img src="<?php echo base_url() ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div> -->
        <div class="info">
          <a href="#" class="d-block"><?php echo $this->session->userdata('vsm_name'); ?> <br><small><?php echo $this->session->userdata('vsm_department'); ?></small></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent nav-compact" data-widget="treeview" role="menu" data-accordion="false">         
          <li class="nav-item">
            <a href="<?php echo base_url('welcome') ?>" class="nav-link <?php if($this->uri->segment(1) == "welcome" || $this->uri->segment(1) == ""){echo "active";} ?>">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <?php if($this->session->userdata('vsm_department') == "MOS"){ ?>                  
          <li class="nav-item">
            <a href="<?php echo base_url('main') ?>" class="nav-link <?php if($this->uri->segment(1) == "main"){echo "active";} ?>">
              <i class="nav-icon fas fa-table"></i><p>Main Information</p>
            </a>
          </li>
          <?php } ?>
          <?php if($this->session->userdata('vsm_department') !== 'MANAGER' ){ ?>
          <li class="nav-item">
            <a href="<?php echo base_url('preqco') ?>" class="nav-link <?php if($this->uri->segment(1) == "preqco"){echo "active";} ?>">
              <i class="nav-icon fas fa-random"></i><p>Extended QCO</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('process') ?>" class="nav-link <?php if($this->uri->segment(1) == "process"){echo "active";} ?>">
              <i class="nav-icon fas fa-tasks"></i><p>Process & Inventory</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('information') ?>" class="nav-link <?php if($this->uri->segment(1) == "information"){echo "active";} ?>" class="nav-link">
              <i class="nav-icon fas fa-info"></i><p>Information</p>
            </a>
          </li>
          <?php } ?>
          <?php if($this->session->userdata('vsm_department') == "MOS"){ ?>                  
          <li class="nav-item">
            <a href="<?php echo base_url('users') ?>" class="nav-link <?php if($this->uri->segment(1) == "users"){echo "active";} ?>">
              <i class="nav-icon fas fa-users"></i><p>Users</p>
            </a>
          </li>
          <?php } ?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <?php $this->load->view($content); ?>
  </div>
  
</div>
  
<script src="<?php echo base_url() ?>plugins/jquery/jquery.min.js"></script>
<script src="<?php echo base_url() ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url() ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url() ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>  
<script src="<?php echo base_url() ?>dist/js/adminlte.min.js"></script>
<script src="<?php echo base_url() ?>plugins/select2/js/select2.full.min.js"></script>
<script src="<?php echo base_url() ?>plugins/bootstrap-switch/js/bootstrap-switch.js"></script>
<script src="<?php echo base_url() ?>plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="<?php echo base_url() ?>plugins/toastr/toastr.min.js"></script>
<script src="<?php echo base_url() ?>plugins/summernote/summernote-bs4.min.js"></script>

<script>
    $('.textarea-summernote').summernote({
         toolbar: [
          // [groupName, [list of button]]          
          ['para', ['ol']],
        ]
    });

    $("#example1").DataTable();
    $('#example').DataTable({
      "searching": false,
      "info" :false,
      "lengthChange": false
    });    

    $('.select2').select2();
    $( document ).ready(function() {   
      $('.btnR').tooltip();
      $('.btnX').tooltip();
    });

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });
    
    <?php echo $this->session->flashdata('msg'); ?>
    
      
    $(window).on('hashchange', function(e){
        var hash = window.location.hash;
        var link = hash.replace("#", "");
        openfunction(link);
    });

    function openfunction(e) {        
        $('#modal-'+e).modal('show');            
        
    }
    

  
</script>

</body>
</html>
