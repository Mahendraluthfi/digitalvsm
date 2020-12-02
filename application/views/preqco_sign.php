
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Extended QCO</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Dashboard</a></li>
              <li class="breadcrumb-item active">Extended QCO</li>
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
                      <i class="fas fa-random"></i> Extended QCO Style <?php echo $main->style_no ?>
                    </h3>                
                </div>                
              </div>
              <div class="card-body">
                    <div class="row">
                        <div class="col-md-2 col-lg-2">
                            <?php if ($this->session->userdata('vsm_department') == "COMMERCIAL") { ?> 
                                <h5>Process</h5>
                                <div class="list-group">
                                    <?php 
                                    $url  = str_replace("%20", ' ', $this->uri->segment(4));                                    
                                    foreach ($exim as $data) { ?>
                                        <a href="<?php echo base_url('preqco/question/'.$this->uri->segment(3).'/'.$data->point_name.'/'.$data->id) ?>" class="list-group-item list-group-item-action"><?php echo $data->point_name ?></a>
                                    <?php } ?>
                                </div>
                            <?php }else{ ?>
                                <h5>Process</h5>
                                <div class="list-group">
                                    <?php
                                    $url  = str_replace("%20", ' ', $this->uri->segment(4));
                                     foreach ($process as $data) { ?>
                                        <a href="<?php echo base_url('preqco/question/'.$this->uri->segment(3).'/'.$data->point_name.'/'.$data->id) ?>" class="list-group-item list-group-item-action <?php if($url == $data->point_name){echo "active";} ?>"><?php echo $data->point_name ?></a>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="col-md-2 col-lg-2">
                            <?php if ($this->session->userdata('vsm_department') !== "COMMERCIAL") { ?> 
                                <h5>Inventory</h5>
                                <div class="list-group">
                                    <?php
                                    $url  = str_replace("%20", ' ', $this->uri->segment(4));                                    
                                     foreach ($inventory as $data) { ?>
                                        <a href="<?php echo base_url('preqco/question/'.$this->uri->segment(3).'/'.$data->point_name.'/'.$data->id) ?>" class="list-group-item list-group-item-action <?php if($url == $data->point_name){echo "active";} ?>"><?php echo $data->point_name ?></a>
                                    <?php } ?>
                                </div>
                            <?php }?>
                        </div>
                        <div class="col-md-8 col-lg-8">
                            <?php $this->load->view('questions'); ?>
                        </div>
                    </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>    
<script>     
    
</script>