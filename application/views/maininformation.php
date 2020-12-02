
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
                                <button type="button" class="btn btn-xs btn-success" onclick="get('<?php echo $data->id ?>')"><i class="fas fa-edit"></i></button>
                                <a href="<?php echo base_url('main/delete/'.$data->id) ?>" class="btn btn-xs btn-danger" onclick="return confirm('Are you sure ?')"><i class="fas fa-trash"></i></a>                            
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
                <form id="form">
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
                            <option value="Panty">Panty</option>
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
                        <input type="text" class="form-control form-control-sm" name="cons" placeholder="Consumption per Pcs">
                    </div>
                </div> 
                 <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Cust Demand</label>
                    <div class="col-sm-9">
                      <div class="input-group input-group-sm">
                          <input type="number" min="0" name="cust_demand" onfocusout="taktime()" class="form-control form-control-sm">
                          <div class="input-group-append">
                            <span class="input-group-text">/ Day</span>
                          </div>
                        </div>
                    </div>
                </div> 
                 <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Available Time</label>
                    <div class="col-sm-9">
                        <input type="text" readonly="" value="56880 second" class="form-control form-control-sm" name="at" placeholder="Available Time">
                    </div>
                </div> 
                 <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Takt Time</label>
                    <div class="col-sm-9">
                        <input type="text" readonly="" class="form-control form-control-sm" name="takttime" placeholder="Takt Time">
                    </div>
                </div> 
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">PSD</label>
                    <div class="col-sm-9">
                      <input type="date" class="form-control form-control-sm"  name="psd">
                    </div>
                </div>                            
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">PED</label>
                    <div class="col-sm-9">
                      <input type="date" class="form-control form-control-sm"  name="ped">
                    </div>
                </div>                            
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>



<script>
    function taktime() {
       var sub1 = $('[name="cust_demand"]').val();        
        var hasil = 56880 / sub1;
        $('[name="takttime"]').val(parseFloat(hasil).toFixed(2));  
    }

    var save_method; 
    var table;
    var gid;
    function add()
    {
      save_method = 'add';
      $('.modal-title').text('Add Main Information'); // Set title to Bootstrap modal title      
      $('#form')[0].reset(); // reset form on modals
      $('#modal-default').modal('show'); // show bootstrap modal      

    }

    function get(id)
    {
      save_method = 'update';
      gid = id;
      $('#form')[0].reset(); // reset form on modals

      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('index.php/main/get')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
            // $('#kabkot').trigger('change');  
            $('[name="style"]').val(data.style_no);            
            $('[name="product"]').val(data.product);            
            $('[name="product"]').trigger('change');            
            $('[name="customer"]').val(data.customer);            
            $('[name="cons"]').val(data.cons);            
            $('[name="cust_demand"]').val(data.cust_demand);            
            $('[name="takttime"]').val(data.takttime);            
            $('[name="psd"]').val(data.psd);            
            $('[name="ped"]').val(data.ped);            
            $('#modal-default').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Main Information'); // Set title to Bootstrap modal title

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
      });
    }

    function save(){
      var url;      
      if(save_method == 'add'){
          url = "<?php echo site_url('index.php/main/add')?>";          
      }else{          
          url = "<?php echo site_url('index.php/main/edit/')?>" + gid;         
      }    
       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#form').serialize(),
            dataType: "JSON",
            success: function(data)
            {
               //if success close modal and reload ajax table
               $('#modal-default').modal('hide');
               location.reload();// for reload a page
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');
            }
        });
      }    

</script>