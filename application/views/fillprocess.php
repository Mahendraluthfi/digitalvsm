
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
                                      <th></th>
                                  </tr>
                              </thead>
                              <tbody>
                                <?php echo form_open('process/save_proc/'.$this->uri->segment(3).'/'.$this->uri->segment(4).'/'.$this->uri->segment(5)); ?>

                                  <tr>
                                      <td>1</td>
                                      <td>Process type</td>
                                      <td>
                                          <select name="input1" required="" class="form-control form-control-sm">
                                              <option value="Single" <?php if($proc->input1 == "Single"){echo "selected=''";} ?>>Single</option>
                                              <option value="Batch" <?php if($proc->input1 == "Batch"){echo "selected=''";} ?>>Batch</option>
                                          </select>
                                      </td>
                                      <td>
                                          <button class="btn btn-xs btn-info btnR" data-toggle="tooltip" data-placement="right" title="How the process release the end outcome -Single Pc or Batch form"><i class="fas fa-info"></i></button>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>2</td>
                                      <td>No of Cycles observed</td>
                                      <td>
                                          <input type="number" min="0" step="0.001" required="" class="form-control form-control-sm text-right" name="input2" value="<?php echo $proc->input2 ?>" onfocusout="bin4()">
                                      </td>
                                      <td>                                          
                                          <button class="btn btn-xs btn-info btnR" data-toggle="tooltip" data-placement="right" title="How many full cycles you have observed. Go for more cycles to get accurate info."><i class="fas fa-info"></i></button>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>3</td>
                                      <td>Observed time in Sec (Sum of Few full cycles)</td>
                                      <td>
                                          <input type="number" min="0" step="0.001" required="" class="form-control form-control-sm text-right" name="input3" value="<?php echo $proc->input3 ?>" onfocusout="bin4()">
                                      </td>
                                      <td>                                          
                                          <button class="btn btn-xs btn-info btnR" data-toggle="tooltip" data-placement="right" title="You need to observe full cycle from start to end with disturbances. E.g. Time for min of 2 full docket laying time"><i class="fas fa-info"></i></button>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>4</td>
                                      <td>Total Cycle Time (Avg Time)</td>
                                      <td>
                                          <input type="text" readonly="" class="form-control form-control-sm text-right" name="input4" value="<?php echo $proc->input4 ?>">
                                      </td>
                                      <td>                                          
                                          <button class="btn btn-xs btn-info btnR" data-toggle="tooltip" data-placement="right" title="No. 3/ No. 2"><i class="fas fa-info"></i></button>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>5</td>
                                      <td>No of Pcs Produced (Full Garments)</td>
                                      <td>
                                          <input type="number" min="0" step="0.001" class="form-control form-control-sm text-right" name="input5" value="<?php echo $proc->input5 ?>" required="" onfocusout="bin6()">
                                      </td>
                                      <td>                                          
                                          <button class="btn btn-xs btn-info btnR" data-toggle="tooltip" data-placement="right" title="Consider how much of full garments were produced during the observed time. Specially in operational area."><i class="fas fa-info"></i></button>
                                      </td>
                                  </tr>
                                   <tr>
                                      <td>6</td>
                                      <td>Process Rate/Beat(Process Takt)</td>
                                      <td>
                                          <input type="text" readonly="" class="form-control form-control-sm text-right" name="input6" value="<?php echo $proc->input6 ?>">
                                      </td>
                                      <td>                                          
                                          <button class="btn btn-xs btn-info btnR" data-toggle="tooltip" data-placement="right" title="No. 4/ No. 5"><i class="fas fa-info"></i></button>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td colspan="3" class="bg-secondary"></td>
                                  </tr>
                                  <tr>
                                      <td>7</td>
                                      <td>No of Parallel processes</td>
                                      <td>
                                          <input type="number" min="0" step="0.001" required="" class="form-control form-control-sm text-right" name="input7" value="<?php echo $proc->input7 ?>" onfocusout="bin8()">
                                      </td>
                                      <td>                                          
                                          <button class="btn btn-xs btn-info btnR" data-toggle="tooltip" data-placement="right" title="No of Similar operations which were allocated for identified product family. It may be a portion of a process -0.5"><i class="fas fa-info"></i></button>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>8</td>
                                      <td>Overall Process Rate/Beat (Full Takt)</td>
                                      <td>
                                          <input type="text" readonly="" class="form-control form-control-sm text-right" name="input8" value="<?php echo $proc->input8 ?>">
                                      </td>
                                      <td>                                          
                                          <button class="btn btn-xs btn-info btnR" data-toggle="tooltip" data-placement="right" title="No. 6/ No. 7"><i class="fas fa-info"></i></button>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td colspan="3" class="bg-secondary"></td>
                                  </tr>
                                  <tr>
                                      <td>7</td>
                                      <td>Down time % (Out of TT clock hrs.)</td>
                                      <td>
                                          <div class="input-group input-group-sm">
                                              <input type="number" min="0" step="0.1" required="" class="form-control form-control-sm text-right" name="input9" value="<?php echo $proc->input9 ?>">
                                              <div class="input-group-append">
                                                <span class="input-group-text">%</span>
                                              </div>
                                            </div>
                                      </td>
                                      <td>                                          
                                          <button class="btn btn-xs btn-info btnR" data-toggle="tooltip" data-placement="right" title="[Total downtime reported / Total working hrs.]*100"><i class="fas fa-info"></i></button>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>8</td>
                                      <td>FTT % (First time through)</td>
                                      <td>
                                          <div class="input-group input-group-sm">
                                              <input type="number" min="0" step="0.1" required="" name="input10" value="<?php echo $proc->input10 ?>" class="form-control form-control-sm text-right">
                                              <div class="input-group-append">
                                                <span class="input-group-text">%</span>
                                              </div>
                                            </div>
                                      </td>
                                      <td>                                          
                                          <button class="btn btn-xs btn-info btnR" data-toggle="tooltip" data-placement="right" title="Avg FTT %reported during last two months"><i class="fas fa-info"></i></button>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>9</td>
                                      <td>QCO Down time %(out of TT clock hrs.)</td>
                                      <td>
                                          <div class="input-group input-group-sm">
                                              <input type="number" min="0" step="0.1" required="" name="input11" value="<?php echo $proc->input11 ?>" class="form-control form-control-sm text-right">
                                              <div class="input-group-append">
                                                <span class="input-group-text">%</span>
                                              </div>
                                            </div>
                                      </td>
                                      <td>                                          
                                          <button class="btn btn-xs btn-info btnR" data-toggle="tooltip" data-placement="right" title="[(Time laps from one cycle end to next cycle start * no. of avg cycles)/Total working hrs.]*100"><i class="fas fa-info"></i></button>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td colspan="3" class="bg-secondary"></td>
                                  </tr>
                                  <tr>
                                      <td>10</td>
                                      <td>Total No. of Team members allocated</td>
                                      <td>
                                          <input type="number" min="0" required="" class="form-control form-control-sm text-right" name="input12" value="<?php echo $proc->input12 ?>">
                                      </td>
                                      <td>                                          
                                          <button class="btn btn-xs btn-info btnR" data-toggle="tooltip" data-placement="right" title="No of people allocated to identified process. If shared please indicate the % of allocation- e.g. 1.5 people"><i class="fas fa-info"></i></button>
                                      </td>
                                  </tr>
                              </tbody>
                          </table>
                           <button type="submit" class="btn btn-primary">Save</button>
                          <a href="<?php echo base_url('process/view/'.$this->uri->segment(3).'/'.$this->uri->segment(4)) ?>" class="btn btn-secondary">Back</a>
                          <?php echo form_close(); ?>
                      </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>    

<script>
      function bin4() {
        var sub1 = $('[name="input2"]').val();
        var sub2 = $('[name="input3"]').val();
        var hasil = sub2 / sub1;
        $('[name="input4"]').val(parseFloat(hasil).toFixed(1));  
        bin6();
        bin8();
    }

    function bin6() {
        var sub1 = $('[name="input4"]').val();
        var sub2 = $('[name="input5"]').val();
        var hasil = sub1 / sub2;
        $('[name="input6"]').val(parseFloat(hasil).toFixed(2));         
        bin8();        
    }

     function bin8() {
        var sub1 = $('[name="input6"]').val();
        var sub2 = $('[name="input7"]').val();
        var hasil = sub1 / sub2;
        $('[name="input8"]').val(hasil);                
    }
</script>