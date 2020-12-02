<!-- LAYING -->
<div class="modal fade" id="modal-laying" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Laying Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-hover">            
           <tr>
                <td>Laying Method</td>
                <td class="bg-light">
                    <?php echo ($laying->input1 == '1') ? 'Face to face' : 'face up'; ?>
                </td>
            </tr>
            <tr>
                <td>Number of Plies</td>
                <td class="bg-light">
                    <?php echo $laying->input2 ?>
                </td>        
            </tr>
            <tr>
                <td>M/C Requirement</td>
                <td class="bg-light">
                    <?php echo ($laying->input3 == 'on') ? 'YES' : 'NO'; ?>                            
                </td>        
            </tr>
            <tr>
                <td>Fabric Shrinkage</td>
                <td class="bg-light">
                    <?php echo ($laying->input4 == 'on') ? 'YES' : 'NO'; ?>                            
                </td>        
            </tr>
            <tr>
                <td>Laying Method</td>
                <td class="bg-light">
                    <?php echo ($laying->input1 == '1') ? 'M/C' : 'Manual'; ?>                            
                </td>        
            </tr>
            <tr>
                <td>Comments</td>
                <td class="bg-light">
                    <?php echo $laying->input6 ?>
                </td>        
            </tr>
            <tr>
                <td>Risk Level</td>
                <td class="bg-light">
                    <?php echo ($laying->risk_level == 'on') ? '<span class="badge badge-danger">HIGH</span>' : '<span class="badge badge-success">LOW</span>'; ?>                            
                </td>        
            </tr>
        </table>
      </div>      
    </div>
  </div>
</div>
<!-- MOLDING -->
<div class="modal fade" id="modal-molding" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Molding Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-hover">            
           <tr>
                <td>Molding Heads</td>
                <td class="bg-light">
                    <?php echo $molding->input1; ?>
                </td>
            </tr>
            <tr>
                <td>Heat</td>
                <td class="bg-light">
                    <?php echo $molding->input2 ?> &deg;C
                </td>        
            </tr>
            <tr>
                <td>Pressure</td>
                <td class="bg-light">
                    <?php echo $molding->input3; ?> bar                       
                </td>        
            </tr>
            <tr>
                <td>Cycle Time</td>
                <td class="bg-light">
                    <?php echo $molding->input4; ?> s                         
                </td>        
            </tr>
            <tr>
                <td>Dwell Time</td>
                <td class="bg-light">
                    <?php echo $molding->input5; ?> s                          
                </td>        
            </tr>
             <tr>
                <td>Plies per head</td>
                <td class="bg-light">
                    <?php echo $molding->input6; ?> pcs                          
                </td>        
            </tr>
            <tr>
                <td>Head Type</td>
                <td class="bg-light">
                    <?php echo ($molding->input7 == '1') ? 'Bullet' : 'Tear Drop'; ?>                            
                </td>        
            </tr>
            <tr>
                <td width="50%">Stripe & print matching detail available ?</td>
                <td class="bg-light">
                    <?php echo ($molding->input8 == 'on') ? 'YES' : 'NO'; ?>                            
                </td>        
            </tr>
            <tr>
                <td>Comments</td>
                <td class="bg-light">
                    <?php echo $molding->input9 ?>
                </td>        
            </tr>
            <tr>
                <td>Risk Level</td>
                <td class="bg-light">
                    <?php echo ($molding->risk_level == 'on') ? '<span class="badge badge-danger">HIGH</span>' : '<span class="badge badge-success">LOW</span>'; ?>                            
                </td>        
            </tr>
        </table>
      </div>      
    </div>
  </div>
</div>
<!-- ASSORTING -->
<div class="modal fade" id="modal-assorting" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Assorting Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-hover">            
           <tr>
                <td>Bundling Method</td>
                <td class="bg-light">
                    <?php echo $assorting->input1; ?>
                </td>
            </tr>
            <tr>
                <td>How many shade per bin</td>
                <td class="bg-light">
                    <?php echo $assorting->input2 ?>
                </td>        
            </tr>
            <tr>
                <td width="50%">Panel numbering requirement</td>
                <td class="bg-light">
                    <?php echo ($assorting->input3 == 'on' ? 'YES' : 'NO'); ?>                       
                </td>        
            </tr>            
            <tr>
                <td>Comments</td>
                <td class="bg-light">
                    <?php echo $assorting->input4 ?>
                </td>        
            </tr>
            <tr>
                <td>Risk Level</td>
                <td class="bg-light">
                    <?php echo ($assorting->risk_level == 'on') ? '<span class="badge badge-danger">HIGH</span>' : '<span class="badge badge-success">LOW</span>'; ?>                            
                </td>        
            </tr>
        </table>
      </div>      
    </div>
  </div>
