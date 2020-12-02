
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard MAS Sumbiri Digital Values Stream Map</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Dashboard</li>
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
          <div class="col-12">
            <h5>Hi, <?php echo $this->session->userdata('vsm_name'); ?></h5><hr>            
          </div>
        </div>
        <div class="row">
          <div class="col-12">

          <?php echo form_open('welcome/get', array('class' => 'form-inline')); ?>
            <div class="form-group mx-sm-3 mb-2">
              <label for="inputPassword2" class="sr-only">Style</label>
              <select name="style" class="form-control select2" required="">
                <?php foreach ($get as $data) { ?>
                <option value="<?php echo $data->id ?>"><?php echo $data->style_no ?></option>
                <?php } ?>
              </select>
            </div>
            <button type="submit" class="btn btn-primary btn-sm mb-2">View</button>
          </form>
        </div>
      </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  