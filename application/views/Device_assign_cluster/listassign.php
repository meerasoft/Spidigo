<div id="page-wrapper">
            <div id="page-inner">

				<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            <button class="btn btn-primary"><a href="<?php echo base_url();?>Device_inward/getdeviceinward">Device Info</a></button>
                            <button class="btn btn-primary"><a href="<?php echo base_url();?>Device_inward/inwarddevice">Inward Device</a></button>
                            <button class="btn btn-primary"><a href="<?php echo base_url();?>Device_assign_cluster/getdeviceinward">Device Assign</a></button>
                        </h1>
                    </div>
                </div>
<section id="portfolio" class="bg-light-gray">
        <div>
          
         <table class="table table-bordered">
            	<thead>
                    <tr>
                    	<td class="success"><input type="checkbox"></td>
                        <td class="success">NO</td>
                        <td class="success">Device name</td>
                        <td class="success">Description</td>
                        <td class="success">MAC</td>
						<td class="success">Device Type</td>
						<td class="success">Serial No</td>
                        <td class="success">warranty</td>
                        <td class="success">Expiry</td>
						<td class="success">Purchase Date</td>
						<td class="success">Action</td>
                    </tr>
                </thead>
                 <?php if(!empty($info)){?>
                    <?php foreach($info as $intKey=>$strValue){?>
                            <tr>
                            	<td><input type="checkbox"></td>
                                <td><?php echo ($intKey+1)?></td>
                                <td><?php echo $strValue['device_name']; ?></td>
                                <td><?php echo $strValue['description']; ?></td>
                                <td><?php echo $strValue['mac']; ?></td>
                                <td><?php echo $strValue['device_type']; ?></td>
                                <td><?php echo $strValue['serial_no']; ?></td>
                                <td><?php echo $strValue['warranty']; ?></td>
                                <td><?php echo $strValue['expiry']; ?></td>
                                <td><?php echo $strValue['purchase_date']; ?></td>
								<td>
                                    <button class="btn btn-info"><a href="<?php echo base_url();?>Device_inward/edit/<?php echo $strValue['Id']?>">Edit</a></button>
                                    <button class="btn btn-danger"><a href="<?php echo base_url();?>Device_inward/delete/<?php echo $strValue['Id']?>">Delete</a></button>
                                </td> 	
                            </tr>
                    <?php }?>
                <?php } else {?>
                    <tr>
                        <td colspan="5">No Users found</td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </section>
 </div>
 </div>
   