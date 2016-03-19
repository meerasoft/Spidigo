<div id="page-wrapper">
            <div id="page-inner">

				<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            <button class="btn btn-primary"><a href="<?php echo base_url();?>user_type/addusertype">Add UserType</a></button>
                        </h1>
                    </div>
                </div>
<section id="services">
    	<div>
        	 <?php 
				$user = $user[0];
			 ?>
            <table class="table table-bordered">
                 <form method="post" action="<?php echo base_url();?>Device_inward/edit/<?php echo $user['Id'];?>">
                    <input class="form-control" type="text" name="device_name" placeholder="First Name" value="<?php echo $user['device_name'];?>"/><br/>
                    <input class="form-control" type="text" name="description" placeholder="First Name" value="<?php echo $user['description'];?>"/><br/>
                    <input class="form-control" type="text" name="mac" placeholder="First Name" value="<?php echo $user['mac'];?>"/><br/>
                    <input class="form-control" type="text" name="device_type" placeholder="First Name" value="<?php echo $user['device_type'];?>"/><br/>
                    <input class="form-control" type="text" name="serial_no" placeholder="First Name" value="<?php echo $user['serial_no'];?>"/><br/>
                    <input class="form-control" type="text" name="warranty" placeholder="First Name" value="<?php echo $user['warranty'];?>"/><br/>
                    <input class="form-control" type="text" name="expiry" placeholder="First Name" value="<?php echo $user['expiry'];?>"/><br/>
                    <input class="form-control" type="text" name="purchase_date" placeholder="First Name" value="<?php echo $user['purchase_date'];?>"/><br/>
                   	<input type="submit" name="submit" value="Update Data" class="btn btn-primary"/><br/>
                 </form>
            </table>
     </div>
    </section>
    </div>
    </div>
