
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Process & Inventory</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url('process') ?>">Process & Inventory</a></li>
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
                      <i class="fas fa-table"></i>
                      <?php echo $get->type ?>
                    </h3>                
                </div>                
              </div>
              <div class="card-body">
                <h5>Process Name : <?php echo $get->point_name ?></h5>
                <h5>Style Number : <?php echo $main->style_no ?></h5>
                  <div class="row">
                      <div class="col-md-1 col-lg-1"></div>
                      <div class="col-md-5 col-lg-5">
                        <div class="alert alert-light">
                            <h6 class="text-center">Sea</h6><hr class="bg-secondary">                            
                            <div class="form-group row">
                                <label class="label col-4">Total Cost</label>
                                <div class="col-8">
                                    <div class="input-group input-group-sm">
                                      <input type="text" readonly="" value="<?php echo $exim->sea2 ?>" class="form-control form-control-sm text-right">
                                      <div class="input-group-append">
                                        <span class="input-group-text">$</span>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="label col-4">Lead Time</label>
                                <div class="col-8">
                                    <div class="input-group input-group-sm">
                                      <input type="text" readonly="" value="<?php echo $exim->sea3 ?>" class="form-control form-control-sm text-right">
                                      <div class="input-group-append">
                                        <span class="input-group-text">Days</span>
                                      </div>
                                    </div>
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="label col-4">Frequency</label>
                                <div class="col-8">
                                    <input type="number" readonly="" value="<?php echo $exim->sea4 ?>" min="0" class="form-control form-control-sm text-right" name="sea4">
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="col-md-5 col-lg-5">
                        <div class="alert alert-light">
                            <h6 class="text-center">Air</h6><hr class="bg-secondary">                            
                            <div class="form-group row">
                                <label class="label col-4">Total Cost</label>
                                <div class="col-8">
                                    <div class="input-group input-group-sm">
                                      <input type="text" readonly="" value="<?php echo $exim->air2 ?>" class="form-control form-control-sm text-right">
                                      <div class="input-group-append">
                                        <span class="input-group-text">$</span>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="label col-4">Lead Time</label>
                                <div class="col-8">
                                    <div class="input-group input-group-sm">
                                      <input type="text" readonly="" value="<?php echo $exim->air3 ?>" class="form-control form-control-sm text-right">
                                      <div class="input-group-append">
                                        <span class="input-group-text">Days</span>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="label col-4">Frequency</label>
                                <div class="col-8">
                                    <input type="number" readonly="" value="<?php echo $exim->air4 ?>" min="0" class="form-control form-control-sm text-right" name="air4">
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="col-md-1 col-lg-1"></div>
                  </div>
                    <center>
                        <a href="<?php echo base_url('process/sign/'.$this->uri->segment(3).'/'.$this->uri->segment(4).'/'.$exim->id_exim) ?>" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Edit</a>
                        <a href="<?php echo base_url('process') ?>" class="btn btn-success btn-sm"><i class="fas fa-chevron-left"></i> Back</a>
                    </center>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>    

<script>
    
</script>