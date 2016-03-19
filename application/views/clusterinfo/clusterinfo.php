<div id="page-wrapper">
    <div id="page-inner">
		
	
			<?php
				$this->load->helper('form');
				$attributes = array('class' => 'form-horizontal');
				echo form_open('User_type/addusertype',$attributes); 
		    ?>
			
	        <!-- <form class="form-horizontal" method="post" action="" >  -->
	        <fieldset>
	        
	        <!-- Form Name -->
	        
	        <label class="col-md-6 control-label" for="requestquote">List OF Cluster</label><br><br>	
	        <legend></legend>
	        <!-- Text input-->
	            <div class="form-group">
	        		<div class="col-lg-3"></div>
	        		<div class="col-lg-5">
			            <div class="input-group custom-search-form">
				              <input type="text" class="form-control">
				              <span class="input-group-btn">
				              <button class="btn btn-primary" type="button">
				              <span class="glyphicon glyphicon-search"></span>
				             </button>
				             </span>
			             </div><!-- /input-group -->
			        </div>
			        <div class="col-lg-4"></div>
			   </div>
	  <div class="panel-body">
		<div class="col-sm-12" style="margin-bottom:20px;">
		 	 <?php foreach($dept as $each){?>
				 <div class="col-sm-2 "style="margin-bottom:20px;">
			   		  <div class="subs btn btn-danger col-sm-12" id="Sub4">
            			  <div class="hidden" class ="id">
             				 <?php echo $each['Id'];?>
                          </div>
                   		 <?php echo $each['area'];?><?php echo "<br/>";?>
		  			   </div>
                       </div>
		 		 
			 <?php }?>
		 </div>  	
		 
		 </div>	
      </fieldset>
	  
	   
        
	</div>
</div>