</div>
<!-- HAND CUT -->
<div class="modal fade" id="modal-handcut" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hand Cut Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-hover">            
           <tr>
                <td>Critical point of Pattern</td>
                <td class="bg-light">
                    <?php echo $handcut->input1; ?>
                </td>
            </tr>
            <tr>
                <td>Fabric Behaviour</td>
                <td class="bg-light">
                    <?php echo $handcut->input2 ?>
                </td>        
            </tr>
            <tr>
                <td width="50%">Fabric Shrinkage</td>
                <td class="bg-light">
                    <?php echo ($handcut->input3 == 'on' ? 'YES' : 'NO'); ?>                       
                </td>        
            </tr>            
            <tr>
                <td>Comments</td>
                <td class="bg-light">
                    <?php echo $handcut->input4 ?>
                </td>        
            </tr>
            <tr>
                <td>Risk Level</td>
                <td class="bg-light">
                    <?php echo ($handcut->risk_level == 'on') ? '<span class="badge badge-danger">HIGH</span>' : '<span class="badge badge-success">LOW</span>'; ?>                            
                </td>        
            </tr>
        </table>
      </div>      
    </div>
  </div>
</div>
<!-- AUTO CUTTER -->
<div class="modal fade" id="modal-autocutter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Auto Cutter Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-hover">            
           <tr>
                <td>Number of Plies</td>
                <td class="bg-light">
                    <?php echo $autocutter->input1; ?>
                </td>
            </tr>
            <tr>
                <td>Fabric Shrinkage</td>
                <td class="bg-light">
                    <?php echo ($autocutter->input2 == "on") ? 'YES' : 'NO'; ?>
                </td>        
            </tr>
            <tr>
                <td width="50%">Critical point of pattern</td>
                <td class="bg-light">
                    <?php echo ($autocutter->input3 == '1' ? 'Scallop' : 'V-shape'); ?>                       
                </td>        
            </tr>            
            <tr>
                <td>Comments</td>
                <td class="bg-light">
                    <?php echo $autocutter->input4 ?>
                </td>        
            </tr>
            <tr>
                <td>Risk Level</td>
                <td class="bg-light">
                    <?php echo ($autocutter->risk_level == 'on') ? '<span class="badge badge-danger">HIGH</span>' : '<span class="badge badge-success">LOW</span>'; ?>                            
                </td>        
            </tr>
        </table>
      </div>      
    </div>
  </div>
</div>
<!-- BAND KNIFE -->
<div class="modal fade" id="modal-bandknife" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Band Knife Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-hover">            
           <tr>
                <td>Critical point of Pattern</td>
                <td class="bg-light">
                    <?php echo $bandknife->input1; ?>
                </td>
            </tr>
            <tr>
                <td>Fabric Behaviour</td>
                <td class="bg-light">
                    <?php echo $bandknife->input2 ?>
                </td>        
            </tr>
            <tr>
                <td width="50%">Number of MC</td>
                <td class="bg-light">
                    <?php echo $bandknife->input3  ?>                       
                </td>        
            </tr>            
            <tr>
                <td>Comments</td>
                <td class="bg-light">
                    <?php echo $bandknife->input4 ?>
                </td>        
            </tr>
            <tr>
                <td>Risk Level</td>
                <td class="bg-light">
                    <?php echo ($bandknife->risk_level == 'on') ? '<span class="badge badge-danger">HIGH</span>' : '<span class="badge badge-success">LOW</span>'; ?>                            
                </td>        
            </tr>
        </table>
      </div>      
    </div>
  </div>
