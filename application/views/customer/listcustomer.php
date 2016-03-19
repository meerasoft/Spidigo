<div id="page-wrapper">
            <div id="page-inner">

				<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            <button class="btn btn-primary"><a href="<?php echo base_url();?>Customer">Add Users</a></button>
                        </h1>
                    </div>
                </div>
<section id="portfolio" class="bg-light-gray">
        <div>
          
         <table class="table table-bordered table-responsive">
            	<thead>
                    <tr>
                        <td class="success">NO</td>
                        <td class="success">Account NO</td>
                        <td class="success">CAF NO</td>
                        <td class="success">user name</td>
                        <td class="success">Email</td>
                        <td class="success">cname</td>
                        <td class="success">Conatact</td>
                        <td class="success">address</td>
                        <td class="success">area</td>
                        <td class="success">city</td>
						<td class="success">zip</td>
						<td class="success">state</td>
                        <td class="success">status</td>
						<td class="success">plan name</td>
						<td class="success">Action</td>
                    </tr>
                </thead>
                 <?php if(!empty($info)){?>
                    <?php foreach($info as $intKey=>$strValue){?>
                            <tr>
                                <td><?php echo ($intKey+1)?></td>
                                <td><?php echo $strValue['account_no']; ?></td>
                                <td><?php echo $strValue['caf_no']; ?></td>
                                <td><?php echo $strValue['user_name']; ?></td>
                                <td><?php echo $strValue['email']; ?></td>
                                <td><?php echo $strValue['cname']; ?></td>
                                <td><?php echo $strValue['contact']; ?></td>
                                <td><?php echo $strValue['address']; ?></td>
                                <td><?php echo $strValue['area']; ?></td>
                                <td><?php echo $strValue['city']; ?></td>
                                <td><?php echo $strValue['zip']; ?></td>
                                <td><?php echo $strValue['state']; ?></td>
                                <td><?php echo $strValue['status']; ?></td>
                                <td><?php echo $strValue['plan_name']; ?></td>
                            	<td>
                                    <button class="btn btn-info"><a href="<?php echo base_url();?>customer/editcustomer/<?php echo $strValue['Id']?>">Edit</a></button>
                                    <button class="btn btn-danger"><a href="<?php echo base_url();?>customer/deletecustomer/<?php echo $strValue['Id']?>">Delete</a></button>
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
   