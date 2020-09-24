
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Main Information</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Dashboard</a></li>
              <li class="breadcrumb-item active">Main Information</li>
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
                      Main Information
                    </h3>                
                </div>
                <div class="float-right">
                    <button type="button" class="btn btn-primary btn-xs" onclick="add()"><i class="fas fa-plus"></i> Add</button>
                </div>
              </div>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped table-sm">
                  <thead>
                      <tr>
                        <th width="1%">No</th>
                        <th>Style Number</th>
                        <th>Product/Customer</th>
                        <th>Consumption/pcs</th>
                        <th>Takt Time</th>
                        <th>Customer Demand</th>
                        <th>Available Time</th>
                        <th>#</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php $no=1; foreach ($get as $data) { ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $data->style_no ?></td>
                            <td><?php echo $data->product.'/'.$data->customer ?></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>                            
                                <button type="button" class="btn btn-xs btn-success" onclick="get('<?php echo $data->id ?>')"><i class="fas fa-edit"></i></button>
                                <a href="<?php echo base_url('users/delete/'.$data->id) ?>" class="btn btn-xs btn-danger" onclick="return confirm('Are you sure ?')"><i class="fas fa-trash"></i></a>                            
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
                <h4 class="modal-title">Add Main Information</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open('main/add'); ?>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Style Number</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control form-control-sm" name="style" placeholder="Style Number" required="">
                    </div>
                </div>                            
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Product</label>
                    <div class="col-sm-9">
                        <select name="product" class="form-control select2">
                            <option value="Bra">Bra</option>
                            <option value="Brief/Panty">Brief/Panty</option>
                            <option value="Apparel">Apparel</option>
                        </select>
                    </div>
                </div>                            
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Customer</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control form-control-sm" name="customer" placeholder="Customer Name">
                    </div>
                </div> 
                 <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Cons./pcs</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control form-control-sm" name="cpp" placeholder="Consumption per Pcs">
                    </div>
                </div> 
                 <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Takt Time</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control form-control-sm" name="takttime" placeholder="Takt Time">
                    </div>
                </div> 
                 <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Cust. on Demand</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control form-control-sm" name="cod" placeholder="Customer on Demand">
                    </div>
                </div> 
                 <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Available Time</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control form-control-sm" name="at" placeholder="Available Time">
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
</script>