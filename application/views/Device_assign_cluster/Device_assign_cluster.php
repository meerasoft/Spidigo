 <style>
<!--
*{margin:0; padding:0;}
.btn{width:300px;}
.text{ text-align:center; float:left; border: solid 2px #ccc;}
.label{line-height: 3; font-size: 100%;}
#box2{margin: 35px;}
.box{ height: auto;}

-->
</style>
<div id="page-wrapper">
	<div id="page-inner">
    	<div class="panel-heading">
			Device Assign To Cluster
		</div>
         
        <div class="panel-body">
            <form class="form-horizontal" method="post" action="" >
                
                   
                    <div class="col-sm-12 form-group">

		
					<?php
						$this->load->helper('form');
						$attributes = array('class' => 'form-horizontal');
						echo form_open('',$attributes); 
				    ?>
					
			        <!-- <form class="form-horizontal" method="post" action="" >  -->
			        <fieldset>
			        
			        <!-- Form Name -->
			        <legend></legend>
			        
			        <!-- Text input-->
			        <div class="form-group">
				        <div class=" col-sm-12">
				        
				            <div class=" col-sm-offset-1 col-sm-4">
				            	<span class="btn btn-primary " id="single">Single Device Inward</span>
				          		
				          	</div>
				          	
				          	  <div class=" col-sm-offset-1 col-sm-4 ">
				          	  <span class="btn btn-primary " id="multiple">Multiple Device Inward</span>
				          		
				             </div>
				             
			          	 </div>
			          	 
			        </div>
			        
			        
			        </fieldset>
			  
			    <?php echo form_close(); ?>
		   
		        
			
			<div class="inner1">
				<div class="panel-body">
		                    
		                        <?php
									$this->load->helper('form');
									$attributes = array('class' => 'form-horizontal');
									echo form_open('Device_inward/inwarddevice',$attributes);
								?>
		                    <fieldset>
						        
						        <!-- Form Name -->
						        <legend></legend>
		                    
		                    <!-- Text input-->
		                    <div class="form-group">
		                      <label class="col-md-4 control-label" for="firstname">Device Name</label>  
		                      <div class="col-md-4">
		                      <input id="device_name" name="device_name" type="text" placeholder="Device Name" class="form-control input-md" required="required">
		                      </div>
		                    </div>
		                    
		                    <!-- Text input-->
		                    <div class="form-group">
		                      <label class="col-md-4 control-label" for="lastname">Description</label>  
		                      <div class="col-md-4">
		                      <input id="description" name="description" type="text" placeholder="Description" class="form-control input-md" required="required">
		                      </div>
		                    </div>
		                    
		                    <!-- Text input-->
		                    <div class="form-group">
		                      <label class="col-md-4 control-label" for="email">MAC ADDRESS</label>  
		                      <div class="col-md-4">
		                      <input id="mac" name="mac" type="text" placeholder="MAC Address" class="form-control input-md" required="required">
		                      </div>
		                    </div>
		                   
		                    <div class="form-group">
					          <label class="col-md-4 control-label" for="class">Devices Type</label>
					          <div class="col-md-4">
					            <select id="class" name="device_type" class="form-control">
					              <option value="">Select</option>
					              <option value="1mbps">1 MBPS</option>
					              <option value="2mbps">2 MBPS</option>
					              <option value="4mbps">4 MBPS</option>
					              <option value="highspeed">HIGH SPEED</option>
					            </select>
					          </div>
					        </div>
		                   
		                    <div class="form-group">
		                      <label class="col-md-4 control-label" for="password">serial No</label>  
		                      <div class="col-md-4">
		                      <input id="serial_no" name="serial_no" type="text" placeholder="serial no" class="form-control input-md" required="required">
		                      </div>
		                    </div>
		                    
		                    <div class="form-group">
		                      <label class="col-md-4 control-label" for="password">Warranty Period</label>  
		                      <div class="col-md-4">
		                      <input id="warranty" name="warranty" type="text" placeholder="warranty period" class="form-control input-md" required="required">
		                      </div>
		                    </div>
		                    
		                    <div class="form-group">
		                      <label class="col-md-4 control-label" for="password">Expiry Date</label>  
		                      <div class="col-md-4">
		                      <input id="expiry" name="expiry" type="text" placeholder="Expiry date" class="form-control input-md" required="required">
		                      </div>
		                    </div>
		                    
		                    <div class="form-group">
		                      <label class="col-md-4 control-label" for="password">Purchase Date</label>  
		                      <div class="col-md-4">
		                      <input id="purchase_date" name="purchase_date" type="text" placeholder="purchase date" class="form-control input-md" required="required">
		                      </div>
		                    </div>
		                    
		                    <!-- Button -->
		                    <!--  <div class="form-group">
		                      <label class="col-md-4 control-label" for="requestquote"></label>
		                       <div class="col-md-4">
		                        <input type="submit" id="submit" name="submit" class="btn btn-primary" value="ADD Device">
		                       </div>
		                    </div> -->
		                    
		                    </fieldset>
		                <?php echo form_close(); ?>
		                
		          </div>
			</div>
			<div class="inner2">
					<div class="panel-body">
						
								<?php
									$this->load->helper('form');
									$attributes = array('class' => 'form-horizontal', 'id'=>'mform');
									echo form_open('Device_inward/inwarddevices',$attributes);
								?>
								
						        <!-- <form class="form-horizontal" method="post" action="" >  -->
						        <fieldset>
						        
						        <!-- Form Name -->
						        <legend></legend>
						        
						        <!-- Text input-->
						        <div class="form-group">
						        	<div class=" col-sm-12 box">
						        		<div class="col-sm-3">
						        			
						          			<label type="text" name="device_name" class="label label-info " for="device_name">Device Name</label><br />
						            		
						          			<label type="text" name="description" class="label label-info " for="description">Description</label>
						            		
						            	</div>
						            	
						            	<div class="col-sm-3">
						            		
						          				<label type="text" name="mac" class="label label-info " for="mac" >MAC</label><br />
						            		
						          			<select id="dtype" name="device_type" class="label label-info ">
						          				<option value="type1">type1</option>
						          				<option value="type2">type2</option>
						          				<option value="type3">type3</option>
						          				<option value="type4">type4</option>
						          			</select>
						          			
						            	</div>
						            	<div class="col-sm-3">
						          			
						          			<label type="text" name="serial_no" class="label label-info " for="serial_no" >Serial No</label><br />
						            		
						          			<label type="text" name="warranty" class="label label-info " for="warranty" >warranty</label>
						            		
						            	</div>
						            	<div class="col-sm-3">
						          			
						          			<label type="text" name="expiry" class="label label-info " for="expiry" >expiry</label><br />
						            		
						          			<label type="text" name="purchase_date" class="label label-info " for="purchase_date" >Purchase Date</label>
						            		
						            	</div>
						            </div>
						            
						             
						            
						           <div id="box2" class=" col-sm-12"> 
						           	<div class=" col-sm-6">
								    	<span class="btn btn-danger btn-addrow">Add New Row</span>
								    </div>
								    <div class=" col-sm-6">
								       <span class="btn btn-danger btn-value">Copy With Value</span>
								    </div>
					    			</div>
					    			<div id="myform" class="form-group"> </div>
						        
						        </div>
						        
						        </fieldset>
		                        
						
						    <?php echo form_close(); ?>
					   
					    </div>
					</div>
			    <div class="form-group col-sm-12">
			                     
			                 <div class=" col-sm-offset-5 col-md-3" >
			                      <p style="margin-left: 55px;">To</p>
			               	 </div>
			   </div>
				   <div class="form-group col-sm-12">
						 <div class="col-sm-offset-4 col-md-4">
						      <select id="class" name="cluster_location" class="form-control">
							              <?php
											foreach($dept as $each)
											{
											    ?>
											    <option value="<?=$each['Id']?>"><?=$each['area']?></option>
											    <?php
											}
											?>
						     </select>
						 </div>
				   </div>
			 
				   
                 <div class="form-group col-sm-12">
                    <!-- Button -->
                    
                    
                       <div class="col-sm-offset-4 col-md-4">
                        <input type="submit" id="submit" name="submit" class="btn btn-primary" value="Device Assign">
                       </div>
                    </div>
                   </div>
                
                </div>
                </form>
 </div>
 </div>
 
					<script src="<?php echo base_url();?>assets/js/jquery-2.1.4.min.js" type="text/javascript" ></script>
						<script>
					    	$(document).ready(function() {
					    		$(".inner2").hide();
								$(".inner1").show();
					            //alert("hello!");
								var x = 1;
								var str = '<div style="position:relative; margin:10px 0;"><div class="col-sm-3"><input type="text" class="form-control dn'+ x +'" name="device['+ x + ']['+ "device_name" +']" value="" placeholder="DeviceName" required/><input type="text" class="form-control ds'+ x +'" name="device['+ x + ']['+ "description" +']" value="" placeholder="description" required/></div><div class="col-sm-3"><input  class="form-control" type="text" name="device['+ x + ']['+ "mac" +']" value="" placeholder="MAC" required/><input  class="form-control dt'+ x +'" type="text" value="'+ $("#dtype").val() +'" name="device['+ x + ']['+ "device_type" +']" required/></div><div class="col-sm-3"><input  class="form-control" type="text" name="device['+ x + ']['+ "serial_no" +']" value="" placeholder="serial_no" required/><input  class="form-control wt'+ x +'" type="text" name="device['+ x + ']['+ "warranty" +']" value="" placeholder="warranty" required/></div><div class="col-sm-3"><input  class="form-control ex'+ x +'" type="text" name="device['+ x + ']['+ "expiry" +']" value="" placeholder="expiry" required/><input  class="form-control pd'+ x +'" type="text" name="device['+ x + ']['+ "purchase_date" +']" value="" placeholder="purchase_date" required/></div> </div><div class="clearfix"> </div>';
								$("#myform").prepend(str);
					
								$(".btn-addrow").click(function(){
									//alert("hi");
									  x = x + 1;
									  str = '<div style="position:relative; margin:10px 0;"><div class="col-sm-3"><input type="text" class="form-control dn'+ x +'" name="device['+ x + ']['+ "device_name" +']" value="" placeholder="DeviceName" required/><input type="text" class="form-control ds'+ x +'" name="device['+ x + ']['+ "description" +']" value="" placeholder="description" required/></div><div class="col-sm-3"><input  class="form-control" type="text" name="device['+ x + ']['+ "mac" +']" value="" placeholder="MAC" required/><input  class="form-control dt'+ x +'" type="text" value="'+ $("#dtype").val() +'" name="device['+ x + ']['+ "device_type" +']" required/></div><div class="col-sm-3"><input  class="form-control" type="text" name="device['+ x + ']['+ "serial_no" +']" value="" placeholder="serial_no" required/><input  class="form-control wt'+ x +'" type="text" name="device['+ x + ']['+ "warranty" +']" value="" placeholder="warranty" required/></div><div class="col-sm-3"><input  class="form-control ex'+ x +'" type="text" name="device['+ x + ']['+ "expiry" +']" value="" placeholder="expiry" required/><input  class="form-control pd'+ x +'" type="text" name="device['+ x + ']['+ "purchase_date" +']" value="" placeholder="purchase_date" required/></div> </div><div class="clearfix"> </div>';
									  $("#myform").prepend(str);
								});
								
								$(".btn-value").click(function(){
									
									x = x + 1;
									var y = x - 1;
									str = '<div style="position:relative; margin:10px 0;"><div class="col-sm-3"><input type="text" class="form-control dn'+ x +'" name="device['+ x + ']['+ "device_name" +']" value="'+ $(".dn"+y).val() +'" placeholder="DeviceName" required/><input type="text" class="form-control ds'+ x +'" name="device['+ x + ']['+ "description" +']" value="'+ $(".ds"+y).val() +'" placeholder="description" required/></div><div class="col-sm-3"><input  class="form-control" type="text" name="device['+ x + ']['+ "mac" +']"  value="" placeholder="MAC" required/><input  class="form-control dt'+ x +'" type="text" value="'+ $("#dtype").val() +'" name="device['+ x + ']['+ "device_type" +']" required/></div><div class="col-sm-3"><input  class="form-control" type="text" name="device['+ x + ']['+ "serial_no" +']"  value="" placeholder="serial_no" required/><input  class="form-control wt'+ x +'" type="text" name="device['+ x + ']['+ "warranty" +']"  value="'+ $(".wt"+y).val() +'" placeholder="warranty" required/></div><div class="col-sm-3"><input  class="form-control ex'+ x +'" type="text" name="device['+ x + ']['+ "expiry" +']"  value="'+ $(".ex"+y).val() +'" placeholder="expiry" required/><input  class="form-control pd'+ x +'" type="text" name="device['+ x + ']['+ "purchase_date" +']"  value="'+ $(".pd"+y).val() +'" placeholder="purchase_date" required/></div> </div><div class="clearfix"> </div>';
									 
										$("#myform").prepend(str);
								});
								$("#single").click(function(){
									
									$(".inner1").show();
									$(".inner2").hide();
								});
								$("#multiple").click(function(){
									$(".inner2").show();
									$(".inner1").hide();
								});
							});
					    </script>