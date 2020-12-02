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
        <?php echo form_open('rules/save_ins_process'); ?>     
            <tr>
                <td>1</td>
                <td>Process type</td>
                <td>
                  <textarea name="input1" class="form-control form-control-sm" placeholder="Type Here"><?php echo $get_pro->input1 ?></textarea>
                  <input type="hidden" name="id" value="<?php echo $get_pro->id ?>">
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>No of Cycles observed</td>
                <td>
                  <textarea name="input2" class="form-control form-control-sm" placeholder="Type Here"><?php echo $get_pro->input2 ?></textarea>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Observed time in Sec (Sum of Few full cycles)</td>
                <td>
                  <textarea name="input3" class="form-control form-control-sm" placeholder="Type Here"><?php echo $get_pro->input3 ?></textarea>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>Total Cycle Time (Avg Time)</td>
                <td>
                  <textarea name="input4" class="form-control form-control-sm" placeholder="Type Here"><?php echo $get_pro->input4 ?></textarea>
                </td>
            </tr>
            <tr>
                <td>5</td>
                <td>No of Pcs Produced (Full Garments)</td>
                <td>
                  <textarea name="input5" class="form-control form-control-sm" placeholder="Type Here"><?php echo $get_pro->input5 ?></textarea>
                </td>
            </tr>
             <tr>
                <td>6</td>
                <td>Process Rate/Beat(Process Takt)</td>
                <td>
                  <textarea name="input6" class="form-control form-control-sm" placeholder="Type Here"><?php echo $get_pro->input6 ?></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="3" class="bg-secondary"></td>
            </tr>
            <tr>
                <td>7</td>
                <td>No of Parallel processes</td>
                <td>
                  <textarea name="input7" class="form-control form-control-sm" placeholder="Type Here"><?php echo $get_pro->input7 ?></textarea>
                </td>
            </tr>
            <tr>
                <td>8</td>
                <td>Overall Process Rate/Beat (Full Takt)</td>
                <td>
                  <textarea name="input8" class="form-control form-control-sm" placeholder="Type Here"><?php echo $get_pro->input8 ?></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="3" class="bg-secondary"></td>
            </tr>
            <tr>
                <td>7</td>
                <td>Down time % (Out of TT clock hrs.)</td>
                <td>
                  <textarea name="input9" class="form-control form-control-sm" placeholder="Type Here"><?php echo $get_pro->input9 ?></textarea>
                </td>
            </tr>
            <tr>
                <td>8</td>
                <td>FTT % (First time through)</td>
                <td>
                  <textarea name="input10" class="form-control form-control-sm" placeholder="Type Here"><?php echo $get_pro->input10 ?></textarea>
                </td>
            </tr>
            <tr>
                <td>9</td>
                <td>QCO Down time %(out of TT clock hrs.)</td>
                <td>
                  <textarea name="input11" class="form-control form-control-sm" placeholder="Type Here"><?php echo $get_pro->input11 ?></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="3" class="bg-secondary"></td>
            </tr>
            <tr>
                <td>10</td>
                <td>Total No. of Team members allocated</td>
                <td>
                  <textarea name="input12" class="form-control form-control-sm" placeholder="Type Here"><?php echo $get_pro->input12 ?></textarea>
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