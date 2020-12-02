<div class="row">
    <div class="col-md-1 col-lg-1"></div>
    <div class="col-md-5 col-lg-5">
      <div class="alert alert-light">
        <?php echo form_open('rules/save_ins_exim'); ?>     
          <div class="form-group row">
              <label class="label col-4">Sea</label>
              <div class="col-8">Instructions</div>
          </div>
          <hr class="bg-secondary">          
          <div class="form-group row">
              <label class="label col-4">Total Cost</label>
              <div class="col-8"><textarea name="sea2" class="form-control form-control-sm" placeholder="Type Here"><?php echo $get_pro->sea2 ?></textarea></div>
          </div>
          <div class="form-group row">
              <label class="label col-4">Lead Time</label>
              <div class="col-8"><textarea name="sea3" class="form-control form-control-sm" placeholder="Type Here"><?php echo $get_pro->sea3 ?></textarea></div>
          </div>
          <div class="form-group row">
              <label class="label col-4">Frequency</label>
              <div class="col-8"><textarea name="sea4" class="form-control form-control-sm" placeholder="Type Here"><?php echo $get_pro->sea4 ?></textarea></div>
          </div>
      </div>
    </div>
    <div class="col-md-5 col-lg-5">
      <div class="alert alert-light">
          <div class="form-group row">
              <label class="label col-4">Air</label>
              <div class="col-8">Instructions</div>
          </div>
          <hr class="bg-secondary">          
          <div class="form-group row">
              <label class="label col-4">Total Cost</label>
              <div class="col-8"><textarea name="air2" class="form-control form-control-sm" placeholder="Type Here"><?php echo $get_pro->air2 ?></textarea></div>
          </div>
          <div class="form-group row">
              <label class="label col-4">Lead Time</label>
              <div class="col-8"><textarea name="air3" class="form-control form-control-sm" placeholder="Type Here"><?php echo $get_pro->air3 ?></textarea></div>
          </div>
          <div class="form-group row">
              <label class="label col-4">Frequency</label>
              <div class="col-8"><textarea name="air4" class="form-control form-control-sm" placeholder="Type Here"><?php echo $get_pro->air4 ?></textarea></div>
          </div>
      </div>
    </div>
    <div class="col-md-1 col-lg-1"></div>
</div>
<button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save Instructions</button>
<a href="<?php echo base_url('rules') ?>" class="btn btn-success"><i class="fas fa-chevron-left"></i> Back</a>
<?php echo form_close(); ?>