</div>
<!-- UNLOADING -->
<div class="modal fade" id="modal-unloading" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Unloading Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-hover">            
           <tr>
                <td>Bra Cup supplier</td>
                <td class="bg-light">
                    <?php echo ($unloading->input1=="1") ? 'Local' : 'Foreign'; ?>
                </td>
            </tr>
            <tr>
                <td>Fabric Supplier</td>
                <td class="bg-light">
                    Local : <?php echo $unloading->input2 ?> % <br>
                    Foreign : <?php echo $unloading->input3 ?> % 
                </td>        
            </tr>
            <tr>
                <td width="50%">Packing Item</td>
                <td class="bg-light">
                    Local : <?php echo $unloading->input4 ?> % <br>
                    Foreign : <?php echo $unloading->input5 ?> %
                </td>        
            </tr>   
            <tr>
                <td width="50%">Elastic, wire, ring & shade</td>
                <td class="bg-light">
                    Local : <?php echo $unloading->input6 ?> % <br>
                    Foreign : <?php echo $unloading->input7 ?> %
                </td>        
            </tr>            
            <tr>
                <td>Is there any special attention of material ?</td>
                <td class="bg-light">
                    <?php echo ($unloading->input8=="on") ? 'YES' : 'NO'; ?>
                </td>        
            </tr>
            <tr>
                <td>Comments</td>
                <td class="bg-light">
                    <?php echo $unloading->input9 ?>
                </td>        
            </tr>
            <tr>
                <td>Risk Level</td>
                <td class="bg-light">
                    <?php echo ($unloading->risk_level == 'on') ? '<span class="badge badge-danger">HIGH</span>' : '<span class="badge badge-success">LOW</span>'; ?>                            
                </td>        
            </tr>
        </table>
      </div>      
    </div>
  </div>
</div>
<!-- FABRIC STORE -->
<div class="modal fade" id="modal-fabricstorage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Fabric Storage Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-hover">            
           <tr>
                <td>Relaxing requirement ?</td>
                <td class="bg-light">
                    <?php echo ($fabricstorage->input1=="on") ? 'YES' : 'NO'; ?> / <?php echo $fabricstorage->input2 ?> hours
                </td>
            </tr>
            <tr>
                <td>Type of fabric</td>
                <td class="bg-light">
                    <?php echo ($fabricstorage->input3 == "on") ? '<i class="fa fa-check"></i>' : '<i class="fa fa-times"></i>' ?> Foam Fabric <br>
                    <?php echo ($fabricstorage->input4 == "on") ? '<i class="fa fa-check"></i>' : '<i class="fa fa-times"></i>' ?> Lare <br>
                    <?php echo ($fabricstorage->input5 == "on") ? '<i class="fa fa-check"></i>' : '<i class="fa fa-times"></i>' ?> Wing <br>
                    <?php echo ($fabricstorage->input6 == "on") ? '<i class="fa fa-check"></i>' : '<i class="fa fa-times"></i>' ?> Common Fabric
                </td>        
            </tr>
            <tr>
                <td width="50%">Number of fabric color</td>
                <td class="bg-light"><?php echo $fabricstorage->input7 ?></td>        
            </tr>               
            <tr>
                <td>Is there any special treatment of fabric ?</td>
                <td class="bg-light">
                    <?php echo ($fabricstorage->input8=="on") ? 'YES' : 'NO'; ?>
                </td>        
            </tr>
            <tr>
                <td>Comments</td>
                <td class="bg-light">
                    <?php echo $fabricstorage->input9 ?>
                </td>        
            </tr>
            <tr>
                <td>Risk Level</td>
                <td class="bg-light">
                    <?php echo ($fabricstorage->risk_level == 'on') ? '<span class="badge badge-danger">HIGH</span>' : '<span class="badge badge-success">LOW</span>'; ?>                            
                </td>        
            </tr>
        </table>
      </div>      
    </div>
  </div>
