
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
              <li class="breadcrumb-item"><a href="<?php echo base_url('users') ?>">Users</a></li>
              <li class="breadcrumb-item active">Item</li>
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
                      <i class="fas fa-info-circle"></i>
                      Data Information Item
                    </h3>                
                </div>                
              </div>
            </div>
          </div>            
        </div>
        <div class="row">
            <div class="col-md-4 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <form class="form-inline" action="<?php echo base_url('users/add_item'); ?>" method="post">
                            <label class="sr-only" for="inlineFormInputName2">Item</label>
                            <input type="text" name="item" class="form-control form-control-sm mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Item">
                            <button type="submit" class="btn btn-primary btn-sm mb-2">Save</button>
                        </form>
                        <table class="table table-condensed table-sm" id="example">
                            <thead>
                                <tr>                                      
                                    <th>Item</th>
                                    <th width="1%">#</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($get as $data) { ?>
                                <tr>
                                    <td><?php echo $data->item ?></td>
                                    <td>
                                        <a href="<?php echo base_url('users/del_item/'.$data->id_item) ?>" class="btn btn-xs btn-danger"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                               <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>   
            </div>
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h6>Department's item</h6>
                        <div class="row">
                            <div class="col-md-4 col-lg-4">
                                <?php echo form_open('users/item_has', array('class' => 'frminfo')); ?>                                                          
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Department</label>                                    
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
                                        </select>                                           
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Item</label>                                    
                                        <select name="item" class="form-control select2" required="">
                                            <option value="">Choose</option>
                                            <?php foreach ($get as $data) { ?>
                                                <option value="<?php echo $data->item ?>"><?php echo $data->item ?></option>
                                            <?php } ?>
                                        </select>                                           
                                  </div>
                                  <button type="submit" class="btn btn-primary btn-save">Save</button>
                                  <p>
                                    <br>
                                    <i>* Each Departments have to add entity/item that they have concern in process which not involved to this system</i>                                      
                                  </p>
                                <?php echo form_close(); ?>
                            </div>
                            <div class="col-md-8 col-lg-8">
                                <table class="table table-bordered table-sm" id="example3">
                                    <thead>
                                        <tr>
                                            <th>Department</th>
                                            <th>Item</th>
                                            <th>#</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($get2 as $data) { ?>
                                        <tr class="bg-light">
                                            <td colspan="2"><?php echo $data->dpt ?></td>
                                            <td></td>
                                        </tr>
                                        <?php foreach ($data->arrayitem as $get) { ?>
                                        <tr>
                                            <td></td>
                                            <td><?php echo $get->item ?></td>
                                            <td>
                                                <a href="<?php echo base_url('users/del_have_item/'.$get->id) ?>" class="btn btn-xs btn-danger"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <?php } ?>
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
