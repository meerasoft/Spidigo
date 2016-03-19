<div id="page-wrapper">
  <div id="page-inner">
	<div class="panel-heading">
		Edit Users
	</div>
    <section id="services">
     <div>
        	 <?php 
				$user = $user[0];
			 ?>
            <table class="table table-bordered">
                 <form method="post" action="<?php echo base_url();?>users/editusers/<?php echo $user['Id'];?>">
                    <input class="form-control" type="text" name="fname" placeholder="First Name" value="<?php echo $user['fname'];?>"/><br/>
                    <input class="form-control" type="text" name="lname" placeholder="Last Name" value="<?php echo $user['lname'];?>"/><br/>
                    <input class="form-control" type="text" name="user_name" placeholder="Email" value="<?php echo $user['user_name'];?>"/><br/>
                    <input class="form-control" type="text" name="email" placeholder="password" value="<?php echo $user['email'];?>"/><br/>
                    <input class="form-control" type="text" name="password" placeholder="First Name" value="<?php echo $user['password'];?>"/><br/>
                    <input class="form-control" type="text" name="contact" placeholder="contact" value="<?php echo $user['contact'];?>"/><br/>
                    <input class="form-control" type="text" name="user_type" placeholder="contact" value="<?php echo $user['user_type'];?>"/><br/>
                   
                    <input type="submit" name="submit" value="Update User" class="btn btn-primary"/><br/>
                 </form>
            </table>
     </div>
    </section>
  </div>
</div>
