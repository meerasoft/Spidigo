<div id="page-wrapper">
    <div id="page-inner">
		<div class="panel-heading">
			<h3>Add Cluster</h3>
		</div>
	
			<?php
				$this->load->helper('form');
				$attributes = array('class' => 'form-horizontal');
				echo form_open('cluster/addcluster',$attributes); 
		    ?>
			
	        <!-- <form class="form-horizontal" method="post" action="" >  -->
	        <fieldset>
	        
	        <!-- Form Name -->
	        <legend></legend>
	        
	        <!-- Text input-->
	        <div class="form-group">
	          <label class="col-md-4 control-label" for="user_type">Name</label>  
	          <div class="col-md-4">
	          <input id="name" name="name" type="text" placeholder="Name" value="<?php echo set_value('name'); ?>" class="form-control input-md">
	          <span style="color: red"> <?php echo form_error("name"); ?></span>
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
	          <label class="col-md-4 control-label" for="user_type">Location</label>  
	          <div class="col-md-4">
	          <input id="location" name="location" type="text" placeholder="location" value="<?php echo set_value('location'); ?>" class="form-control input-md">
	          <span style="color: red"> <?php echo form_error("location"); ?></span>
	           </div> 
	        </div>
	       
	        <!-- Button -->
	        <div class="form-group">
	          <label class="col-md-4 control-label" for="requestquote"></label>
	           <div class="col-md-4">
	            <input type="submit" id="submit" name="submit" class="btn btn-primary"  value="ADD Cluster">
	           </div>
	        </div>
	        
	        </fieldset>
	  
	    <?php echo form_close(); ?>
   
        
	</div>
</div>

