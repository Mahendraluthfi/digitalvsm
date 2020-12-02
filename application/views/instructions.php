
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Rules</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url('rules') ?>">Rules</a></li>
              <li class="breadcrumb-item active">Instructions to Fill</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <div class="float-left">
                    <h3 class="card-title">
                      <i class="fas fa-cog"></i>
                      <?php echo $get->department ?> <i class="fas fa-chevron-right"></i> <?php echo $get->point_name ?>
                    </h3>                
                </div>
                <div class="float-right">
                    <!-- <button type="button" class="btn btn-primary btn-xs" onclick="add()"><i class="fas fa-plus"></i> Add</button> -->
                </div>
              </div>
              <div class="card-body">
                    <?php $this->load->view($fill, $get); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>    


<script>
    
</script>