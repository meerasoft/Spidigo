<div id="page-wrapper">
            <div id="page-inner">

				<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            <button class="btn btn-primary"><a href="<?php echo base_url();?>cluster/addcluster">Add cluster</a></button>
                        </h1>
                    </div>
                </div>
<section id="portfolio" class="bg-light-gray">
        <div>
          
         <table class="table table-bordered">
            	<thead>
                    <tr>
                        <td class="success">NO</td>
                        <td class="success">Name</td>
                        <td class="success">Area</td>
                        <td class="success">location</td>
						<td class="success">Action</td>
                    </tr>
                </thead>
                 <?php if(!empty($info)){?>
                    <?php foreach($info as $intKey=>$strValue){?>
                            <tr>
                                <td><?php echo ($intKey+1)?></td>
                                <td><?php echo $strValue['name']; ?></td>
                                <td><?php echo $strValue['area']; ?></td>
                                <td><?php echo $strValue['location']; ?></td>
								<td>
                                    <button class="btn btn-info"><a href="<?php echo base_url();?>cluster/edit/<?php echo $strValue['Id']?>">Edit</a></button>
                                    <button class="btn btn-danger"><a href="<?php echo base_url();?>cluster/deleteusers/<?php echo $strValue['Id']?>">Delete</a></button>
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
   