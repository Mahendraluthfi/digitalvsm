
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
              <li class="breadcrumb-item active">Rules</li>
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
                      Data Process & Inventory
                    </h3>                
                </div>
                <div class="float-right">
                    <!-- <button type="button" class="btn btn-primary btn-xs" onclick="add()"><i class="fas fa-plus"></i> Add</button> -->
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                    <div class="col-md-3 col-lg-3">
                        <?php echo form_open('rules/save', array('class' => 'frmrules')); ?>                        
                          <div class="form-group">
                            <label for="exampleInputEmail1">Entity</label>
                            <select name="department" class="form-control select2" required="">
                                <option value="">Choose</option>
                                <option value="MOS">MOS</option>
                                <option value="PCU">PCU</option>
                                <option value="COMMERCIAL">COMMERCIAL</option>
                                <option value="PLANNING">PLANNING</option>
                                <option value="RECEIVING">RECEIVING</option>
                                <option value="QUALITY">QUALITY</option>                                
                                <option value="LAB">LAB</option>
                                <option value="RAW MATERIAL">RAW MATERIAL</option>
                                <option value="CUTTING">CUTTING</option>
                                <option value="CAD">CAD</option>
                                <option value="PRODUCTION">PRODUCTION</option>
                                <option value="FINISHED GOOD">FINISHED GOOD</option>
                                <option value="TECHNICAL">TECHNICAL</option>
                                <option value="MDS">MDS</option>
                                <option value="IE-WS">IE-WS</option>
                                <option value="MECHANIC">MECHANIC</option>
                                <option value="SUPPLIER">SUPPLIER</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Form Type</label>
                            <select name="type" class="form-control" required="">
                                <option value="PROCESS">PROCESS</option>
                                <option value="INVENTORY">INVENTORY</option>
                                <option value="EXIM">EXIM</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputFile">Point Name</label>
                            <input type="text" class="form-control" name="point_name" placeholder="Point Name" required="">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputFile">Sequence</label>
                            <input type="number" min="0" class="form-control" name="seq" placeholder="No of Sequence" required="">
                          </div>
                          <button type="submit" class="btn btn-primary btn-save">Save</button> 
                          <span class="cancel_edit">
                              
                          </span>                       
                        <?php echo form_close(); ?><br>
                        <?php echo $this->session->flashdata('msg'); ?>
                    </div>
                    <div class="col-md-1 col-lg-1"></div>
                    <div class="col-md-8 col-lg-8">
                        <table class="table table-bordered table-condensed table-sm table-striped" id="example1">
                            <thead>
                                <tr>
                                    <th width="1%">No</th>
                                    <th>Entity</th>
                                    <th>Form Type</th>
                                    <th>Point Name</th>
                                    <th>Seq.</th>
                                    <th>#</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=1; foreach ($get as $data) { ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $data->department ?></td>
                                    <td><?php echo $data->type ?></td>
                                    <td><?php echo $data->point_name ?></td>
                                    <td><?php echo $data->seq ?></td>
                                    <td>
                                        <a href="<?php echo base_url('rules/instructions/'.$data->id) ?>" class="btn btn-success btn-xs"><i class="fas fa-info"></i></a>
                                        <button type="button" onclick="edit('<?php echo $data->id ?>')" class="btn btn-xs btn-primary"><i class="fas fa-edit"></i></button>
                                        <a href="<?php echo base_url('rules/delete/'.$data->id) ?>" class="btn btn-xs btn-danger"><i class="fas fa-trash" onclick="return confirm('Are you sure ?')"></i></a>
                                    </td>
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


<script>
     function edit(id) {
        $.ajax({
            url : "<?php echo site_url('index.php/rules/get')?>/"+id,
            type: "GET",
            dataType: "JSON",
            success: function(data){
                // console.log(id);
                $('[name="type"]').val(data.type);
                $('[name="type"]').trigger('change');
                $('[name="point_name"]').val(data.point_name);
                $('[name="seq"]').val(data.seq);
                $('[name="department"]').val(data.department);
                $('[name="department"]').trigger('change');
                $('.frmrules').attr('action','<?php echo base_url('rules/edit/') ?>'+id);            
                $('.btn-save').text('Edit');                   
                $('.cancel_edit').html('<button type="button" onclick="cancel()" class="btn btn-danger btn-save">Cancel</button>');         
            },
            error: function (jqXHR, textStatus, errorThrown){
                alert('Error get data from ajax');
            }
        });
    }

    function cancel() {
        $('[name="department"]').val('');
        $('[name="department"]').trigger('change');
        $('.frmrules')[0].reset();
        $('.frmrules').attr('action','<?php echo base_url('rules/save') ?>');            
        $('.btn-save').text('Save');                   
        $('.cancel_edit').html(''); 
        
    }
</script>