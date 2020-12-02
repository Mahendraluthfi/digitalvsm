
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
                      <i class="fas fa-map"></i>
                      Set VSM Map Default Embed
                    </h3>                
                </div>                
              </div>
              <div class="card-body">
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <?php echo $get->embed ?>
                    </div>
                    <div class="col-md-4 col-lg-4">
                    <?php echo form_open('rules/sub_embed'); ?>
                        <textarea name="embed" class="form-control" id="myinput" rows="10"><?php echo $get->embed ?></textarea>
                    </div>    
                    <div class="col-md-2 col-lg-2">
                        <button type="button" onclick="myFunction()" class="btn btn-success"><i class="fa fa-copy"></i> Copy</button><p></p>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Update</button>
                    </div>
                    <?php echo form_close(); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>    


<script>

function myFunction() {
  var copyText = document.getElementById("myinput");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Copied");
}
</script>