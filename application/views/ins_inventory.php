<div class="row">
    <div class="col-md-8 col-lg-8">          
        <table class="table table-condensed table-sm">
            <thead>
                <tr class="bg-secondary">
                    <th width="1%">#</th>
                    <th>Data Element</th>
                    <th>Instructions</th>                                      
                </tr>
            </thead>
            <tbody>
              <?php echo form_open('rules/save_ins_inventory'); ?>                   
                <tr>
                    <td>1</td>
                    <td>Total Inventory  observed</td>
                    <td>
                      <textarea name="input1" class="form-control form-control-sm" placeholder="Type Here"><?php echo $get_pro->input1 ?></textarea>
                      <input type="hidden" name="id" value="<?php echo $get_pro->id ?>">
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Volume % out of selected family</td>
                    <td>
                      <textarea name="input2" class="form-control form-control-sm" placeholder="Type Here"><?php echo $get_pro->input2 ?></textarea>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Precise Inventory representing the family</td>
                    <td>
                      <textarea name="input3" class="form-control form-control-sm" placeholder="Type Here"><?php echo $get_pro->input3 ?></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="bg-secondary"></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Avg consumption of the product</td>
                    <td>
                      <textarea name="input4" class="form-control form-control-sm" placeholder="Type Here"><?php echo $get_pro->input4 ?></textarea>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Actual Inventory in Garment form</td>
                    <td>
                      <textarea name="input5" class="form-control form-control-sm" placeholder="Type Here"><?php echo $get_pro->input5 ?></textarea>
                    </td>
                </tr>
                 <tr>
                    <td>6</td>
                    <td>No of Parellel inventory points</td>
                    <td>
                      <textarea name="input6" class="form-control form-control-sm" placeholder="Type Here"><?php echo $get_pro->input6 ?></textarea>
                    </td>
                </tr>                                  
                <tr>
                    <td>7</td>
                    <td>Total Inventory across the plant</td>
                    <td>
                      <textarea name="input7" class="form-control form-control-sm" placeholder="Type Here"><?php echo $get_pro->input7 ?></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="bg-secondary"></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Day production output in selected family</td>
                    <td>
                      <textarea name="input8" class="form-control form-control-sm" placeholder="Type Here"><?php echo $get_pro->input8 ?></textarea>
                    </td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Total Inventory in Days</td>
                    <td>
                      <textarea name="input9" class="form-control form-control-sm" placeholder="Type Here"><?php echo $get_pro->input9 ?></textarea>
                    </td>
                </tr>                                  
            </tbody>
        </table>
    </div>
     <div class="col-md-4">
    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save Instructions</button>
    <a href="<?php echo base_url('rules') ?>" class="btn btn-success"><i class="fas fa-chevron-left"></i> Back</a>
  </div>
  <?php echo form_close(); ?>
</div>