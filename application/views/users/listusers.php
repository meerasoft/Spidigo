<div id="page-wrapper">
            <div id="page-inner">

				<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            <button class="btn btn-primary"><a href="<?php echo base_url();?>users/addusers">Add Users</a></button>
                        </h1>
                    </div>
                </div>
<section id="portfolio" class="bg-light-gray">
        <div>
          
         <table class="table table-bordered">
            	<thead>
                    <tr>
                        <td class="success">NO</td>
                        <td class="success">First Name</td>
                        <td class="success">Last Name</td>
                        <td class="success">UserName</td>
                        <td class="success">Email</td>
                        <td class="success">Password</td>
                        <td class="success">Conatact</td>
                        <td class="success">UserType</td>
                        <td class="success">ClusterID</td>
                        <td class="success">Assign</td>
						<td class="success">Action</td>
                    </tr>
                </thead>
                 <?php if(!empty($info)){?>
                    <?php foreach($info as $intKey=>$strValue){?>
                            <tr>
                                <td><?php echo ($intKey+1)?></td>
                                <td><?php echo $strValue['fname']; ?></td>
                                <td><?php echo $strValue['lname']; ?></td>
                                <td><?php echo $strValue['user_name']; ?></td>
                                <td><?php echo $strValue['email']; ?></td>
                                <td><?php echo $strValue['password']; ?></td>
                                <td><?php echo $strValue['contact']; ?></td>
                                <td><?php echo $strValue['user_type']; ?></td>
                                <td><?php echo $strValue['cluster_id']; ?></td>
                                <td>
										<?php if($strValue['user_type']==="3") {?>
										<button class="btn btn-info"><a href="<?php echo base_url();?>users/getclusterid/<?php echo $strValue['Id']?>">Cluster Assign</a></button>
										<?php }?>
										</td>
									
								<td>
                                    <button class="btn btn-info"><a href="<?php echo base_url();?>users/editusers/<?php echo $strValue['Id']?>">Edit</a></button>
                                    <button class="btn btn-danger"><a href="<?php echo base_url();?>users/deleteusers/<?php echo $strValue['Id']?>">Delete</a></button>
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
   