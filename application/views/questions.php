<?php if ($this->uri->segment(4) == "Molding") { ?>
<h5>Questions <?php echo $this->uri->segment(4) ?></h5>
    <?php echo form_open('preqco/submit/'.$this->uri->segment(3).'/'.$this->uri->segment(5), array('class' => 'form-horizontal')); ?>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Molding Heads</label>
        <div class="col-sm-5">
            <input type="text" name="input1" class="form-control form-control-sm" placeholder="Molding Heads" value="<?php echo $molding->input1 ?>">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Heat</label>
        <div class="col-sm-5">
            <div class="input-group">
              <input type="text" name="input2" class="form-control form-control-sm" placeholder="Heat" value="<?php echo $molding->input2 ?>">
              <div class="input-group-append">
                <span class="input-group-text form-control-sm">&deg; C</span>
              </div>
            </div>
        </div>
        <div class="col-sm-1"><i class="fas fa-exclamation text-danger"></i></div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Pressure</label>
        <div class="col-sm-5">        
            <div class="input-group">
              <input type="text" name="input3" class="form-control form-control-sm" placeholder="Pressure" value="<?php echo $molding->input3 ?>">
              <div class="input-group-append">
                <span class="input-group-text form-control-sm">bar</span>
              </div>
            </div>
        </div>
        <div class="col-sm-1"><i class="fas fa-exclamation text-danger"></i></div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Cycle Time</label>
        <div class="col-sm-5">        
            <div class="input-group">
              <input type="text" name="input4" class="form-control form-control-sm" placeholder="Cycle Time" value="<?php echo $molding->input4 ?>">
              <div class="input-group-append">
                <span class="input-group-text form-control-sm">second</span>
              </div>
            </div>
        </div>
        <div class="col-sm-1"><i class="fas fa-exclamation text-danger"></i></div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Dwell Time</label>
        <div class="col-sm-5">        
            <div class="input-group">
              <input type="text" name="input5" class="form-control form-control-sm" placeholder="Dwell Time" value="<?php echo $molding->input5 ?>">
              <div class="input-group-append">
                <span class="input-group-text form-control-sm">second</span>
              </div>
            </div>
        </div>
        <div class="col-sm-1"><i class="fas fa-exclamation text-danger"></i></div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Plies per head</label>
        <div class="col-sm-5">
            <input type="text" name="input6" class="form-control form-control-sm" placeholder="Plies per head" value="<?php echo $molding->input6 ?>">
        </div>        
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Head Type</label>
        <div class="col-sm-5">            
            <div class="custom-control custom-radio">
              <input class="custom-control-input" value="1" type="radio" id="radiomolding" name="input7" <?php if($molding->input7=="1"){echo "checked";} ?>>
              <label for="radiomolding" class="custom-control-label">Bullet</label>
            </div>
            <div class="custom-control custom-radio">
              <input class="custom-control-input" value="2" type="radio" id="radiomolding1" name="input7" <?php if($molding->input7=="2"){echo "checked";} ?>>
              <label for="radiomolding1" class="custom-control-label">Tear Drop</label>
            </div>                
          </div>        
    </div>   
    <div class="form-group row">
        <label class="col-sm-5 col-form-label">Stripe & print matching detail available ?</label>
        <div class="col-sm-2 text-right">
            <input type="checkbox" name="input8" data-bootstrap-switch <?php if($molding->input8 == "on"){echo "checked";} ?>>
        </div>        
    </div>    
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Comments</label>
        <div class="col-sm-5">
            <textarea name="input9" class="form-control" placeholder="Comments"><?php echo $molding->input9 ?></textarea>
        </div>        
    </div>
    <div class="form-group row">
        <label class="col-sm-5 col-form-label">Risk Level of this process</label>
        <div class="col-sm-2 text-right">        
            <input type="checkbox" name="risk_level" data-bootstrap-switch data-off-text="LOW" data-off-color="success" data-on-text="HIGH" data-on-color="danger" <?php if($molding->risk_level == "on"){echo "checked";} ?>>        
        </div>        
    </div>
    <div class="form-group row">
        <div class="col-sm-2">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>                
    </div>
    <?php echo form_close(); ?>
<?php }elseif($this->uri->segment(4) == "Laying"){ ?>
<h5>Questions <?php echo $this->uri->segment(4) ?></h5>
    <?php echo form_open('preqco/submit/'.$this->uri->segment(3).'/'.$this->uri->segment(5), array('class' => 'form-horizontal')); ?>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Laying Method</label>
        <div class="col-sm-5">            
            <div class="custom-control custom-radio">
              <input class="custom-control-input" value="1" type="radio" id="customRadio1" name="input1" <?php if($laying->input1=="1"){echo "checked";} ?>>
              <label for="customRadio1" class="custom-control-label">Face to face</label>
            </div>
            <div class="custom-control custom-radio">
              <input class="custom-control-input" value="2" type="radio" id="customRadio2" name="input1" <?php if($laying->input1=="2"){echo "checked";} ?>>
              <label for="customRadio2" class="custom-control-label">Face Up</label>
            </div>                
          </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Number of Plies</label>
        <div class="col-sm-5">
            <input type="number" min="0" class="form-control form-control-sm" name="input2" placeholder="Number of plies" value="<?php echo $laying->input2 ?>">
        </div>        
    </div>    
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">M/C Requirement</label>
        <div class="col-sm-2">
            <input type="checkbox" name="input3" data-bootstrap-switch <?php if($laying->input3 == "on"){echo "checked";} ?>>
        </div>        
    </div>    
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Fabric Shrinkage</label>
        <div class="col-sm-2">
            <input type="checkbox" name="input4" data-bootstrap-switch <?php if($laying->input4 == "on"){echo "checked";} ?>>
        </div>        
    </div>    
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Laying Method</label>
        <div class="col-sm-5">            
            <div class="custom-control custom-radio">
              <input class="custom-control-input" value="1" type="radio" id="customRadio3" name="input5" <?php if($laying->input5=="1"){echo "checked";} ?>>
              <label for="customRadio3" class="custom-control-label">M/C</label>
            </div>
            <div class="custom-control custom-radio">
              <input class="custom-control-input" value="2" type="radio" id="customRadio4" name="input5" <?php if($laying->input5=="2"){echo "checked";} ?>>
              <label for="customRadio4" class="custom-control-label">Manual</label>
            </div>                
        </div>        
    </div>    
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Comments</label>
        <div class="col-sm-5">
            <textarea name="input6" class="form-control" placeholder="Comments"><?php echo $laying->input6 ?></textarea>
        </div>        
    </div>
    <div class="form-group row">
        <label class="col-sm-5 col-form-label">Risk Level of this process</label>
        <div class="col-sm-2 text-right">        
            <input type="checkbox" name="risk_level" data-bootstrap-switch data-off-text="LOW" data-off-color="success" data-on-text="HIGH" data-on-color="danger" <?php if($laying->risk_level == "on"){echo "checked";} ?>>        
        </div>        
    </div>
    <div class="form-group row">
        <div class="col-sm-2">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>                
    </div>
    <?php echo form_close(); ?>
<?php }elseif($this->uri->segment(4) == "Band%20Knife"){ ?>
<h5>Questions <?php echo str_replace('%20', ' ', $this->uri->segment(4)); ?></h5>
    <?php echo form_open('preqco/submit/'.$this->uri->segment(3).'/'.$this->uri->segment(5), array('class' => 'form-horizontal')); ?>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Critical point of Pattern</label>
        <div class="col-sm-5">
            <textarea name="input1" class="form-control" placeholder="Critical point of Pattern"><?php echo $bandknife->input1 ?></textarea>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Fabric Behaviour</label>
        <div class="col-sm-5">
            <textarea name="input2" class="form-control" placeholder="Fabric Behaviour"><?php echo $bandknife->input2 ?></textarea>
        </div>        
    </div>        
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Number of MC</label>
        <div class="col-sm-5">
            <input type="number" min="0" class="form-control" name="input3" placeholder="Number of MC" value="<?php echo $bandknife->input3 ?>">
        </div>        
    </div>        
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Comments</label>
        <div class="col-sm-5">
            <textarea name="input4" class="form-control" placeholder="Comments"><?php echo $bandknife->input4 ?></textarea>
        </div>        
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Risk Level of this process</label>
        <div class="col-sm-2">        
            <input type="checkbox" name="risk_level" data-bootstrap-switch data-off-text="LOW" data-off-color="success" data-on-text="HIGH" data-on-color="danger" <?php echo ($bandknife->risk_level == 'on') ? 'checked' : ''; ?>>        
        </div>        
    </div>
    <div class="form-group row">
        <div class="col-sm-2">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>                
    </div>
    <?php echo form_close(); ?>
<?php }elseif($this->uri->segment(4) == "Assorting"){ ?>
<h5>Questions <?php echo $this->uri->segment(4) ?></h5>
    <?php echo form_open('preqco/submit/'.$this->uri->segment(3).'/'.$this->uri->segment(5), array('class' => 'form-horizontal')); ?>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Bundling Method</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" name="input1" value="<?php echo $assorting->input1 ?>" placeholder="Bundling Method">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">How many shade per bin</label>
        <div class="col-sm-5">
            <input type="number" min="0" class="form-control" name="input2" value="<?php echo $assorting->input2 ?>" placeholder="How many shade per bin">
        </div>        
    </div>        
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Panel numbering requirement</label>
        <div class="col-sm-5">            
            <input type="checkbox" name="input3" data-bootstrap-switch <?php if($assorting->input3 == "on"){echo "checked";} ?>>        
        </div>        
    </div>        
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Comments</label>
        <div class="col-sm-5">
            <textarea name="input4" class="form-control" placeholder="Comments"><?php echo $assorting->input4 ?></textarea>
        </div>        
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Risk Level of this process</label>
        <div class="col-sm-2">        
            <input type="checkbox" name="risk_level" data-bootstrap-switch data-off-text="LOW" data-off-color="success" data-on-text="HIGH" data-on-color="danger" <?php if($assorting->risk_level == "on"){echo "checked";} ?>>        
        </div>        
    </div>
    <div class="form-group row">
        <div class="col-sm-2">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>                
    </div>
    <?php echo form_close(); ?>
<?php }elseif($this->uri->segment(4) == "Auto%20Cutter"){ ?>
<h5>Questions <?php echo str_replace('%20', ' ', $this->uri->segment(4)); ?></h5>
    <?php echo form_open('preqco/submit/'.$this->uri->segment(3).'/'.$this->uri->segment(5), array('class' => 'form-horizontal')); ?>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Number of Plies</label>
        <div class="col-sm-4">
            <input type="number" name="input1" value="<?php echo $autocutter->input1 ?>" min="0" class="form-control form-control-sm" placeholder="Number of plies">
        </div>        
    </div> 
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Fabric Shrinkage</label>
        <div class="col-sm-2">
            <input type="checkbox" name="input2" data-bootstrap-switch <?php echo ($autocutter->input2 == "on") ? 'checked' : ''; ?>>
        </div>        
    </div> 
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Critical point of pattern</label>
        <div class="col-sm-2">            
            <div class="custom-control custom-radio">
              <input class="custom-control-input" value="1" type="radio" id="autocutterradio" name="input3" <?php echo ($autocutter->input3 == '1') ? 'checked' : ''; ?>>
              <label for="autocutterradio" class="custom-control-label">Scallop</label>
            </div>
            <div class="custom-control custom-radio">
              <input class="custom-control-input" value="2" type="radio" id="autocutterradio1" name="input3" <?php echo ($autocutter->input3 == '2') ? 'checked' : ''; ?>>
              <label for="autocutterradio1" class="custom-control-label">V-shape</label>
            </div>                
        </div>        
    </div> 
    
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Comments</label>
        <div class="col-sm-5">
            <textarea name="input4" class="form-control" placeholder="Comments"><?php echo $autocutter->input4 ?></textarea>
        </div>        
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Risk Level of this process</label>
        <div class="col-sm-2">        
            <input type="checkbox" name="risk_level" data-bootstrap-switch data-off-text="LOW" data-off-color="success" data-on-text="HIGH" data-on-color="danger" <?php echo ($autocutter->risk_level == "on") ? 'checked' : ''; ?>>        
        </div>        
    </div>
    <div class="form-group row">
        <div class="col-sm-2">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>                
    </div>
    <?php echo form_close(); ?>
<?php }elseif($this->uri->segment(4) == "Hand%20Cut"){ ?>
<h5>Questions <?php echo str_replace('%20', ' ', $this->uri->segment(4)); ?></h5>
    <?php echo form_open('preqco/submit/'.$this->uri->segment(3).'/'.$this->uri->segment(5), array('class' => 'form-horizontal')); ?>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Critical point of Pattern</label>
        <div class="col-sm-5">
            <textarea name="input1" class="form-control" placeholder="Critical point of Pattern"><?php echo $handcut->input1 ?></textarea>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Fabric Behaviour</label>
        <div class="col-sm-5">
            <textarea name="input2" class="form-control" placeholder="Fabric Behaviour"><?php echo $handcut->input2 ?></textarea>
        </div>        
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Fabric Shrinkage</label>
        <div class="col-sm-2">
            <input type="checkbox" name="input3" data-bootstrap-switch <?php echo ($handcut->input3 == 'on') ? 'checked' : ''; ?>>
        </div>        
    </div>         
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Comments</label>
        <div class="col-sm-5">
            <textarea name="input4" class="form-control" placeholder="Comments"><?php echo $handcut->input4 ?></textarea>
        </div>        
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Risk Level of this process</label>
        <div class="col-sm-2">        
            <input type="checkbox" name="risk_level" data-bootstrap-switch data-off-text="LOW" data-off-color="success" data-on-text="HIGH" data-on-color="danger" <?php echo ($handcut->risk_level == 'on') ? 'checked' : ''; ?>>        
        </div>        
    </div>
    <div class="form-group row">
        <div class="col-sm-2">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>                
    </div>
    <?php echo form_close(); ?>
<?php }elseif($this->uri->segment(4) == "Unloading"){ ?>
<h5>Questions <?php echo $this->uri->segment(4); ?></h5>
    <?php echo form_open('preqco/submit/'.$this->uri->segment(3).'/'.$this->uri->segment(5), array('class' => 'form-horizontal')); ?>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Bra Cup supplier</label>
        <div class="col-sm-5">            
            <div class="custom-control custom-radio">
              <input class="custom-control-input" type="radio"  value="1" id="unloadingradio" name="input1" <?php echo ($unloading->input1 == "1") ? 'checked' : ''; ?>>
              <label for="unloadingradio" class="custom-control-label">Local</label>
            </div>
            <div class="custom-control custom-radio">
              <input class="custom-control-input" type="radio"  value="2" id="unloadingradio1" name="input1" <?php echo ($unloading->input1 == "2") ? 'checked' : ''; ?>>
              <label for="unloadingradio1" class="custom-control-label">Foreign</label>
            </div>                
        </div>
    </div>    
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Fabric Supplier</label>
        <label class="col-sm-1 col-form-label">Local</label>
        <div class="col-sm-3">        
            <div class="input-group">
              <input type="text" name="input2" value="<?php echo $unloading->input2; ?>" class="form-control form-control-sm" placeholder="Capacity">
              <div class="input-group-append">
                <span class="input-group-text form-control-sm">%</span>
              </div>
            </div>
        </div>        
    </div>         
    <div class="form-group row">
        <label class="col-sm-3 col-form-label"></label>
        <label class="col-sm-1 col-form-label">Foreign</label>
        <div class="col-sm-3">        
            <div class="input-group">
              <input type="text" name="input3" value="<?php echo $unloading->input3; ?>" class="form-control form-control-sm" placeholder="Capacity">
              <div class="input-group-append">
                <span class="input-group-text form-control-sm">%</span>
              </div>
            </div>
        </div>        
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Packing Item</label>
        <label class="col-sm-1 col-form-label">Local</label>
        <div class="col-sm-3">        
            <div class="input-group">
              <input type="text" name="input4" value="<?php echo $unloading->input4; ?>" class="form-control form-control-sm" placeholder="Capacity">
              <div class="input-group-append">
                <span class="input-group-text form-control-sm">%</span>
              </div>
            </div>
        </div>        
    </div>         
    <div class="form-group row">
        <label class="col-sm-3 col-form-label"></label>
        <label class="col-sm-1 col-form-label">Foreign</label>
        <div class="col-sm-3">        
            <div class="input-group">
              <input type="text" name="input5" value="<?php echo $unloading->input5; ?>" class="form-control form-control-sm" placeholder="Capacity">
              <div class="input-group-append">
                <span class="input-group-text form-control-sm">%</span>
              </div>
            </div>
        </div>        
    </div>         
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Elastic, wire, ring & shade</label>
        <label class="col-sm-1 col-form-label">Local</label>
        <div class="col-sm-3">        
            <div class="input-group">
              <input type="text" name="input6" value="<?php echo $unloading->input6; ?>" class="form-control form-control-sm" placeholder="Capacity">
              <div class="input-group-append">
                <span class="input-group-text form-control-sm">%</span>
              </div>
            </div>
        </div>        
    </div>         
    <div class="form-group row">
        <label class="col-sm-3 col-form-label"></label>
        <label class="col-sm-1 col-form-label">Foreign</label>
        <div class="col-sm-3">        
            <div class="input-group">
              <input type="text" name="input7" value="<?php echo $unloading->input7; ?>" class="form-control form-control-sm" placeholder="Capacity">
              <div class="input-group-append">
                <span class="input-group-text form-control-sm">%</span>
              </div>
            </div>
        </div>        
    </div>
    <div class="form-group row">
        <label class="col-sm-5 col-form-label">Is there any special attention of material ?</label>
        <div class="col-sm-2">
            <input type="checkbox" name="input8" data-bootstrap-switch <?php echo ($unloading->input8 == "on") ? 'checked' : ''; ?>>
        </div>        
    </div> 
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Comments</label>
        <div class="col-sm-5">
            <textarea name="input9" class="form-control" placeholder="Comments"><?php echo $unloading->input9 ?></textarea>
        </div>        
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Risk Level of this process</label>
        <div class="col-sm-2">        
            <input type="checkbox" name="risk_level" data-bootstrap-switch data-off-text="LOW" data-off-color="success" data-on-text="HIGH" data-on-color="danger" <?php echo ($unloading->risk_level=="on") ? 'checked' : ''; ?>>        
        </div>        
    </div>
    <div class="form-group row">
        <div class="col-sm-2">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>                
    </div>
    <?php echo form_close(); ?>
<?php }elseif($this->uri->segment(4) == "Fabric%20Storage"){ ?>
<h5>Questions <?php echo str_replace('%20', ' ', $this->uri->segment(4)); ?></h5>
    <?php echo form_open('preqco/submit/'.$this->uri->segment(3).'/'.$this->uri->segment(5), array('class' => 'form-horizontal')); ?>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Relaxing requirement ?</label>
        <div class="col-sm-2">
            <input type="checkbox" name="input1" data-bootstrap-switch <?php echo ($fabricstorage->input1=="on") ? 'checked' : '' ; ?>>
        </div>
        <div class="col-sm-2">        
            <div class="input-group">
              <input type="number" min="0" name="input2" class="form-control form-control-sm" placeholder="Hours" value="<?php echo $fabricstorage->input2 ?>">
              <div class="input-group-append">
                <span class="input-group-text form-control-sm">hrs</span>
              </div>
            </div>
        </div> 
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Type of fabric</label>
        <div class="col-sm-4">
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="input3" <?php echo ($fabricstorage->input3=="on") ? 'checked' :'';   ?>>
                <label class="form-check-label" for="exampleCheck1">Foam Fabric</label>
            </div>
             <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck2" name="input4" <?php echo ($fabricstorage->input4=="on") ? 'checked' :'';   ?>>
                <label class="form-check-label" for="exampleCheck2">Lare</label>
            </div>
             <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck3" name="input5" <?php echo ($fabricstorage->input5=="on") ? 'checked' :'';   ?>>
                <label class="form-check-label" for="exampleCheck3">Wing</label>
            </div>
             <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck4" name="input6" <?php echo ($fabricstorage->input6=="on") ? 'checked' :'';   ?>>
                <label class="form-check-label" for="exampleCheck4">Common Fabric</label>
            </div>
        </div>        
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Number of fabric color</label>
        <div class="col-sm-2">
            <input type="number" class="form-control" name="input7" value="<?php echo $fabricstorage->input7 ?>" placeholder="Number">
        </div>        
    </div>        
    <div class="form-group row">
        <label class="col-sm-5 col-form-label">Is there any special treatment of fabric ?</label>
        <div class="col-sm-2">
            <input type="checkbox" name="input8" data-bootstrap-switch <?php echo ($fabricstorage->input8=="on") ? 'checked' : '' ; ?>>
        </div>        
    </div>  
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Comments</label>
        <div class="col-sm-5">
            <textarea name="input9" class="form-control" placeholder="Comments"><?php echo $fabricstorage->input9 ?></textarea>
        </div>        
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Risk Level of this process</label>
        <div class="col-sm-2">        
            <input type="checkbox" name="risk_level" data-bootstrap-switch data-off-text="LOW" data-off-color="success" data-on-text="HIGH" data-on-color="danger" <?php echo ($fabricstorage->risk_level=="on") ? 'checked' : '' ; ?>>        
        </div>        
    </div>
    <div class="form-group row">
        <div class="col-sm-2">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>                
    </div>
    <?php echo form_close(); ?>
<?php }elseif($this->uri->segment(4) == "FG"){ ?>
<h5>Questions <?php echo $this->uri->segment(4); ?></h5>
    <?php echo form_open('preqco/submit/'.$this->uri->segment(3).'/'.$this->uri->segment(5), array('class' => 'form-horizontal')); ?>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label">Is there any special custom requirement?</label>
        <div class="col-sm-2">
            <input type="checkbox" name="input1" data-bootstrap-switch <?php echo ($fg->input1 == "on") ? 'checked' : ''; ?>>
        </div>
        <div class="col-sm-6">
            <textarea name="input2" class="form-control" placeholder="If Yes, Comment"><?php echo $fg->input2 ?></textarea>
        </div> 
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Packing Method</label>
        <div class="col-sm-4">            
            <div class="custom-control custom-radio">
              <input class="custom-control-input" type="radio" value="1" id="fgradio" name="input3" <?php echo ($fg->input3 == "1") ? 'checked' : ''; ?>>
              <label for="fgradio" class="custom-control-label">Ratio Packing 
                <i class="fas fa-exclamation text-danger"></i>
              </label>
            </div>
            <div class="custom-control custom-radio">
              <input class="custom-control-input" type="radio" value="2" id="fgradio1" name="input3" <?php echo ($fg->input3 == "2") ? 'checked' : ''; ?>>
              <label for="fgradio1" class="custom-control-label">Bulk Packing</label>
            </div> 
            <div class="custom-control custom-radio">
              <input class="custom-control-input" type="radio" value="3" id="fgradio2" name="input3" <?php echo ($fg->input3 == "3") ? 'checked' : ''; ?>>
              <label for="fgradio2" class="custom-control-label">PDQ
                <i class="fas fa-exclamation text-danger"></i>                
              </label>
            </div>                
        </div>        
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Carton quantity decided by</label>
        <div class="col-sm-4">            
            <div class="custom-control custom-radio">
              <input class="custom-control-input" value="1"  type="radio" id="fgradio3" name="input4" <?php echo ($fg->input4 == "1") ? 'checked' : ''; ?>>
              <label for="fgradio3" class="custom-control-label">Customer</label>
            </div>
            <div class="custom-control custom-radio">
              <input class="custom-control-input" value="2" type="radio" id="fgradio4" name="input4" <?php echo ($fg->input4 == "2") ? 'checked' : ''; ?>>
              <label for="fgradio4" class="custom-control-label">Plant
                <i class="fas fa-exclamation text-danger"></i>                                
              </label>
            </div>             
        </div>        
    </div>       
    <div class="form-group row">
        <label class="col-sm-4 col-form-label">EDI and ASN 3<sup>rd</sup> party portal availablity ?</label>
        <div class="col-sm-2">
            <input type="checkbox" name="input5" data-bootstrap-switch <?php echo ($fg->input5 == "on") ? 'checked' : ''; ?>>
        </div> 
        <label class="col-sm-2 col-form-label">What system ?</label>
         <div class="col-sm-4">
            <textarea name="input6" class="form-control" placeholder="If Yes, what system ?"><?php echo $fg->input6 ?></textarea>
        </div> 
    </div>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label">Split shipment option available ?</label>
        <div class="col-sm-4">            
            <div class="custom-control custom-radio">
              <input class="custom-control-input" value="1" type="radio" id="fgradio5" name="input7" <?php echo ($fg->input7 == "1") ? 'checked' : ''; ?>>
              <label for="fgradio5" class="custom-control-label">Yes
                <i class="fas fa-exclamation text-danger"></i>                                
              </label>
            </div>
            <div class="custom-control custom-radio">
              <input class="custom-control-input" value="2" type="radio" id="fgradio6" name="input7" <?php echo ($fg->input7 == "2") ? 'checked' : ''; ?>>
              <label for="fgradio6" class="custom-control-label">No</label>
            </div>             
        </div>        
    </div>    
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">PSD - Ex. factory lead time</label>
        <div class="col-sm-4">            
            <div class="custom-control custom-radio">
              <input class="custom-control-input" value="1" type="radio" id="fgradio7" name="input8" <?php echo ($fg->input8 == "1") ? 'checked' : ''; ?>>
              <label for="fgradio7" class="custom-control-label">1 Week</label>
            </div>
            <div class="custom-control custom-radio"> 
              <input class="custom-control-input" value="2" type="radio" id="fgradio8" name="input8" <?php echo ($fg->input8 == "2") ? 'checked' : ''; ?>>
              <label for="fgradio8" class="custom-control-label">2 Week</label>
            </div> 
            <div class="custom-control custom-radio">
              <input class="custom-control-input" value="3" type="radio" id="fgradio9" name="input8" <?php echo ($fg->input8 == "3") ? 'checked' : ''; ?>>
              <label for="fgradio9" class="custom-control-label">3 Week</label>
            </div>    
            <div class="custom-control custom-radio">
              <input class="custom-control-input" value="4" type="radio" id="fgradio10" name="input8" <?php echo ($fg->input8 == "4") ? 'checked' : ''; ?>>
              <label for="fgradio10" class="custom-control-label">More than 1 Month</label>
            </div>                
        </div>        
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Comments</label>
        <div class="col-sm-5">
            <textarea name="input9" class="form-control" placeholder="Comments"><?php echo $fg->input9 ?></textarea>
        </div>        
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Risk Level of this process</label>
        <div class="col-sm-2">        
            <input type="checkbox" name="risk_level" data-bootstrap-switch data-off-text="LOW" data-off-color="success" data-on-text="HIGH" data-on-color="danger" <?php echo ($fg->risk_level == "on") ? 'checked' : ''; ?>>        
        </div>        
    </div>
    <div class="form-group row">
        <div class="col-sm-2">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>                
    </div>
    <?php echo form_close(); ?>
<?php }elseif($this->uri->segment(4) == "C-Tex"){ ?>
<h5>Questions <?php echo $this->uri->segment(4); ?></h5>
    <?php echo form_open('preqco/submit/'.$this->uri->segment(3).'/'.$this->uri->segment(5), array('class' => 'form-horizontal')); ?>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Critical behaviour of</label>
        <label class="col-sm-1 col-form-label"><u>Fabric</u></label>
        <div class="col-sm-4">        
            <input type="text" class="form-control form-control-sm" name="input1" value="<?php echo $ctex->input1 ?>">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label"></label>
        <label class="col-sm-1 col-form-label"><u>Elastic</u></label>
        <div class="col-sm-4">        
            <input type="text" class="form-control form-control-sm" name="input2" value="<?php echo $ctex->input2 ?>">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label"></label>
        <label class="col-sm-1 col-form-label"><u>Trims</u></label>
        <div class="col-sm-4">        
            <input type="text" class="form-control form-control-sm" name="input3" value="<?php echo $ctex->input3 ?>">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Possible defect for</label>
        <label class="col-sm-1 col-form-label"><u>Fabric</u></label>
        <div class="col-sm-5">        
            <textarea class="textarea-summernote" name="input4"><?php echo $ctex->input4 ?></textarea>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label"></label>
        <label class="col-sm-1 col-form-label"><u>Elastic</u></label>
        <div class="col-sm-5">        
            <textarea class="textarea-summernote" name="input5"><?php echo $ctex->input5 ?></textarea>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label"></label>
        <label class="col-sm-1 col-form-label"><u>Trims</u></label>
        <div class="col-sm-5">        
            <textarea class="textarea-summernote" name="input6"><?php echo $ctex->input6 ?></textarea>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">RM Testing Method</label>
        <div class="col-sm-4">        
            <input type="text" class="form-control form-control-sm" name="input7" value="<?php echo $ctex->input7 ?>">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">FG Testing Method</label>
        <div class="col-sm-4">        
            <input type="text" class="form-control form-control-sm" name="input8" value="<?php echo $ctex->input8 ?>">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Need to relax ?</label>
        <div class="col-sm-2">
            <input type="checkbox" data-bootstrap-switch data-on-text="YES" data-off-text="NO" name="input9" <?php echo ($ctex->input9 == "on") ? 'checked' : ''; ?>>
        </div>
        <div class="col-sm-2">        
            <div class="input-group">
              <input type="number" min="0" class="form-control form-control-sm" placeholder="Hours" name="input10" value="<?php echo $ctex->input10 ?>">
              <div class="input-group-append">
                <span class="input-group-text form-control-sm">hrs</span>
              </div>
            </div>
        </div> 
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Can the face & reverse side of fabric can be identified ?</label>
        <div class="col-sm-4">
            <input type="checkbox" data-bootstrap-switch data-on-text="YES" data-off-text="NO" name="input11" <?php echo ($ctex->input11 == "on") ? 'checked' : ''; ?>>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Comments</label>
        <div class="col-sm-5">
            <textarea class="form-control" placeholder="Comments" name="input12"><?php echo $ctex->input12 ?></textarea>
        </div>        
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Risk Level of this process</label>
        <div class="col-sm-2">        
            <input type="checkbox" name="risk_level" data-bootstrap-switch data-off-text="LOW" data-off-color="success" data-on-text="HIGH" data-on-color="danger" <?php echo ($ctex->risk_level == "on") ? 'checked' : ''; ?>>        
        </div>        
    </div>
    <div class="form-group row">
        <div class="col-sm-2">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>                
    </div>
    <?php echo form_close(); ?>
<?php }elseif($this->uri->segment(4) == "AQL%20Cutting"){ ?>
<h5>Questions <?php echo str_replace('%20', ' ', $this->uri->segment(4)); ?></h5>
    <?php echo form_open('preqco/submit/'.$this->uri->segment(3).'/'.$this->uri->segment(5), array('class' => 'form-horizontal')); ?>   
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Checking Percentage</label>
        <div class="col-sm-4">
             <div class="input-group">
              <input type="text" name="input1" class="form-control form-control-sm" placeholder="" value="<?php echo $aqlcut->input1 ?>">
              <div class="input-group-append">
                <span class="input-group-text form-control-sm">%</span>
              </div>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Possible defect on cutwork</label>
        <div class="col-sm-6">        
            <textarea class="textarea-summernote" name="input2"><?php echo $aqlcut->input2 ?></textarea>
        </div>
    </div>
    
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Comments</label>
        <div class="col-sm-5">
            <textarea class="form-control" placeholder="Comments" name="input3"><?php echo $aqlcut->input3 ?></textarea>
        </div>        
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Risk Level of this process</label>
        <div class="col-sm-2">        
            <input type="checkbox" name="risk_level" data-bootstrap-switch data-off-text="LOW" data-off-color="success" data-on-text="HIGH" data-on-color="danger" <?php echo ($aqlcut->risk_level == "on") ? 'checked' : ''; ?>>        
        </div>        
    </div>
    <div class="form-group row">
        <div class="col-sm-2">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>                
    </div>
    <?php echo form_close(); ?>
<?php }elseif($this->uri->segment(4) == "AQL"){ ?>
<h5>Questions <?php echo $this->uri->segment(4); ?></h5>
    <?php echo form_open('preqco/submit/'.$this->uri->segment(3).'/'.$this->uri->segment(5), array('class' => 'form-horizontal')); ?>   
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Checking Percentage</label>
        <div class="col-sm-4">
             <div class="input-group">
              <input type="text" name="input1" class="form-control form-control-sm" placeholder="" value="<?php echo $aql->input1 ?>">
              <div class="input-group-append">
                <span class="input-group-text form-control-sm">%</span>
              </div>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Possible defect</label>
        <div class="col-sm-6">        
            <textarea class="textarea-summernote" name="input2"><?php echo $aql->input2 ?></textarea>
        </div>
    </div>
    
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Comments</label>
        <div class="col-sm-5">
            <textarea class="form-control" placeholder="Comments" name="input3"><?php echo $aql->input3 ?></textarea>
        </div>        
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Risk Level of this process</label>
        <div class="col-sm-2">        
            <input type="checkbox" name="risk_level" data-bootstrap-switch data-off-text="LOW" data-off-color="success" data-on-text="HIGH" data-on-color="danger" <?php echo ($aql->risk_level == "on") ? 'checked' : ''; ?>>        
        </div>        
    </div>
    <div class="form-group row">
        <div class="col-sm-2">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>                
    </div>
    <?php echo form_close(); ?>
<?php }elseif($this->uri->segment(4) == "Sewing"){ ?>
<h5>Questions <?php echo $this->uri->segment(4); ?></h5>
    <?php echo form_open('preqco/submit/'.$this->uri->segment(3).'/'.$this->uri->segment(5), array('class' => 'form-horizontal')); ?>   
    <div class="form-group row">
        <label class="col-sm-4 col-form-label">Need training TM for this style ?</label>
        <div class="col-sm-2">
            <input type="checkbox" data-bootstrap-switch name="input1" <?php echo ($sewing->input1=="on") ? 'checked' : ''; ?>>            
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label">Mention number of TM for 1 Line</label>
        <div class="col-sm-1">Dancing</div>
        <div class="col-sm-2">
            <input type="number" min="0" class="form-control form-control-sm" name="input2" value="<?php echo $sewing->input2 ?>" placeholder="Number">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label"></label>
        <div class="col-sm-1">Seated</div>
        <div class="col-sm-2">
            <input type="number" min="0" class="form-control form-control-sm" name="input3" value="<?php echo $sewing->input3 ?>" placeholder="Number">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label">What are the critical process ?</label>
        <div class="col-sm-6">        
            <textarea class="textarea-summernote" name="input4"><?php echo $sewing->input4 ?></textarea>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label">Any additional (NVA) process ?</label>
        <div class="col-sm-6">        
            <textarea class="textarea-summernote" name="input5"><?php echo $sewing->input5 ?></textarea>
            <i>Example: soldering, cut lace, steam, etc.</i>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label">What are the critical to quality ?</label>
        <div class="col-sm-6">        
            <textarea class="textarea-summernote" name="input6"><?php echo $sewing->input6 ?></textarea>            
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label">Any special requirement on layout ?</label>
        <div class="col-sm-6">        
            <textarea class="textarea-summernote" name="input7"><?php echo $sewing->input7 ?></textarea>            
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label">Packing Method</label>
        <div class="col-sm-6">        
            <input type="text" class="form-control form-control-sm" name="input8" value="<?php echo $sewing->input8 ?>" placeholder="Packing Method">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label">Mention material behaviour that leads to defect or poor process</label>
        <div class="col-sm-6">        
            <textarea class="textarea-summernote" name="input9"><?php echo $sewing->input9 ?></textarea>
            <i>Example: low GSM on nylon leads to snagging</i>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label">What are the critical machine that leads to defect easily ?</label>
        <div class="col-sm-6">        
            <textarea class="textarea-summernote" name="input10"><?php echo $sewing->input10 ?></textarea>            
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label">What machine are critical to set up?</label>
        <div class="col-sm-6">        
            <textarea class="textarea-summernote" name="input11"><?php echo $sewing->input11 ?></textarea>            
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label">Any deskilling process on operation ?</label>
        <div class="col-sm-6">
            <input type="checkbox" data-bootstrap-switch name="input12" <?php echo ($sewing->input12=="on") ? 'checked' : ''; ?>>                        
        </div>
    </div>
     <div class="form-group row">
        <label class="col-sm-4 col-form-label">Is there available machine support ?</label>
        <div class="col-sm-6">
            <input type="checkbox" data-bootstrap-switch name="input13" <?php echo ($sewing->input13=="on") ? 'checked' : ''; ?>>                        
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label">Any additional machine ?</label>
        <div class="col-sm-6">        
            <textarea class="textarea-summernote" name="input14"><?php echo $sewing->input14 ?></textarea>            
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label">Comments</label>
        <div class="col-sm-5">
            <textarea class="form-control" placeholder="Comments" name="input15"><?php echo $sewing->input15 ?></textarea>
        </div>        
    </div>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label">Risk Level of this process</label>
        <div class="col-sm-2">        
            <input type="checkbox" name="risk_level" data-bootstrap-switch data-off-text="LOW" data-off-color="success" data-on-text="HIGH" data-on-color="danger" <?php echo ($sewing->risk_level == "on") ? 'checked' : ''; ?>>        
        </div>        
    </div>
    <div class="form-group row">
        <div class="col-sm-2">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>                
    </div>
    <?php echo form_close(); ?>
<?php } ?>
