
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Information</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url('information') ?>">Information</a></li>
              <li class="breadcrumb-item active">Style <?php echo $get->style_no ?></li>
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
                      <i class="far fa-star"></i>
                      Style <span class="text-danger"><?php echo $get->style_no ?></span>
                    </h3>                
                </div>                
              </div>
              <div class="card-body">
              <div class="row">
                <div class="col-md-4 col-lg-4">
                    <h5>Add Information</h5><hr>                    
                        <?php echo form_open('information/save/'.$get->id, array('class' => 'frminfo')); ?>                        
                          <div class="form-group">
                            <label for="exampleInputEmail1">Information that your department share</label>
                            <input type="text" required="" class="form-control form-control-sm" name="information" placeholder="Information that your department share">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">To</label>
                            <select name="to_who" class="form-control select2" required="">
                                <option value="">Choose</option>
                                <option value="DARWIN">DARWIN</option>
                                <option value="PCU">PCU</option>
                                <option value="COMMERCIAL">COMMERCIAL</option>
                                <option value="PLANNING">PLANNING</option>
                                <option value="RECEIVING">RECEIVING</option>
                                <option value="LAB">LAB</option>
                                <option value="RAW MATERIAL">RAW MATERIAL</option>
                                <option value="CUTTING">CUTTING</option>
                                <option value="CAD">CAD</option>
                                <option value="PRODUCTION">PRODUCTION</option>
                                <option value="FG">FG</option>
                                <option value="TECHNICAL">TECHNICAL</option>
                                <option value="MDS">MDS</option>
                                <option value="IE-WS">IE-WS</option>
                                <option value="MECHANIC">MECHANIC</option>
                                <option value="SUPPLIER">SUPPLIER</option>
                            </select>                            
                          </div>
                          <div class="form-group">
                            <label for="exampleInputFile">Type of Information</label>
                            <select name="type" class="form-control form-control-sm">
                                <option value="Manual">Manual</option>
                                <option value="System">System</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputFile">Lead Time</label>
                            <input type="number" class="form-control form-control-sm" step="0.1" min="0" name="lead_time" placeholder="No of Days">    
                          </div>
                          <button type="submit" class="btn btn-primary btn-save">Save</button> 
                          <span class="cancel_edit"></span>                       
                        <?php echo form_close(); ?>
                    </div>
                <div class="col-md-8 col-lg-8">
                    <h5>Your Information</h5><hr>
                    <table class="table table-bordered table-striped table-sm" id="example1">
                        <thead>
                            <tr>
                                <th>To</th>
                                <th>Information</th>
                                <th>Type</th>
                                <th>Lead Time</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($info as $data) { ?>
                            <tr>
                                <td><?php echo $data->to_who ?></td>
                                <td><?php echo $data->information ?></td>
                                <td><?php echo $data->type ?></td>
                                <td><?php echo $data->lead_time ?> Days</td>
                                <td>
                                    <button type="button" onclick="edit('<?php echo $data->id ?>','<?php echo $get->id ?>')" class="btn btn-xs btn-primary"><i class="fas fa-edit"></i></button>
                                    <a href="<?php echo base_url('information/delete/'.$data->id.'/'.$get->id) ?>" class="btn btn-xs btn-danger" onclick="return confirm('Are you sure ?')"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                        <tr>
                            <td colspan="4"><b>Total Lead Time : <?php echo round($totaltime->total, 3) ?> Days</b></td>
                            <td></td>
                            
                        </tr>
                    </table>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>    


<script>
     function edit(id,style) {
        $.ajax({
            url : "<?php echo site_url('index.php/information/get')?>/"+id,
            type: "GET",
            dataType: "JSON",
            success: function(data){
                // console.log(id);
                $('[name="type"]').val(data.type);
                $('[name="type"]').trigger('change');
                $('[name="information"]').val(data.information);
                $('[name="lead_time"]').val(data.lead_time);
                $('[name="to_who"]').val(data.to_who);
                $('[name="to_who"]').trigger('change');
                $('.frminfo').attr('action','<?php echo base_url('information/edit/') ?>'+id+'/'+style);            
                $('.btn-save').text('Edit');                   
                $('.cancel_edit').html('<button type="button" onclick="cancel(\''+style+'\')" class="btn btn-danger btn-save">Cancel</button>');         
            },
            error: function (jqXHR, textStatus, errorThrown){
                alert('Error get data from ajax');
            }
        });
    }

    function cancel(style) {
        $('[name="to_who"]').val('');
        $('[name="to_who"]').trigger('change');
        $('.frminfo')[0].reset();
        $('.frminfo').attr('action','<?php echo base_url('rules/save/') ?>'+style);            
        $('.btn-save').text('Save');                   
        $('.cancel_edit').html(''); 
        
    }
</script>