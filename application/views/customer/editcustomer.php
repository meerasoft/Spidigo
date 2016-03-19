<div id="page-wrapper">
  <div id="page-inner">
	<div class="panel-heading">
		Edit Customer
	</div>
    <section id="services">
     <div>
        	 <?php 
				$user = $user[0];
			 ?>
            <table class="table table-bordered">
                 <form method="post" action="<?php echo base_url();?>customer/editcustomer/<?php echo $user['Id'];?>">
                    <input class="form-control" type="text" name="account_no" placeholder="First Name" value="<?php echo $user['account_no'];?>"/><br/>
                    <input class="form-control" type="text" name="caf_no" placeholder="Last Name" value="<?php echo $user['caf_no'];?>"/><br/>
                    <input class="form-control" type="text" name="user_name" placeholder="Email" value="<?php echo $user['user_name'];?>"/><br/>
                    <input class="form-control" type="text" name="email" placeholder="password" value="<?php echo $user['email'];?>"/><br/>
                    <input class="form-control" type="text" name="cname" placeholder="First Name" value="<?php echo $user['cname'];?>"/><br/>
                    <input class="form-control" type="text" name="contact" placeholder="contact" value="<?php echo $user['contact'];?>"/><br/>
                    <input class="form-control" type="text" name="user_type" placeholder="contact" value="<?php echo $user['address'];?>"/><br/>
                    <input class="form-control" type="text" name="area" placeholder="Last Name" value="<?php echo $user['area'];?>"/><br/>
                    <input class="form-control" type="text" name="city" placeholder="Email" value="<?php echo $user['city'];?>"/><br/>
                    <input class="form-control" type="text" name="zip" placeholder="password" value="<?php echo $user['zip'];?>"/><br/>
                    <input class="form-control" type="text" name="state" placeholder="First Name" value="<?php echo $user['state'];?>"/><br/>
                    <input class="form-control" type="text" name="status" placeholder="contact" value="<?php echo $user['status'];?>"/><br/>
                    <input class="form-control" type="text" name="plan_name" placeholder="contact" value="<?php echo $user['plan_name'];?>"/><br/>
                   
                    <input type="submit" name="submit" value="Update customer" class="btn btn-primary"/><br/>
                 </form>
            </table>
     </div>
    </section>
  </div>
</div>
