
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
                  <div class="row">
                      <div class="col-md-7 col-lg-7">
                            <h5>Process Name : <?php echo $get->point_name ?></h5>
                            <h5>Style Number : <?php echo $main->style_no ?></h5>
                          <table class="table table-condensed table-sm">
                              <thead>
                                  <tr class="bg-secondary">
                                      <th width="1%">#</th>
                                      <th>Data Element</th>
                                      <th>Figure</th>                                      
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td>1</td>
                                      <td>Process type</td>
                                      <td><?php echo $proc->input1 ?></td>
                                  </tr>
                                  <tr>
                                      <td>2</td>
                                      <td>No of Cycles observed</td>
                                      <td><?php echo $proc->input2 ?></td>
                                  </tr>
                                  <tr>
                                      <td>3</td>
                                      <td>Observed time in Sec (Sum of Few full cycles)</td>
                                      <td><?php echo $proc->input3 ?></td>
                                  </tr>
                                  <tr>
                                      <td>4</td>
                                      <td>Total Cycle Time (Avg Time)</td>
                                      <td><?php echo $proc->input4 ?></td>
                                  </tr>
                                  <tr>
                                      <td>5</td>
                                      <td>No of Pcs Produced (Full Garments)</td>
                                      <td><?php echo $proc->input5 ?></td>
                                  </tr>
                                   <tr>
                                      <td>6</td>
                                      <td>Process Rate/Beat(Process Takt)</td>
                                      <td><?php echo $proc->input6 ?></td>
                                  </tr>
                                  <tr>
                                      <td colspan="3" class="bg-secondary"></td>
                                  </tr>
                                  <tr>
                                      <td>7</td>
                                      <td>No of Parallel processes</td>
                                      <td><?php echo $proc->input7 ?></td>
                                  </tr>
                                  <tr>
                                      <td>8</td>
                                      <td>Overall Process Rate/Beat (Full Takt)</td>
                                      <td <?php if($main->takttime < $proc->input8){echo "class='bg-danger text-white'";} ?>
                                      ><?php echo $proc->input8 ?></td>
                                  </tr>
                                  <tr>
                                      <td colspan="3" class="bg-secondary"></td>
                                  </tr>
                                  <tr>
                                      <td>7</td>
                                      <td>Down time % (Out of TT clock hrs.)</td>
                                      <td><?php echo $proc->input9 ?> %</td>
                                  </tr>
                                  <tr>
                                      <td>8</td>
                                      <td>FTT % (First time through)</td>
                                      <td><?php echo $proc->input10 ?> %</td>
                                  </tr>
                                  <tr>
                                      <td>9</td>
                                      <td>QCO Down time %(out of TT clock hrs.)</td>
                                      <td><?php echo $proc->input11 ?> %</td>
                                  </tr>
                                  <tr>
                                      <td colspan="3" class="bg-secondary"></td>
                                  </tr>
                                  <tr>
                                      <td>10</td>
                                      <td>Total No. of Team members allocated</td>
                                      <td><?php echo $proc->input12 ?></td>
                                  </tr>
                              </tbody>
                          </table>
                          <a href="<?php echo base_url('process/sign/'.$this->uri->segment(3).'/'.$this->uri->segment(4).'/'.$proc->id_process) ?>" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Edit</a>
                          <a href="<?php echo base_url('process') ?>" class="btn btn-success btn-sm"><i class="fas fa-chevron-left"></i>  Back</a>
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