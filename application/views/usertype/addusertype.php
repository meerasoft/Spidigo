<div id="page-wrapper">
    <div id="page-inner">
		<div class="panel-heading">
			<h3>Add UserType</h3>
		</div>
	
			<?php
				$this->load->helper('form');
				$attributes = array('class' => 'form-horizontal');
				echo form_open('User_type/addusertype',$attributes); 
		    ?>
			
	        <!-- <form class="form-horizontal" method="post" action="" >  -->
	        <fieldset>
	        
	        <!-- Form Name -->
	        <legend></legend>
	        
	        <!-- Text input-->
	        <div class="form-group">
	          <label class="col-md-4 control-label" for="user_type">UserType Name</label>  
	          <div class="col-md-4">
	          <input id="user_type" name="user_type" type="text" placeholder="UserType Name" value="<?php echo set_value('user_type'); ?>" class="form-control input-md">
	          <span style="color: red"> <?php echo form_error("user_type"); ?></span>
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

