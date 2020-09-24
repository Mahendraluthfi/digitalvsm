<style>
    .tooltip { 
        pointer-events: none;
    }
</style>
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
                            <h5>Inventory Point : <?php echo $get->point_name ?></h5>
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
                                <?php echo form_open('process/save/'.$this->uri->segment(3).'/'.$this->uri->segment(4).'/'.$this->uri->segment(5)); ?>
                                  <tr>
                                      <td>1</td>
                                      <td>Total Inventory  observed</td>
                                      <td>
                                          <div class="input-group input-group-sm">
                                              <input type="number" required="" name="input1" id="input1" min="0" step="0.0001" class="form-control form-control-sm text-right" onfocusout="bin3()" value="<?php echo $inv->input1 ?>">
                                              <div class="input-group-append">
                                                <input type="text" required="" class="form-control-sm form-control" size="10" name="unit" placeholder="Unit" value="<?php echo $inv->unit ?>">
                                              </div>
                                            </div>
                                      </td>
                                      <td>
                                          <button class="btn btn-xs btn-info btnR" data-toggle="tooltip" data-placement="right" title="How much of inventory stagnated - Rolls/ Panels/Pcs"><i class="fas fa-info"></i></button>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>2</td>
                                      <td>Volume % out of selected family</td>
                                      <td>
                                          <div class="input-group input-group-sm">
                                              <input type="number" required="" name="input2" min="0" step="0.0001" class="form-control form-control-sm text-right" onfocusout="bin3()" value="<?php echo $inv->input2 ?>">
                                              <div class="input-group-append">
                                                <span class="input-group-text">%</span>
                                              </div>
                                            </div>
                                      </td>
                                      <td>                                          
                                          <button class="btn btn-xs btn-info btnR" data-toggle="tooltip" data-placement="right" title="% Portion of the selected product family. E.g. 60% out of total stock"><i class="fas fa-info"></i></button>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>3</td>
                                      <td>Precise Inventory representing the family</td>
                                      <td>
                                          <input type="text" readonly="" value="<?php echo $inv->input3 ?>" name="input3" class="form-control form-control-sm text-right">
                                      </td>
                                      <td>                                          
                                          <button class="btn btn-xs btn-info btnR" data-toggle="tooltip" data-placement="right" title="No. 01 * No. 02"><i class="fas fa-info"></i></button>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td colspan="3" class="bg-secondary"></td>
                                  </tr>
                                  <tr>
                                      <td>4</td>
                                      <td>Avg consumption of the product</td>
                                      <td>
                                          <input type="number" required="" value="<?php echo $inv->input4 ?>" min="0" step="0.0001" class="form-control form-control-sm text-right" name="input4" onfocusout="bin4()">
                                      </td>
                                      <td>                                          
                                          <button class="btn btn-xs btn-info btnR" data-toggle="tooltip" data-placement="right" title="Fabric consumption of the product"><i class="fas fa-info"></i></button>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>5</td>
                                      <td>Actual Inventory in Garment form</td>
                                      <td>
                                          <input type="text" readonly="" value="<?php echo $inv->input5 ?>" class="form-control form-control-sm text-right" name="input5">
                                      </td>
                                      <td>                                          
                                          <button class="btn btn-xs btn-info btnR" data-toggle="tooltip" data-placement="right" title="No. 03/ No. 04"><i class="fas fa-info"></i></button>
                                      </td>
                                  </tr>
                                   <tr>
                                      <td>6</td>
                                      <td>No of Parellel inventory points</td>
                                      <td>
                                          <input type="number" required="" value="<?php echo $inv->input6 ?>" min="0" step="0.0001" class="form-control form-control-sm text-right" name="input6" onfocusout="bin7()">
                                      </td>
                                      <td>                                          
                                          <button class="btn btn-xs btn-info btnR" data-toggle="tooltip" data-placement="right" title="If plant have other inventory points, specify thos, e.g line end FG stock"><i class="fas fa-info"></i></button>
                                      </td>
                                  </tr>
                                  
                                  <tr>
                                      <td>7</td>
                                      <td>Total Inventory across the plant</td>
                                      <td>
                                          <input type="text" readonly="" value="<?php echo $inv->input7 ?>" class="form-control form-control-sm text-right" name="input7">
                                      </td>
                                      <td>                                          
                                          <button class="btn btn-xs btn-info btnR" data-toggle="tooltip" data-placement="right" title="No. 05 * No. 06"><i class="fas fa-info"></i></button>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td colspan="3" class="bg-secondary"></td>
                                  </tr>
                                  <tr>
                                      <td>8</td>
                                      <td>Day production output in selected family</td>
                                      <td>
                                          <input type="number" required="" min="0" value="<?php echo $inv->input8 ?>" step="0.0001" class="form-control form-control-sm text-right" name="input8" onfocusout="bin9()">
                                      </td>
                                      <td>                                          
                                          <button class="btn btn-xs btn-info btnR" data-toggle="tooltip" data-placement="right" title="Total average garments products -Avg of Last & next month"><i class="fas fa-info"></i></button>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>9</td>
                                      <td>Total Inventory in Days</td>
                                      <td>
                                         <input type="text" readonly="" value="<?php echo $inv->input9 ?>" class="form-control form-control-sm text-right" name="input9">
                                      </td>
                                      <td>                                          
                                          <button class="btn btn-xs btn-info btnR" data-toggle="tooltip" data-placement="right" title="No. 07/ No. 08"><i class="fas fa-info"></i></button>
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
    function bin3() {
        var sub1 = $('[name="input1"]').val();
        var sub2 = $('[name="input2"]').val();
        var hasil = (sub2/100) * sub1;        
        $('[name="input3"]').val(parseFloat(hasil).toFixed(2));   
        bin4();     
        bin7();     
        bin9();     
    }

    function bin4() {
        var sub1 = $('[name="input3"]').val();
        var sub2 = $('[name="input4"]').val();
        var hasil = sub1 / sub2;        
        $('[name="input5"]').val(parseFloat(hasil).toFixed(2)); 
        bin7();     
        bin9();          
    }

     function bin7() {
        var sub1 = $('[name="input5"]').val();
        var sub2 = $('[name="input6"]').val();
        var hasil = sub1 * sub2;
        $('[name="input7"]').val(hasil);        
        bin9();
    }

      function bin9() {
        var sub1 = $('[name="input7"]').val();
        var sub2 = $('[name="input8"]').val();
        var hasil = sub1 / sub2;
        $('[name="input9"]').val(parseFloat(hasil).toFixed(2));        
    }
</script>