</div>
<!-- FG -->
<div class="modal fade" id="modal-fg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FG Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-hover">            
           <tr>
                <td>Is there any special custom requirement?</td>
                <td class="bg-light">
                    <?php echo ($fg->input1=="on") ? 'YES' : 'NO'; ?> <hr> If yes, <?php echo $fg->input2 ?>
                </td>
            </tr>
            <tr>
                <td>Packing Method</td>
                <td class="bg-light">
                    <?php 
                        if($fg->input3=="1"){echo "Ratio Packing <i class='fa fa-exclamation-circle text-danger'></i>";}
                        elseif($fg->input3=="2"){echo "Bulk Packing";}
                        elseif($fg->input3=="3"){echo "PDQ <i class='fa fa-exclamation-circle text-danger'></i>";}
                     ?>
                </td>        
            </tr>
            <tr>
                <td width="50%">Carton quantity decided by</td>
                <td class="bg-light">
                    <?php 
                        if($fg->input4=="1"){echo "Customer";}
                        elseif($fg->input4=="2"){echo "Plant <i class='fa fa-exclamation-circle text-danger'></i>";}
                    ?>
                </td>        
            </tr>               
            <tr>
                <td>EDI and ASN 3rd party portal availablity ?</td>
                <td class="bg-light">
                    <?php echo ($fg->input5=="on") ? 'YES' : 'NO'; ?> <hr> What system ? <?php echo $fg->input6 ?>
                </td>        
            </tr>
            <tr>
                <td>Split shipment option available ?</td>
                <td class="bg-light">
                    <?php 
                        if($fg->input7=="1"){echo "YES <i class='fa fa-exclamation-circle text-danger'></i>";}
                        elseif($fg->input7=="2"){echo "YES";}
                    ?>
                </td>        
            </tr>
            <tr>
                <td>PSD - Ex. factory lead time</td>
                <td class="bg-light">                    
                    <?php 
                        if($fg->input8=="1"){echo "1 Week";}
                        elseif($fg->input8=="2"){echo "2 Week";}
                        elseif($fg->input8=="3"){echo "3 Week";}
                        elseif($fg->input8=="4"){echo "More than 1 Month";}
                     ?>            
                </td>        
            </tr>
            <tr>
                <td>Comments</td>
                <td class="bg-light">
                    <?php echo $fg->input9 ?>
                </td>        
            </tr>            <tr>
                <td>Risk Level</td>
                <td class="bg-light">
                    <?php echo ($fg->risk_level == 'on') ? '<span class="badge badge-danger">HIGH</span>' : '<span class="badge badge-success">LOW</span>'; ?>                            
                </td>        
            </tr>
        </table>
      </div>      
    </div>
  </div>
</div>
<!-- C-TEX -->
<div class="modal fade" id="modal-ctex" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">C-Tex Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-bordered">
            <tr>
                <td width="33%" rowspan="4">Critical Behaviour</td>                                
            </tr>
            <tr>                
                <td>Fabric</td>
                <td class="bg-light"><?php echo $ctex->input1 ?></td>
            </tr>
            <tr>                
                <td>Elastic</td>
                <td class="bg-light"><?php echo $ctex->input2 ?></td>
            </tr>
            <tr>                
                <td>Trims</td>
                <td class="bg-light"><?php echo $ctex->input3 ?></td>
            </tr>
            <tr>
                <td rowspan="4">Possible defect for</td>                                
            </tr>
            <tr>                
                <td>Fabric</td>
                <td class="bg-light"><?php echo $ctex->input4 ?></td>
            </tr>
            <tr>                
                <td>Elastic</td>
                <td class="bg-light"><?php echo $ctex->input5 ?></td>
            </tr>
            <tr>                
                <td>Trims</td>
                <td class="bg-light"><?php echo $ctex->input6 ?></td>
            </tr>
            <tr>
                <td>RM Testing Method</td> 
                <td colspan="2" class="bg-light"><?php echo $ctex->input7 ?></td>
            </tr>
            <tr>
                <td>FG Testing Method</td> 
                <td colspan="2" class="bg-light"><?php echo $ctex->input8 ?></td>
            </tr>
            <tr>
                <td>Need to relax ?</td>
                <td class="bg-light" colspan="2">
                    <?php echo ($ctex->input9=="on") ? 'YES' : 'NO'; ?> / <?php echo $ctex->input10 ?> hours
                </td>
            </tr>
            <tr>
                <td colspan="2">Can the face & reverse side of fabric can be identified ?</td> 
                <td class="bg-light">
                    <?php echo ($ctex->input11=="on") ? 'YES' : 'NO'; ?>
                </td>
            </tr>
            <tr>
                <td>Comments</td>
                <td class="bg-light" colspan="2">
                    <?php echo $ctex->input12 ?>
                </td>        
            </tr>            <tr>
                <td>Risk Level</td>
                <td class="bg-light" colspan="2">
                    <?php echo ($ctex->risk_level == 'on') ? '<span class="badge badge-danger">HIGH</span>' : '<span class="badge badge-success">LOW</span>'; ?>                            
                </td>        
            </tr>
        </table>
      </div>      
    </div>
  </div>
</div>
<!-- AQL CUT -->
<div class="modal fade" id="modal-aqlcut" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">AQL Cutting Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-bordered">            
             <tr>
                <td>Checking Percentage</td>
                <td class="bg-light" colspan="2">
                    <?php echo $aqlcut->input1 ?> %
                </td>        
            </tr>
            <tr>
                <td width="50%">Possible defect on cutwork</td>
                <td class="bg-light" colspan="2">
                    <?php echo $aqlcut->input2 ?>
                </td>        
            </tr>
            <tr>
                <td>Comments</td>
                <td class="bg-light" colspan="2">
                    <?php echo $aqlcut->input3 ?>
                </td>        
            </tr>
            <tr>
                <td>Risk Level</td>
                <td class="bg-light" colspan="2">
                    <?php echo ($aqlcut->risk_level == 'on') ? '<span class="badge badge-danger">HIGH</span>' : '<span class="badge badge-success">LOW</span>'; ?>                            
                </td>        
            </tr>
        </table>
      </div>      
    </div>
  </div>
