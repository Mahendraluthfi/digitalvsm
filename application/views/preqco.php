
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
              <li class="breadcrumb-item active">Process & Inventory</li>
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
                      Process & Inventory
                    </h3>                
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
                        <th>PSD</th>                        
                        <th>PED</th>                        
                        <th>#</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php $no=1; foreach ($get as $data) { ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $data->style_no ?></td>
                            <td><?php echo $data->product.' / '.$data->customer ?></td>
                            <td><?php echo $data->cons ?></td>
                            <td><?php echo $data->takttime ?></td>
                            <td><?php echo $data->cust_demand ?></td>
                            <td><?php echo date('d-M-Y', strtotime($data->psd)) ?></td>
                            <td><?php echo date('d-M-Y', strtotime($data->ped)) ?></td>
                            <td>
                            <a href="<?php echo base_url('preqco/question/'.$data->id) ?>" class="btn btn-success btn-sm"><i class="fa fa-chevron-right"></i> Enter</a>
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


