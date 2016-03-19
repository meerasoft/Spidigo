<div id="page-wrapper">
    <div id="page-inner">
		<div class="panel-heading">
			<h3>Add Customer</h3>
		</div>
	
			<?php
				$this->load->helper('form');
				$attributes = array('class' => 'form-horizontal');
				echo form_open('Customer/addcustomer',$attributes); 
		    ?>
			
	        <!-- <form class="form-horizontal" method="post" action="" >  -->
	        <fieldset>
	        
	        <!-- Form Name -->
	        <legend></legend>
	        
	        <!-- Text input-->
	        <div class="form-group">
	          <label class="col-md-4 control-label" for="user_type">Account No</label>  
	          <div class="col-md-4">
	          <input id="account_no" name="account_no" type="text" placeholder="account_no" value="<?php echo set_value('account_no'); ?>" class="form-control input-md">
	          <span style="color: red"> <?php echo form_error("account_no"); ?></span>
	           </div> 
	        </div>
	        
	        <div class="form-group">
	          <label class="col-md-4 control-label" for="user_type">CAF No</label>  
	          <div class="col-md-4">
	          <input id="caf_no" name="caf_no" type="text" placeholder="caf no" value="<?php echo set_value('caf_no'); ?>" class="form-control input-md">
	          <span style="color: red"> <?php echo form_error("caf_no"); ?></span>
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
	          <label class="col-md-4 control-label" for="cname">Customer Name</label>  
	          <div class="col-md-4">
	          <input id="cname" name="cname" type="text" placeholder="cname" value="<?php echo set_value('cname'); ?>" class="form-control input-md">
	          <span style="color: red"> <?php echo form_error("cname"); ?></span>
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
	          <label class="col-md-4 control-label" for="user_type">Address</label>  
	          <div class="col-md-4">
	          <input id="address" name="address" type="text" placeholder="address" value="<?php echo set_value('address'); ?>" class="form-control input-md">
	          <span style="color: red"> <?php echo form_error("address"); ?></span>
	           </div>
	        </div>
	        
	        <div class="form-group">
	          <label class="col-md-4 control-label" for="user_type">Area</label>  
	          <div class="col-md-4">
	          <input id="area" name="area" type="text" placeholder="area" value="<?php echo set_value('area'); ?>" class="form-control input-md">
	          <span style="color: red"> <?php echo form_error("area"); ?></span>
	           </div>
	        </div>
	        
	        <div class="form-group">
	          <label class="col-md-4 control-label" for="user_type">city</label>  
	          <div class="col-md-4">
	          <input id="city" name="city" type="text" placeholder="city" value="<?php echo set_value('city'); ?>" class="form-control input-md">
	          <span style="color: red"> <?php echo form_error("city"); ?></span>
	           </div>
	        </div>
	        
	        <div class="form-group">
	          <label class="col-md-4 control-label" for="user_type">zip</label>  
	          <div class="col-md-4">
	          <input id="zip" name="zip" type="text" placeholder="zip" value="<?php echo set_value('zip'); ?>" class="form-control input-md">
	          <span style="color: red"> <?php echo form_error("zip"); ?></span>
	           </div>
	        </div>
	        
	        <div class="form-group">
	          <label class="col-md-4 control-label" for="user_type">state</label>  
	          <div class="col-md-4">
	          <input id="state" name="state" type="text" placeholder="state" value="<?php echo set_value('state'); ?>" class="form-control input-md">
	          <span style="color: red"> <?php echo form_error("state"); ?></span>
	           </div>
	        </div>
	        
	        <div class="form-group">
	          <label class="col-md-4 control-label" for="user_type">Status</label>  
	          <div class="col-md-4">
	          <input id="status" name="status" type="text" placeholder="status" value="<?php echo set_value('status'); ?>" class="form-control input-md">
	          <span style="color: red"> <?php echo form_error("status"); ?></span>
	           </div>
	        </div>
	        
	        <div class="form-group">
	          <label class="col-md-4 control-label" for="user_type">plan_name</label>  
	          <div class="col-md-4">
	          <input id="plan_name" name="plan_name" type="text" placeholder="plan_name" value="<?php echo set_value('plan_name'); ?>" class="form-control input-md">
	          <span style="color: red"> <?php echo form_error("plan_name"); ?></span>
	           </div>
	        </div>
	        
	        <!-- Button -->
	        <div class="form-group">
	          <label class="col-md-4 control-label" for="requestquote"></label>
	           <div class="col-md-4">
	            <input type="submit" id="submit" name="submit" class="btn btn-primary"  value="ADD Customer">
	           </div>
	        </div>
	        
	        </fieldset>
	  
	    <?php echo form_close(); ?>
   
        
	</div>
</div>

