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
              <li class="breadcrumb-item active">Overview</li>             
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
                      Style <?php echo $get->style_no ?>
                    </h3>                                  
                </div>       
                <div class="float-right">
                    <a href="<?php echo base_url('process/review/'.$get->id) ?>" target="_blank" class="btn btn-primary btn-xs">Preview Visual VSM</a>
                </div>         
              </div>
                <div class="card-body">
                    <h5>Information</h5>
                    <div class="row">
                        <div class="col-md-3 col-lg-3">
                            <ul class="list-group">
                                <li class="list-group-item <?php echo ($unloading->risk_level == 'on') ? 'list-group-item-danger' : 'list-group-item-success'; ?>">Unloading</li>
                                <li class="list-group-item <?php echo ($ctex->risk_level == 'on') ? 'list-group-item-danger' : 'list-group-item-success'; ?>">C-Tex</li>
                                <li class="list-group-item <?php echo ($laying->risk_level == 'on') ? 'list-group-item-danger' : 'list-group-item-success'; ?>">Laying</li>
                                <li class="list-group-item <?php echo ($handcut->risk_level == 'on') ? 'list-group-item-danger' : 'list-group-item-success'; ?>">Hand Cut</li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-lg-3">
                            <ul class="list-group">
                                <li class="list-group-item <?php echo ($autocutter->risk_level == 'on') ? 'list-group-item-danger' : 'list-group-item-success'; ?>">Auto Cutter</li>
                                <li class="list-group-item <?php echo ($bandknife->risk_level == 'on') ? 'list-group-item-danger' : 'list-group-item-success'; ?>">Band Knfie</li>                                
                                <li class="list-group-item <?php echo ($molding->risk_level == 'on') ? 'list-group-item-danger' : 'list-group-item-success'; ?>">Molding</li>
                                <li class="list-group-item <?php echo ($assorting->risk_level == 'on') ? 'list-group-item-danger' : 'list-group-item-success'; ?>">Assorting</li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-lg-3">
                            <ul class="list-group">
                                <li class="list-group-item <?php echo ($aqlcut->risk_level == 'on') ? 'list-group-item-danger' : 'list-group-item-success'; ?>">AQL Cutting</li>                                
                                <li class="list-group-item <?php echo ($aql->risk_level == 'on') ? 'list-group-item-danger' : 'list-group-item-success'; ?>">AQL</li>                                
                                <li class="list-group-item <?php echo ($sewing->risk_level == 'on') ? 'list-group-item-danger' : 'list-group-item-success'; ?>">Sewing</li>                                
                                <li class="list-group-item <?php echo ($fabricstorage->risk_level == 'on') ? 'list-group-item-danger' : 'list-group-item-success'; ?>">Fabric Storage</li>                                
                            </ul>
                        </div>
                        <div class="col-md-3 col-lg-3">
                            <ul class="list-group">
                                <li class="list-group-item <?php echo ($fg->risk_level == 'on') ? 'list-group-item-danger' : 'list-group-item-success'; ?>">FG</li>                                                
                            </ul>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-md-4 col-lg-4">
                            <h5>Process</h5>
                            <table class="table table-bordered table-sm">
                                <thead>
                                    <tr>
                                        <th>Department</th>
                                        <th>Point Name</th>
                                        <th>#</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($process as $data) { ?>
                                    <tr>
                                        <td><?php echo $data->department ?></td>
                                        <td><?php echo $data->point_name ?></td>
                                        <td>
                                            <button type="button" onclick="getprocess('<?php echo $data->id_process ?>','<?php echo $data->point_name ?>')" class="btn btn-secondary btn-xs"><i class="fas fa-search-plus"></i></button>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>    
                        <div class="col-md-4 col-lg-4">
                            <h5>Inventory</h5>                            
                            <table class="table table-bordered table-sm">
                                <thead>
                                    <tr>
                                        <th>Department</th>
                                        <th>Point Name</th>
                                        <th>#</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($inventory as $data) { ?>
                                    <tr>
                                        <td><?php echo $data->department ?></td>
                                        <td><?php echo $data->point_name ?></td>
                                        <td>
                                            <button type="button" onclick="getinventory('<?php echo $data->idv ?>','<?php echo $data->point_name ?>')" class="btn btn-secondary btn-xs"><i class="fas fa-search-plus"></i></button>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>    
                        <div class="col-md-4 col-lg-4">
                            <h5>Exim</h5>                            
                            <table class="table table-bordered table-sm">
                                <thead>
                                    <tr>
                                        <th>Department</th>
                                        <th>Point Name</th>
                                        <th>#</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($exim as $data) { ?>
                                    <tr>
                                        <td><?php echo $data->department ?></td>
                                        <td><?php echo $data->point_name ?></td>
                                        <td>
                                            <button type="button" onclick="getexim('<?php echo $data->id_exim ?>','<?php echo $data->point_name ?>')" class="btn btn-secondary btn-xs"><i class="fas fa-search-plus"></i></button>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div><hr>
                    <div class="row">    
                        <div class="col-md-4 col-lg-4">
                            <h5>Embed VSM Map</h5>                                                            
                            <?php echo form_open('process/submit_embed/'.$get->id); ?>
                              <div class="form-group">
                                <label for="" class="form-control-static">Embed HTML</label>
                                <textarea name="embed" class="form-control" placeholder="Embed Map" rows="10"><?php echo $get->embed ?></textarea>
                              </div>
                              <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-upload"></i> Submit</button>
                            <?php echo form_close(); ?>
                        </div>
                        <div class="col-md-8 col-lg-8">
                            <h5>Information Matrix</h5>    
                            <div class="float-right">
                                <a href="<?php echo base_url('information/download/'.$get->id) ?>" class="btn btn-sm btn-success"><i class="fas fa-file-excel"></i> Export</a>
                            </div>                        
                            <table class="table table-bordered table-sm" id="example1">
                                <thead>
                                    <tr>
                                        <th width="1%">No</th>
                                        <th>From</th>
                                        <th>To</th>
                                        <th>Information</th>
                                        <th>Type</th>
                                        <th>Lead Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; foreach ($info as $data) { ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $data->from_who ?></td>
                                        <td><?php echo $data->to_who ?></td>
                                        <td><?php echo $data->information ?></td>
                                        <td><?php echo $data->type ?></td>
                                        <td><?php echo $data->lead_time ?> days</td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>    
                    </div>            
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>    

<div class="modal fade" id="modalprocess" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title-process" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
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
                      <td><span class="input1_process"></span></td>
                  </tr>
                  <tr>
                      <td>2</td>
                      <td>No of Cycles observed</td>
                      <td><span class="input2_process"></span></td>
                  </tr>
                  <tr>
                      <td>3</td>
                      <td>Observed time in Sec (Sum of Few full cycles)</td>
                      <td><span class="input3_process"></span></td>
                  </tr>
                  <tr>
                      <td>4</td>
                      <td>Total Cycle Time (Avg Time)</td>
                      <td><span class="input4_process"></span></td>
                  </tr>
                  <tr>
                      <td>5</td>
                      <td>No of Pcs Produced (Full Garments)</td>
                      <td><span class="input5_process"></span></td>
                  </tr>
                   <tr>
                      <td>6</td>
                      <td>Process Rate/Beat(Process Takt)</td>
                      <td><span class="input6_process"></span></td>
                  </tr>
                  <tr>
                      <td colspan="3" class="bg-secondary"></td>
                  </tr>
                  <tr>
                      <td>7</td>
                      <td>No of Parallel processes</td>
                      <td><span class="input7_process"></span></td>
                  </tr>
                  <tr>
                      <td>8</td>
                      <td>Overall Process Rate/Beat (Full Takt)</td>
                      <td><span class="input8_process"></span></td>
                  </tr>
                  <tr>
                      <td colspan="3" class="bg-secondary"></td>
                  </tr>
                  <tr>
                      <td>7</td>
                      <td>Down time % (Out of TT clock hrs.)</td>
                      <td><span class="input9_process"></span> %</td>
                  </tr>
                  <tr>
                      <td>8</td>
                      <td>FTT % (First time through)</td>
                      <td><span class="input10_process"></span> %</td>
                  </tr>
                  <tr>
                      <td>9</td>
                      <td>QCO Down time %(out of TT clock hrs.)</td>
                      <td><span class="input11_process"></span> %</td>
                  </tr>
                  <tr>
                      <td colspan="3" class="bg-secondary"></td>
                  </tr>
                  <tr>
                      <td>10</td>
                      <td>Total No. of Team members allocated</td>
                      <td><span class="input12_process"></span></td>
                  </tr>
              </tbody>
          </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalinventory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title-inventory" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
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
                      <td>Total Inventory  observed</td>
                      <td><span class="input1_inv"></span></td>
                  </tr>
                  <tr>
                      <td>2</td>
                      <td>Volume % out of selected family</td>
                      <td><span class="input2_inv"></span> %</td>
                  </tr>
                  <tr>
                      <td>3</td>
                      <td>Precise Inventory representing the family</td>
                      <td><span class="input3_inv"></span></td>
                  </tr>
                  <tr>
                      <td colspan="3" class="bg-secondary"></td>
                  </tr>
                  <tr>
                      <td>4</td>
                      <td>Avg consumption of the product</td>
                      <td><span class="input4_inv"></span></td>
                  </tr>
                  <tr>
                      <td>5</td>
                      <td>Actual Inventory in Garment form</td>
                      <td><span class="input5_inv"></span></td>
                  </tr>
                   <tr>
                      <td>6</td>
                      <td>No of Parellel inventory points</td>
                      <td><span class="input6_inv"></span></td>
                  </tr>                                  
                  <tr>
                      <td>7</td>
                      <td>Total Inventory across the plant</td>
                      <td><span class="input7_inv"></span></td>
                  </tr>
                  <tr>
                      <td colspan="3" class="bg-secondary"></td>
                  </tr>
                  <tr>
                      <td>8</td>
                      <td>Day production output in selected family</td>
                      <td><span class="input8_inv"></span></td>
                  </tr>
                  <tr>
                      <td>9</td>
                      <td>Total Inventory in Days</td>
                      <td><span class="input9_inv"></span></td>
                  </tr>                                  
              </tbody>
          </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalexim" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title-exim" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">          
            <div class="alert alert-light">
                <h6 class="text-center">Sea</h6><hr class="bg-secondary">
                <div class="form-group row">
                    <label class="label col-4">RM Value</label>
                    <div class="col-8">
                        <span class="sea1"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="label col-4">Total Cost</label>
                    <div class="col-8">
                        <span class="sea2"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="label col-4">Lead Time</label>
                    <div class="col-8">
                        <span class="sea3"></span> days
                    </div>
                </div>
            </div>
            <div class="alert alert-light">
                <h6 class="text-center">Air</h6><hr class="bg-secondary">
                <div class="form-group row">
                    <label class="label col-4">RM Value</label>
                    <div class="col-8">
                        <span class="air1"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="label col-4">Total Cost</label>
                    <div class="col-8">
                        <span class="air2"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="label col-4">Lead Time</label>
                    <div class="col-8">
                        <span class="air3"></span> days
                    </div>
                </div>
            </div>                      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



<script>
    function getprocess(id,name) {
        $.ajax({
            url : "<?php echo site_url('index.php/process/getprocess')?>/"+id,
            type: "GET",
            dataType: "JSON",
            success: function(data){
                $('.input1_process').text(data.input1);
                $('.input2_process').text(data.input2);
                $('.input3_process').text(data.input3);
                $('.input4_process').text(data.input4);
                $('.input5_process').text(data.input5);
                $('.input6_process').text(data.input6);
                $('.input7_process').text(data.input7);
                $('.input8_process').text(data.input8);
                $('.input9_process').text(data.input9);
                $('.input10_process').text(data.input10);
                $('.input11_process').text(data.input11);
                $('.input12_process').text(data.input12);
                $('.modal-title-process').text(name);
                $('#modalprocess').modal('show');
            },
            error: function (jqXHR, textStatus, errorThrown){
                alert('Error get data from ajax');
            }
        });
    }

    function getinventory(id,name) {
        $.ajax({
            url : "<?php echo site_url('index.php/process/getinventory')?>/"+id,
            type: "GET",
            dataType: "JSON",
            success: function(data){
                $('.input1_inv').text(data.input1+' '+data.unit);
                $('.input2_inv').text(data.input2);
                $('.input3_inv').text(data.input3);
                $('.input4_inv').text(data.input4);
                $('.input5_inv').text(data.input5);
                $('.input6_inv').text(data.input6);
                $('.input7_inv').text(data.input7);
                $('.input8_inv').text(data.input8);
                $('.input9_inv').text(data.input9);                
                $('.modal-title-inventory').text(name);
                $('#modalinventory').modal('show');
            },
            error: function (jqXHR, textStatus, errorThrown){
                alert('Error get data from ajax');
            }
        });
    }

    function getexim(id,name) {
        $.ajax({
            url : "<?php echo site_url('index.php/process/getexim')?>/"+id,
            type: "GET",
            dataType: "JSON",
            success: function(data){
                $('.sea1').text(data.sea1);
                $('.sea2').text('$ '+data.sea2);
                $('.sea3').text(data.sea3);
                $('.air1').text(data.air1);
                $('.air2').text('$ '+data.air2);
                $('.air3').text(data.air3);
                $('.modal-title-exim').text(name);
                $('#modalexim').modal('show');
            },
            error: function (jqXHR, textStatus, errorThrown){
                alert('Error get data from ajax');
            }
        });
    }

   // var loadFile = function(event) {
   //      var output = document.getElementById('output');
   //      output.src = URL.createObjectURL(event.target.files[0]);
   //      output.onload = function() {
   //          URL.revokeObjectURL(output.src) // free memory
   //      }
   //  };
</script>
