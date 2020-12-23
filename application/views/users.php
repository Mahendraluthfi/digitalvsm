
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Users</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Dashboard</a></li>
              <li class="breadcrumb-item active">Users</li>
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
                      <i class="fas fa-users"></i>
                      Data Users
                    </h3>                
                </div>
                <div class="float-right">
                    <a href="<?php echo base_url('users/item') ?>" class="btn btn-success btn-xs"><i class="fas fa-info-circle"></i> Information Item</a>
                    <button type="button" class="btn btn-primary btn-xs" onclick="add()"><i class="fas fa-plus"></i> Add</button>
                </div>
              </div>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                      <tr>
                        <th width="1%">No</th>
                        <th>EPF</th>
                        <th>Name</th>
                        <th>Department</th>
                        <th width="15%">#</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php $no=1; foreach ($get as $data) { ?>
                        <tr>
                            <td><?php echo $no++ ?></td> 
                            <td><?php echo $data->epf ?></td> 
                            <td><?php echo $data->name ?></td> 
                            <td><?php echo $data->department ?></td> 
                            <td>
                                <button type="button" class="btn btn-xs btn-success" onclick="get('<?php echo $data->id ?>')"><i class="fas fa-edit"></i> Edit</button>
                                <a href="<?php echo base_url('users/delete/'.$data->id) ?>" class="btn btn-xs btn-danger" onclick="return confirm('Are you sure ?')"><i class="fas fa-trash"></i> Delete</a>
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

<div class="modal fade" id="modal-default" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add User</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open('users/add'); ?>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">EPF</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" required="" name="epf" id="inputEmail3" placeholder="EPF Number">
                    </div>
                </div>
                 <div class="form-group row">
                    <label for="inputEmail4" class="col-sm-3 col-form-label">Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" required="" name="name" id="inputEmail4" placeholder="Employee Name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-3 col-form-label">Department</label>
                    <div class="col-sm-9">
                        <select name="department" class="form-control select2" required="">
                            <option value="">Choose</option>
                            <option value="MOS">MOS</option>
                            <option value="PCU">PCU</option>
                            <option value="COMMERCIAL">COMMERCIAL</option>
                            <option value="LOGISTIC">LOGISTIC</option>
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
                            <option value="MANAGER">MANAGER</option>
                        </select>
                    <p></p>
                    <span class="text-danger"><i>* EPF Number is current default password.</i></span>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-edit" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit User</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open('users/edit'); ?>
                <div class="form-group row">
                    <label for="inputEmail5" class="col-sm-3 col-form-label">EPF</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" required="" name="epf_edit" id="inputEmail5" placeholder="EPF Number">
                    </div>
                </div>
                 <div class="form-group row">
                    <label for="inputEmail6" class="col-sm-3 col-form-label">Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" required="" name="name_edit" id="inputEmail6" placeholder="Employee Name">
                        <input type="hidden" name="id">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-3 col-form-label">Department</label>
                    <div class="col-sm-9">
                        <select name="department_edit" class="form-control select2" required="">
                            <option value="">Choose</option>
                            <option value="MOS">MOS</option>
                            <option value="PCU">PCU</option>
                            <option value="COMMERCIAL">COMMERCIAL</option>
                            <option value="LOGISTIC">LOGISTIC</option>                            
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
                            <option value="MANAGER">MANAGER</option>
                        </select>
                    <p></p>
                    <span class="text-danger"><i>* EPF Number is current default password.</i></span>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>

<script>
    function add() {
        $('#modal-default').modal('show');
    }

    function get(id) {
        $.ajax({
            url : "<?php echo site_url('index.php/users/get')?>/"+id,
            type: "GET",
            dataType: "JSON",
            success: function(data){
                // console.log(id);
                $('[name="id"]').val(data.id);
                $('[name="epf_edit"]').val(data.epf);
                $('[name="name_edit"]').val(data.name);
                $('[name="department_edit"]').val(data.department);
                $('[name="department_edit"]').trigger('change');
                $('#modal-edit').modal('show');
            },
            error: function (jqXHR, textStatus, errorThrown){
                alert('Error get data from ajax');
            }
        });
    }

</script>