<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Overview Digital VSM</title>
  <link rel="icon" href="<?php echo base_url('dist/img/icon.png') ?>">      
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>plugins/fontawesome-free/css/all.min.css">  
  
</head>
<body>
  <style>
    body {
      /*padding-top: 5rem;*/
    }    
    .table-sm td, .table-sm th {
        padding: .1rem;
        }
.btn{
  padding: 0px;
}

.col{
  padding:0px;
  font-size: 11px;
}

.singleup{
width: auto;
height: 30px;
border-bottom: 1px solid black;
border-right: 1px solid black;
border-left: 1px solid black;
}

 .singleupleft{
width: auto;
height: 30px;
border-bottom: 1px solid black;
border-left: 1px solid black;
}

 .singleupright{
width: auto;
height: 30px;
border-bottom: 1px solid black;
border-right: 1px solid black;
}

 .bordertop{
  padding-top: 15px;
width: auto;
height: 30px;
border-top: 1px solid black;

}
.navbar-brand
    {
        margin-left: 41%;
    }
.form-group{
    padding: 0px;
    margin: 0px;
}

.alert{
    padding: 3px;
}


  </style>
   <nav class="navbar navbar-expand-md navbar-light bg-light">
      <a class="navbar-brand" href="#">
      <img src="<?php echo base_url() ?>dist/img/icon.png" alt="AdminLTE Logo" height="35">
      MAS Sumbiri Digital VSM</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <!-- <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
        </ul> -->
      </div>
    </nav>

    <main role="main" class="container-fluid">
      <div class="row">
        <div class="col-12 text-center">
          <h6>MAS Sumbiri Value Stream Map 2020</h6>
          <h6>Style <?php echo $main->style_no ?></h6>
        </div>
      </div>
      <div class="row">
        <!-- <div class="col-md-1 col-lg-1" style="padding: 0px;">
            <div class="card">
              <div class="card-body bg-light">
                This is some text within a card body.
              </div>
            </div>
        </div> -->
           <!--  <?php if (!empty($main->image)): ?>            
            <img src="<?php echo base_url('dist/img/visual/'.$main->image) ?>" alt="" style="width: 100%;">
            <?php endif ?> -->
        <div class="col-lg-12 text-center" style="padding: 1px;">
          <?php echo $main->embed ?>
        </div>
        <!-- <div class="col-md-1 col-lg-1" style="padding: 0px;">
            <div class="card">
              <div class="card-body bg-light">
                This is some text within a card body.
              </div>
            </div>
        </div> -->
      </div><br>
        <div class="row">
            <div class="col">
                <table class="table table-bordered table-sm">                
                        <tr>
                            <td>Process Name: <b><?php echo $field2->point_name; ?></b></td>
                        </tr>
                        <tr>
                            <td>Process type: <b><?php echo $field2->input1 ?></b></td>
                        </tr>                    
                        <tr>
                            <td>Process cycle time: <b><?php echo $field2->input4 ?></b></td>
                        </tr>
                        <tr>
                            <td>#Garment produced: <b><?php echo $field2->input5 ?></b></td>
                        </tr>
                        <tr>
                            <td>Process Takt: <b><?php echo $field2->input6 ?></b></td>
                        </tr>                 
                        <tr>
                            <td>#Parallel process: <b><?php echo $field2->input7 ?></b></td>
                        </tr>
                        <tr <?php if ($main->takttime < $field2->input8) {echo 'class="bg-danger text-white"';} ?> >
                            <td>Overall process takt: <b><?php echo $field2->input8 ?></b></td>
                        </tr>
                        <tr>
                            <td>Downtime: <b><?php echo $field2->input9 ?></b>%</td>
                        </tr>              
                        <tr>
                            <td>FTT: <b><?php echo $field2->input10 ?></b>%</td>
                        </tr>     
                        <tr>
                            <td>QCO Downtime: <b><?php echo $field2->input11 ?></b>%</td>
                        </tr>
                        <tr>
                            <td>Total TM: <b><?php echo $field2->input12 ?></b></td>
                        </tr>
                </table>
            </div>        
            <div class="col">
                <table class="table table-bordered table-sm">                
                        <tr>
                            <td>Process Name: <b><?php echo $field4->point_name; ?></b></td>
                        </tr>
                        <tr>
                            <td>Process type: <b><?php echo $field4->input1 ?></b></td>
                        </tr>                    
                        <tr>
                            <td>Process cycle time: <b><?php echo $field4->input4 ?></b></td>
                        </tr>
                        <tr>
                            <td>#Garment produced: <b><?php echo $field4->input5 ?></b></td>
                        </tr>
                        <tr>
                            <td>Process Takt: <b><?php echo $field4->input6 ?></b></td>
                        </tr>                 
                        <tr>
                            <td>#Parallel process: <b><?php echo $field4->input7 ?></b></td>
                        </tr>
                        <tr <?php if ($main->takttime < $field4->input8) {echo 'class="bg-danger text-white"';} ?> >
                            <td>Overall process takt: <b><?php echo $field4->input8 ?></b></td>
                        </tr>
                        <tr>
                            <td>Downtime: <b><?php echo $field4->input9 ?></b>%</td>
                        </tr>              
                        <tr>
                            <td>FTT: <b><?php echo $field4->input10 ?></b>%</td>
                        </tr>     
                        <tr>
                            <td>QCO Downtime: <b><?php echo $field4->input11 ?></b>%</td>
                        </tr>
                        <tr>
                            <td>Total TM: <b><?php echo $field4->input12 ?></b></td>
                        </tr>
                </table>
            </div>        
            <div class="col">
                <table class="table table-bordered table-sm">                
                        <tr>
                            <td>Process Name: <b><?php echo $field7->point_name; ?></b></td>
                        </tr>
                        <tr>
                            <td>Process type: <b><?php echo $field7->input1 ?></b></td>
                        </tr>                    
                        <tr>
                            <td>Process cycle time: <b><?php echo $field7->input4 ?></b></td>
                        </tr>
                        <tr>
                            <td>#Garment produced: <b><?php echo $field7->input5 ?></b></td>
                        </tr>
                        <tr>
                            <td>Process Takt: <b><?php echo $field7->input6 ?></b></td>
                        </tr>                 
                        <tr>
                            <td>#Parallel process: <b><?php echo $field7->input7 ?></b></td>
                        </tr>
                        <tr <?php if ($main->takttime < $field7->input8) {echo 'class="bg-danger text-white"';} ?> >
                            <td>Overall process takt: <b><?php echo $field7->input8 ?></b></td>
                        </tr>
                        <tr>
                            <td>Downtime: <b><?php echo $field7->input9 ?></b>%</td>
                        </tr>              
                        <tr>
                            <td>FTT: <b><?php echo $field7->input10 ?></b>%</td>
                        </tr>     
                        <tr>
                            <td>QCO Downtime: <b><?php echo $field7->input11 ?></b>%</td>
                        </tr>
                        <tr>
                            <td>Total TM: <b><?php echo $field7->input12 ?></b></td>
                        </tr>
                </table>
            </div>        
            <div class="col">
                <table class="table table-bordered table-sm">                
                        <tr>
                            <td>Process Name: <b><?php echo $field9->point_name; ?></b></td>
                        </tr>
                        <tr>
                            <td>Process type: <b><?php echo $field9->input1 ?></b></td>
                        </tr>                    
                        <tr>
                            <td>Process cycle time: <b><?php echo $field9->input4 ?></b></td>
                        </tr>
                        <tr>
                            <td>#Garment produced: <b><?php echo $field9->input5 ?></b></td>
                        </tr>
                        <tr>
                            <td>Process Takt: <b><?php echo $field9->input6 ?></b></td>
                        </tr>                 
                        <tr>
                            <td>#Parallel process: <b><?php echo $field9->input7 ?></b></td>
                        </tr>
                        <tr <?php if ($main->takttime < $field9->input8) {echo 'class="bg-danger text-white"';} ?> >
                            <td>Overall process takt: <b><?php echo $field9->input8 ?></b></td>
                        </tr>
                        <tr>
                            <td>Downtime: <b><?php echo $field9->input9 ?></b>%</td>
                        </tr>              
                        <tr>
                            <td>FTT: <b><?php echo $field9->input10 ?></b>%</td>
                        </tr>     
                        <tr>
                            <td>QCO Downtime: <b><?php echo $field9->input11 ?></b>%</td>
                        </tr>
                        <tr>
                            <td>Total TM: <b><?php echo $field9->input12 ?></b></td>
                        </tr>
                </table>
            </div>        
            <div class="col">
                <table class="table table-bordered table-sm">                
                        <tr>
                            <td>Process Name: <b><?php echo $field11->point_name; ?></b></td>
                        </tr>
                        <tr>
                            <td>Process type: <b><?php echo $field11->input1 ?></b></td>
                        </tr>                    
                        <tr>
                            <td>Process cycle time: <b><?php echo $field11->input4 ?></b></td>
                        </tr>
                        <tr>
                            <td>#Garment produced: <b><?php echo $field11->input5 ?></b></td>
                        </tr>
                        <tr>
                            <td>Process Takt: <b><?php echo $field11->input6 ?></b></td>
                        </tr>                 
                        <tr>
                            <td>#Parallel process: <b><?php echo $field11->input7 ?></b></td>
                        </tr>
                        <tr <?php if ($main->takttime < $field11->input8) {echo 'class="bg-danger text-white"';} ?> >
                            <td>Overall process takt: <b><?php echo $field11->input8 ?></b></td>
                        </tr>
                        <tr>
                            <td>Downtime: <b><?php echo $field11->input9 ?></b>%</td>
                        </tr>              
                        <tr>
                            <td>FTT: <b><?php echo $field11->input10 ?></b>%</td>
                        </tr>     
                        <tr>
                            <td>QCO Downtime: <b><?php echo $field11->input11 ?></b>%</td>
                        </tr>
                        <tr>
                            <td>Total TM: <b><?php echo $field11->input12 ?></b></td>
                        </tr>
                </table>
            </div>        
            <div class="col">
                <table class="table table-bordered table-sm">                
                        <tr>
                            <td>Process Name: <b><?php echo $field13->point_name; ?></b></td>
                        </tr>
                        <tr>
                            <td>Process type: <b><?php echo $field13->input1 ?></b></td>
                        </tr>                    
                        <tr>
                            <td>Process cycle time: <b><?php echo $field13->input4 ?></b></td>
                        </tr>
                        <tr>
                            <td>#Garment produced: <b><?php echo $field13->input5 ?></b></td>
                        </tr>
                        <tr>
                            <td>Process Takt: <b><?php echo $field13->input6 ?></b></td>
                        </tr>                 
                        <tr>
                            <td>#Parallel process: <b><?php echo $field13->input7 ?></b></td>
                        </tr>
                        <tr <?php if ($main->takttime < $field13->input8) {echo 'class="bg-danger text-white"';} ?> >
                            <td>Overall process takt: <b><?php echo $field13->input8 ?></b></td>
                        </tr>
                        <tr>
                            <td>Downtime: <b><?php echo $field13->input9 ?></b>%</td>
                        </tr>              
                        <tr>
                            <td>FTT: <b><?php echo $field13->input10 ?></b>%</td>
                        </tr>     
                        <tr>
                            <td>QCO Downtime: <b><?php echo $field13->input11 ?></b>%</td>
                        </tr>
                        <tr>
                            <td>Total TM: <b><?php echo $field13->input12 ?></b></td>
                        </tr>
                </table>
            </div>        
            <div class="col">
                <table class="table table-bordered table-sm">                
                        <tr>
                            <td>Process Name: <b><?php echo $field15->point_name; ?></b></td>
                        </tr>
                        <tr>
                            <td>Process type: <b><?php echo $field15->input1 ?></b></td>
                        </tr>                    
                        <tr>
                            <td>Process cycle time: <b><?php echo $field15->input4 ?></b></td>
                        </tr>
                        <tr>
                            <td>#Garment produced: <b><?php echo $field15->input5 ?></b></td>
                        </tr>
                        <tr>
                            <td>Process Takt: <b><?php echo $field15->input6 ?></b></td>
                        </tr>                 
                        <tr>
                            <td>#Parallel process: <b><?php echo $field15->input7 ?></b></td>
                        </tr>
                        <tr <?php if ($main->takttime < $field15->input8) {echo 'class="bg-danger text-white"';} ?> >
                            <td>Overall process takt: <b><?php echo $field15->input8 ?></b></td>
                        </tr>
                        <tr>
                            <td>Downtime: <b><?php echo $field15->input9 ?></b>%</td>
                        </tr>              
                        <tr>
                            <td>FTT: <b><?php echo $field15->input10 ?></b>%</td>
                        </tr>     
                        <tr>
                            <td>QCO Downtime: <b><?php echo $field15->input11 ?></b>%</td>
                        </tr>
                        <tr>
                            <td>Total TM: <b><?php echo $field15->input12 ?></b></td>
                        </tr>
                </table>
            </div>        
            <div class="col">
                <table class="table table-bordered table-sm">                
                        <tr>
                            <td>Process Name: <b><?php echo $field17->point_name; ?></b></td>
                        </tr>
                        <tr>
                            <td>Process type: <b><?php echo $field17->input1 ?></b></td>
                        </tr>                    
                        <tr>
                            <td>Process cycle time: <b><?php echo $field17->input4 ?></b></td>
                        </tr>
                        <tr>
                            <td>#Garment produced: <b><?php echo $field17->input5 ?></b></td>
                        </tr>
                        <tr>
                            <td>Process Takt: <b><?php echo $field17->input6 ?></b></td>
                        </tr>                 
                        <tr>
                            <td>#Parallel process: <b><?php echo $field17->input7 ?></b></td>
                        </tr>
                        <tr <?php if ($main->takttime < $field17->input8) {echo 'class="bg-danger text-white"';} ?> >
                            <td>Overall process takt: <b><?php echo $field17->input8 ?></b></td>
                        </tr>
                        <tr>
                            <td>Downtime: <b><?php echo $field17->input9 ?></b>%</td>
                        </tr>              
                        <tr>
                            <td>FTT: <b><?php echo $field17->input10 ?></b>%</td>
                        </tr>     
                        <tr>
                            <td>QCO Downtime: <b><?php echo $field17->input11 ?></b>%</td>
                        </tr>
                        <tr>
                            <td>Total TM: <b><?php echo $field17->input12 ?></b></td>
                        </tr>
                </table>
            </div>        
            <div class="col">
                <table class="table table-bordered table-sm">                
                        <tr>
                            <td>Process Name: <b><?php echo $field20->point_name; ?></b></td>
                        </tr>
                        <tr>
                            <td>Process type: <b><?php echo $field20->input1 ?></b></td>
                        </tr>                    
                        <tr>
                            <td>Process cycle time: <b><?php echo $field20->input4 ?></b></td>
                        </tr>
                        <tr>
                            <td>#Garment produced: <b><?php echo $field20->input5 ?></b></td>
                        </tr>
                        <tr>
                            <td>Process Takt: <b><?php echo $field20->input6 ?></b></td>
                        </tr>                 
                        <tr>
                            <td>#Parallel process: <b><?php echo $field20->input7 ?></b></td>
                        </tr>
                        <tr <?php if ($main->takttime < $field20->input8) {echo 'class="bg-danger text-white"';} ?> >
                            <td>Overall process takt: <b><?php echo $field20->input8 ?></b></td>
                        </tr>
                        <tr>
                            <td>Downtime: <b><?php echo $field20->input9 ?></b>%</td>
                        </tr>              
                        <tr>
                            <td>FTT: <b><?php echo $field20->input10 ?></b>%</td>
                        </tr>     
                        <tr>
                            <td>QCO Downtime: <b><?php echo $field20->input11 ?></b>%</td>
                        </tr>
                        <tr>
                            <td>Total TM: <b><?php echo $field20->input12 ?></b></td>
                        </tr>
                </table>
            </div> 
            <div class="col">
                <table class="table table-bordered table-sm">                
                        <tr>
                            <td>Process Name: <b><?php echo $field22->point_name; ?></b></td>
                        </tr>
                        <tr>
                            <td>Process type: <b><?php echo $field22->input1 ?></b></td>
                        </tr>                    
                        <tr>
                            <td>Process cycle time: <b><?php echo $field22->input4 ?></b></td>
                        </tr>
                        <tr>
                            <td>#Garment produced: <b><?php echo $field22->input5 ?></b></td>
                        </tr>
                        <tr>
                            <td>Process Takt: <b><?php echo $field22->input6 ?></b></td>
                        </tr>                 
                        <tr>
                            <td>#Parallel process: <b><?php echo $field22->input7 ?></b></td>
                        </tr>
                        <tr <?php if ($main->takttime < $field22->input8) {echo 'class="bg-danger text-white"';} ?> >
                            <td>Overall process takt: <b><?php echo $field22->input8 ?></b></td>
                        </tr>
                        <tr>
                            <td>Downtime: <b><?php echo $field22->input9 ?></b>%</td>
                        </tr>              
                        <tr>
                            <td>FTT: <b><?php echo $field22->input10 ?></b>%</td>
                        </tr>     
                        <tr>
                            <td>QCO Downtime: <b><?php echo $field22->input11 ?></b>%</td>
                        </tr>
                        <tr>
                            <td>Total TM: <b><?php echo $field22->input12 ?></b></td>
                        </tr>
                </table>
            </div>        
        </div>
        <div class="row text-center">
            <div class="col singleup text-success">
              <div><?php echo number_format($field2->result,8) ?></div>    
            </div>
            <div class="col bordertop text-primary">
              <div><?php echo number_format($field3->input9,2) ?></div>    
            </div>
            <div class="col singleup text-success">
              <div><?php echo number_format($field4->result,8) ?></div>    
            </div>
            <div class="col bordertop text-primary">
              <div><?php echo number_format($field5->input9,2) ?></div>    
            </div>
             <div class="col bordertop text-primary">
              <div><?php echo number_format($field6->input9,2) ?></div>    
            </div>
             <div class="col singleup text-success">
              <div><?php echo number_format($field7->result,8) ?></div>    
            </div>
            <div class="col bordertop text-primary">
              <div><?php echo number_format($field8->input9,2) ?></div>    
            </div>
            <div class="col singleup text-success">
              <div><?php echo number_format($field9->result,8) ?></div>    
            </div>
            <div class="col bordertop text-primary">
              <div><?php echo number_format($field10->input9,2) ?></div>    
            </div>
            <div class="col singleup text-success">
              <div><?php echo number_format($field11->result,8) ?></div>    
            </div>
            <div class="col bordertop text-primary">
              <div><?php echo number_format($field12->input9,2) ?></div>    
            </div>
            <div class="col singleup text-success">
              <div><?php echo number_format($field13->result,8) ?></div>    
            </div>
            <div class="col bordertop text-primary">
              <div><?php echo number_format($field14->input9,2) ?></div>    
            </div>
            <div class="col singleup text-success">
              <div><?php echo number_format($field15->result,8) ?></div>    
            </div>
            <div class="col bordertop text-primary">
              <div><?php echo number_format($field16->input9,2) ?></div>    
            </div>
            <div class="col singleup text-success">
              <div><?php echo number_format($field17->result,8) ?></div>    
            </div>
            <div class="col bordertop text-primary">
              <div><?php echo number_format($field18->input9,2) ?></div>    
            </div>
            <div class="col bordertop text-primary">
              <div><?php echo number_format($field19->input9,2) ?></div>    
            </div>
            <div class="col singleup text-success">
              <div><?php echo number_format($field20->result,8) ?></div>    
            </div>
            <div class="col bordertop text-primary">
              <div><?php echo number_format($field21->input9,2) ?></div>    
            </div>                
            <div class="col singleup text-success">
              <div><?php echo number_format($field22->result,8) ?></div>    
            </div>
            <div class="col bordertop text-primary">
              <div><?php echo number_format($field23->input9,2) ?></div>    
            </div> 
            <div class="col bordertop text-primary">
              <div><?php echo number_format($field24->input9,2) ?></div>    
            </div> 
            <div class="col">
                <?php 
                $green = $field2->result+$field4->result+$field7->result+$field9->result+$field11->result+$field15->result+$field13->result+$field17->result+$field20->result+$field22->result;    
                $blue = $field3->input9+$field5->input9+$field6->input9+$field8->input9+$field10->input9+$field12->input9+$field14->input9+$field16->input9+$field18->input9+$field19->input9+$field21->input9+$field23->input9+$field24->input9;    
                 ?>
              <div class="btn btn-success btn-xs"><span style="font-size: 10px;"><?php echo number_format($green,5) ?> days</span></div><br>
              <div class="btn btn-primary btn-xs"><span style="font-size: 10px;"><?php echo number_format($blue,2) ?> days</span></div>
            </div>              
        </div><p></p>                            
        <div class="row">
            <div class="col-md-2 col-lg-2" style="font-size: 12px; padding: 5px;">
                <div class="card">
                    <div class="card-header text-center">
                        <h6>Import</h6>
                    </div>
                    <div class="card-body bg-light">                        
                        <h6 class="text-center"><i class="fas fa-ship"></i> Sea</h6> <hr>                                                    
                        <div class="form-group row">
                            <label class="col-6">Total Cost</label><br>
                            <label class="col-6"><b><?php echo $field1->sea2 ?> $</b></label>
                        </div>
                        <div class="form-group row">
                            <label class="col-6">Lead Time</label><br>
                            <label class="col-6"><b><?php echo $field1->sea3 ?> days</b></label>
                        </div>
                        <div class="form-group row">
                            <label class="col-6">Frequency</label><br>
                            <label class="col-6"><b><?php echo $field1->sea4 ?> </b></label>
                        </div>     
                        <h6 class="text-center"><i class="fas fa-plane"></i> Air</h6> <hr>                            
                        <div class="form-group row">
                            <label class="col-6">Total Cost</label>                                <br>
                            <label class="col-6"><b><?php echo $field1->air2 ?> $</b></label>
                        </div>
                        <div class="form-group row">
                            <label class="col-6">Lead Time</label><br>
                            <label class="col-6"><b><?php echo $field1->air3 ?> days</b></label>
                        </div>
                        <div class="form-group row">
                            <label class="col-6">Frequency</label><br>
                            <label class="col-6"><b><?php echo $field1->air4 ?> </b></label>
                        </div>                        
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-lg-3" style="font-size: 14px; padding: 5px;">
                <div class="card bg-light">
                  <div class="card-header text-center"><h6>Main Information</h6></div>
                  <div class="card-body">
                        <form id="form">
                        <div class="form-group row">
                            <label class="col-sm-6 col-form-label">Style Number</label>
                            <label class="col-sm-6 col-form-label text-info"><?php echo $main->style_no ?></label>                            
                        </div>                            
                        <div class="form-group row">
                            <label class="col-sm-6 col-form-label">Product</label>
                            <label class="col-sm-6 col-form-label text-info"><?php echo $main->customer ?></label>                            
                        </div>                            
                        <div class="form-group row">
                            <label class="col-sm-6 col-form-label">Customer</label>
                            <label class="col-sm-6 col-form-label text-info"><?php echo $main->product ?></label>                            
                        </div> 
                         <div class="form-group row">
                            <label class="col-sm-6 col-form-label">Cons./pcs</label>
                            <label class="col-sm-6 col-form-label text-info"><?php echo $main->cons ?></label>                            
                        </div> 
                         <div class="form-group row">
                            <label class="col-sm-6 col-form-label">Cust Demand</label>
                            <label class="col-sm-6 col-form-label text-info"><?php echo $main->cust_demand ?></label>                            
                        </div>                          
                        <div class="form-group row">
                            <label class="col-sm-6 col-form-label">Takt Time</label>
                            <label class="col-sm-6 col-form-label text-info"><?php echo $main->takttime ?></label>                            
                        </div> 
                        <div class="form-group row">
                            <label class="col-sm-6 col-form-label">PSD</label>
                            <label class="col-sm-6 col-form-label text-info"><?php echo date('d M Y', strtotime($main->psd)) ?></label>                            
                        </div>                            
                        <div class="form-group row">
                            <label class="col-sm-6 col-form-label">PED</label>
                            <label class="col-sm-6 col-form-label text-info"><?php echo date('d M Y', strtotime($main->ped)) ?></label>                            
                        </div>                            
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-lg-3" style="font-size: 14px; padding: 5px;">
                <div class="alert alert-info">                
                        <div class="form-group row">
                            <label class="col-7">Customer Demand</label>
                            <label class="col-5">: <?php echo $main->cust_demand ?> pcs/day</label>
                        </div>
                        <div class="form-group row">
                            <label class="col-7">Available Time</label>
                            <label class="col-5">: 56.880 sec/day</label>
                        </div>            
                        <div class="form-group row">
                            <label class="col-7">Takt Time (56.880/<?php echo $main->cust_demand ?>)</label>
                            <label class="col-5">: <b><?php echo $main->takttime ?> sec/day</b></label>
                        </div>                    
                </div>  
                <div class="alert alert-success">                                
                        <div class="form-group row">
                            <label class="col-5">VA Time</label>
                            <label class="col-7">: <?php echo number_format($green, 5) ?> Days</label>
                        </div>
                        <div class="form-group row">
                            <label class="col-5">DTD</label>
                            <label class="col-7">: <?php echo number_format($blue, 2) ?> Days</label>
                        </div>            
                        <div class="form-group row text-danger">
                            <label class="col-5">VA %</label>
                            <label class="col-7">: <b><?php echo number_format($green/$blue,8) ?> %</b></label>
                        </div>                    
                </div>  
            </div>   
            <div class="col-md-2 col-lg-2" style="font-size: 14px; padding: 5px;">
                <div class="alert alert-info">
                    <div class="text-center">
                        <strong>DTD Details</strong>
                    </div>
                     <div class="form-group row">
                            <label class="col-5">RM</label>
                            <label class="col-7">
                                : <?php $rm = $field2->result+$field3->input9+$field4->result+$field5->input9;
                                echo number_format($rm,2);
                                 ?> Days
                            </label>
                        </div>
                        <div class="form-group row">
                            <label class="col-5">Cutting</label>
                            <label class="col-7">
                                : <?php $ct = 
                                $field6->input9+
                                $field7->result+
                                $field8->input9+
                                $field9->result+
                                $field10->input9+
                                $field11->result+
                                $field12->input9+
                                $field13->result+
                                $field14->input9+
                                $field15->result+
                                $field16->input9+
                                $field17->result+
                                $field18->input9;
                                echo number_format($ct,2);
                                 ?> Days
                            </label>
                        </div>            
                        <div class="form-group row">
                            <label class="col-5">Production</label>
                            <label class="col-7">
                                : <?php $pr = 
                                $field19->input9+
                                $field20->result+
                                $field21->input9+
                                $field22->result+
                                $field23->input9;                                
                                echo number_format($pr,2);
                                 ?> Days
                            </label>
                        </div>  
                         <div class="form-group row">
                            <label class="col-5">FG</label>
                            <label class="col-7">: <?php echo number_format($field24->input9,2); ?> Days</label>
                        </div>         
                        <div class="form-group row" style="font-weight: bold;">
                            <label class="col-5">Total</label>
                            <label class="col-7">: <?php echo number_format($blue,2); ?> Days</label>
                        </div>         
                </div>
            </div>      
            <div class="col-md-2 col-lg-2" style="font-size: 12px; padding: 5px;">
                <div class="card">
                    <div class="card-header text-center">
                        <h6>Export</h6>
                    </div>
                    <div class="card-body bg-light">                        
                        <h6 class="text-center"><i class="fas fa-ship"></i> Sea</h6> <hr>                                                    
                        <div class="form-group row">
                            <label class="col-6">Total Cost</label><br>
                            <label class="col-6"><b><?php echo $field25->sea2 ?> $</b></label>
                        </div>
                        <div class="form-group row">
                            <label class="col-6">Lead Time</label><br>
                            <label class="col-6"><b><?php echo $field25->sea3 ?> days</b></label>
                        </div>
                        <div class="form-group row">
                            <label class="col-6">Frequency</label><br>
                            <label class="col-6"><b><?php echo $field25->sea4 ?> </b></label>
                        </div>     
                        <h6 class="text-center"><i class="fas fa-plane"></i> Air</h6> <hr>                            
                        <div class="form-group row">
                            <label class="col-6">Total Cost</label><br>
                            <label class="col-6"><b><?php echo $field25->air2 ?> $</b></label>
                        </div>
                        <div class="form-group row">
                            <label class="col-6">Lead Time</label><br>
                            <label class="col-6"><b><?php echo $field25->air3 ?> days</b></label>
                        </div>
                        <div class="form-group row">
                            <label class="col-6">Frequency</label><br>
                            <label class="col-6"><b><?php echo $field25->air4 ?> </b></label>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>    

<!-- Modal -->
        <?php $this->load->view('modal_review'); ?>
       

</main><!-- /.container -->


<script src="<?php echo base_url() ?>plugins/jquery/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script>
    $(window).on('hashchange', function(e){
        var hash = window.location.hash;
        var link = hash.replace("#", "");
        openfunction(link);
    });

    function openfunction(e) {        
        $('#modal-'+e).modal('show');            
        
    }
    
</script>
</body>
</html>