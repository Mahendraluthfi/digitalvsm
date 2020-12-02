
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
                                <?php foreach ($getbutton as $datax) { ?>
                                <button type="button" class="btn btn-xs btn-info" onclick="showing('<?php echo $datax->type ?>','<?php echo $data->id ?>')"><?php echo ucfirst(strtolower($datax->type)) ?></button>
                                <?php } ?>
                                <?php if($this->session->userdata('vsm_department') == "MOS"){ ?>
                                <a href="<?php echo base_url('process/overview/'.$data->id) ?>" class="btn btn-xs btn-success">Overview</a>
                                <?php }else{ ?>
                                <a href="<?php echo base_url('process/review/'.$data->id) ?>" class="btn btn-xs btn-success">Overview</a>
                                <?php } ?>
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
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title"></h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="list-group">
                  <!-- <a href="#" class="list-group-item list-group-item-success"></a>                   -->
                </div>
            </div>            
        </div>
    </div>
</div>



<script>
    function showing(type,id) {
        $.ajax({
            url : "<?php echo site_url('index.php/process/get')?>/"+type,
            type: "GET",
            dataType: "JSON",
            success: function(data){
                // console.log(id);   
                var html = '';
                var i;                
                for(i=0; i<data.length; i++){   
                    html += '<a href="<?php echo base_url('process/view/') ?>'+data[i].id+'/'+id+'" class="list-group-item list-group-item-success">'+
                        data[i].point_name+
                        '</a>';                                    
                }
                $('.list-group').html(html);                     
                $('.modal-title').text(type);
                $('#modal-default').modal('show');
            },
            error: function (jqXHR, textStatus, errorThrown){
                alert('Error get data from ajax');
            }
        });
    }
</script>