</div>
<!-- AQL CUT -->
<div class="modal fade" id="modal-aql" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">AQL Cutting Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-bordered">            
             <tr>
                <td>Checking Percentage</td>
                <td class="bg-light" colspan="2">
                    <?php echo $aql->input1 ?> %
                </td>        
            </tr>
            <tr>
                <td width="50%">Possible defect</td>
                <td class="bg-light" colspan="2">
                    <?php echo $aql->input2 ?>
                </td>        
            </tr>
            <tr>
                <td>Comments</td>
                <td class="bg-light" colspan="2">
                    <?php echo $aql->input3 ?>
                </td>        
            </tr>
            <tr>
                <td>Risk Level</td>
                <td class="bg-light" colspan="2">
                    <?php echo ($aql->risk_level == 'on') ? '<span class="badge badge-danger">HIGH</span>' : '<span class="badge badge-success">LOW</span>'; ?>                            
                </td>        
            </tr>
        </table>
      </div>      
    </div>
  </div>
</div>
<!-- AQL CUT -->
<div class="modal fade" id="modal-sewing" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sewing Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-bordered" style="font-size: 14px;">            
             <tr>
                <td width="50%">Need training TM for this style ?</td>
                <td class="bg-light"><?php echo ($sewing->input1=='on')?'YES':'NO'; ?></td>        
            </tr>
            <tr>
                <td colspan="2"><b>Mention number of TM for 1 Line</b></td>                   
            </tr>
            <tr>
                <td class="text-right">Dancing</td>
                <td class="bg-light"><?php echo $sewing->input2 ?></td>        
            </tr>
            <tr>
                <td class="text-right">Seated</td>
                <td class="bg-light"><?php echo $sewing->input3 ?></td>        
            </tr>
            <tr>
                <td>What are the critical process ?</td>
                <td class="bg-light"><?php echo $sewing->input4 ?></td>        
            </tr>
            <tr>
                <td>Any additional (NVA) process ?</td>
                <td class="bg-light"><?php echo $sewing->input5 ?></td>        
            </tr>
            <tr>
                <td>What are the critical to quality ?</td>
                <td class="bg-light"><?php echo $sewing->input6 ?></td>        
            </tr>
            <tr>
                <td>Any special requirement on layout ?</td>
                <td class="bg-light"><?php echo $sewing->input7 ?></td>        
            </tr>
            <tr>
                <td>Packing Method</td>
                <td class="bg-light"><?php echo $sewing->input8 ?></td>        
            </tr>
            <tr>
                <td>Mention material behaviour that leads to defect or poor process</td>
                <td class="bg-light"><?php echo $sewing->input9 ?></td>        
            </tr>
             <tr>
                <td>What are the critical machine that leads to defect easily ?</td>
                <td class="bg-light"><?php echo $sewing->input10 ?></td>        
            </tr>
              <tr>
                <td>What machine are critical to set up?</td>
                <td class="bg-light"><?php echo $sewing->input11 ?></td>        
            </tr>
              <tr>
                <td>Any deskilling process on operation ?</td>
                <td class="bg-light"><?php echo ($sewing->input12=="on")?'YES' : 'NO'; ?></td>        
            </tr>
              <tr>
                <td>Is there available machine support ?</td>
                <td class="bg-light"><?php echo ($sewing->input13=="on")?'YES' : 'NO'; ?></td>        
            </tr>
              <tr>
                <td>Any additional machine ?</td>
                <td class="bg-light"><?php echo $sewing->input14 ?></td>        
            </tr>
            <tr>
                <td>Comments</td>
                <td class="bg-light" colspan="2">
                    <?php echo $sewing->input15 ?>
                </td>        
            </tr>
            <tr>
                <td>Risk Level</td>
                <td class="bg-light" colspan="2">
                    <?php echo ($sewing->risk_level == 'on') ? '<span class="badge badge-danger">HIGH</span>' : '<span class="badge badge-success">LOW</span>'; ?>                            
                </td>        
            </tr>
        </table>
      </div>      
    </div>
  </div>
</div>
