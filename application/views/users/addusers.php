<div id="page-wrapper">
    <div id="page-inner">
		<div class="panel-heading">
			<h3>Add Users</h3>
		</div>
	
			<?php
				$this->load->helper('form');
				$attributes = array('class' => 'form-horizontal');
				echo form_open('users/addusers',$attributes); 
		    ?>
			
	        <!-- <form class="form-horizontal" method="post" action="" >  -->
	        <fieldset>
	        
	        <!-- Form Name -->
	        <legend></legend>
	        
	        <!-- Text input-->
	        <div class="form-group">
	          <label class="col-md-4 control-label" for="user_type">First Name</label>  
	          <div class="col-md-4">
	          <input id="fname" name="fname" type="text" placeholder="First Name" value="<?php echo set_value('fname'); ?>" class="form-control input-md">
	          <span style="color: red"> <?php echo form_error("fname"); ?></span>
	           </div> 
	        </div>
	        
	        <div class="form-group">
	          <label class="col-md-4 control-label" for="user_type">Last Name</label>  
	          <div class="col-md-4">
	          <input id="lname" name="lname" type="text" placeholder="last name" value="<?php echo set_value('lname'); ?>" class="form-control input-md">
	          <span style="color: red"> <?php echo form_error("lname"); ?></span>
	           </div>
	        </div>
	        
	        <div class="form-group">
	          <label class="col-md-4 control-label" for="user_type">UserName</label>  
	          <div class="col-md-4">
	          <input id="user_name" name="user_name" type="text" placeholder="user name" value="<?php echo set_value('user_name'); ?>" class="form-control input-md">
	          <span style="color: red"> <?php echo form_error("user_name"); ?></span>
	           </div>
	        </div>
	        
	        
	        <div class="form-group">
	          <label class="col-md-4 control-label" for="user_type">Email</label>  
	          <div class="col-md-4">
	          <input id="email" name="email" type="email" placeholder="email" value="<?php echo set_value('email'); ?>" class="form-control input-md">
	          <span style="color: red"> <?php echo form_error("email"); ?></span>
	           </div>
	        </div>
	        
	        
	        <div class="form-group">
	          <label class="col-md-4 control-label" for="user_type">Password</label>  
	          <div class="col-md-4">
	          <input id="password" name="password" type="text" placeholder="password" value="<?php echo set_value('password'); ?>" class="form-control input-md">
	          <span style="color: red"> <?php echo form_error("password"); ?></span>
	           </div>
	        </div>
	        
	        
	        <div class="form-group">
	          <label class="col-md-4 control-label" for="user_type">Contact</label>  
	          <div class="col-md-4">
	          <input id="contact" name="contact" type="text" placeholder="contact" value="<?php echo set_value('contact'); ?>" class="form-control input-md">
	          <span style="color: red"> <?php echo form_error("contact"); ?></span>
	           </div>
	        </div>
	        
	        <div class="form-group">
	        
	                    <label class="col-md-4 control-label" for="user_type">User Type</label>
	                    <div class="col-md-4">
	                    <select id="user_type" name="user_type" class="form-control input-md">
			              <?php
							foreach($usertype as $each)
							{
							    ?>
							    <option value="<?=$each['user_type_id']?>"><?=$each['user_type']?></option>
							    <?php
							}
							?>
			            </select>
			            </div>
	        </div>
	        
	        <!-- Button -->
	        <div class="form-group">
	          <label class="col-md-4 control-label" for="requestquote"></label>
	           <div class="col-md-4">
	            <input type="submit" id="submit" name="submit" class="btn btn-primary"  value="ADD USER">
	           </div>
	        </div>
	        
	        </fieldset>
	  
	    <?php echo form_close(); ?>
   
        
	</div>
</div>

