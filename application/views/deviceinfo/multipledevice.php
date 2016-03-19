<<style>
<!--
.text{width:125px; text-align:center; float:left; border: solid 2px #ccc;}

#box2{margin-left:20px;width:100%;margin-top:10px;}
-->
</style>
<div id="page-wrapper">
    <div id="page-inner">
		<div class="panel-heading">
			<h3>Add UserType</h3>
		</div>
	
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
	        	<div class=" col-sm-12 table">
	        		<div class="col-sm-3">
	          			<label type="text" name="device_name" class="" for="device_name">Device Name</label><br />
	            
	          			<label type="text" name="description" class="" for="description">Description</label>
	            	</div>
	            	<div class="col-sm-3">
	          			<label type="text" name="mac" class="" for="mac" >MAC</label><br />
	            	
	          			<select id="dtype" >
	          				<option value="type1">type1</option>
	          				<option value="type2">type2</option>
	          				<option value="type3">type3</option>
	          				<option value="type4">type4</option>
	          			</select>
	            	</div>
	            	<div class="col-sm-3">
	          			<label type="text" name="serial_no" class="" for="serial_no" >Serial No</label><br />
	            	
	          			<label type="text" name="warranty" class="" for="warranty" >warranty</label>
	            	</div>
	            	<div class="col-sm-3">
	          			<label type="text" name="expiry" class="" for="expiry" >expiry</label><br />
	            	
	          			<label type="text" name="purchase_date" class="" for="purchase_date" >Purchase Date</label>
	            	</div>
	            </div>
	            
	             
	            
	           <div id="box2"> 
			    	<span class="btn btn-danger btn-addrow">Add New Row</span>
			       <span class="btn btn-danger btn-value">Copy With Value</span>
			        
    			</div>
    			<div id="myform" class="form-group"> </div>
	        <div id="sub">
            	<span class="btn btn-danger btn-submit">Submit</span>
            </div>
	        </div>
	        
	        </fieldset>
	 <!-- 
      <div class="col-sm-3"><input type="text" class="form-control dn'+ x +'" name="device_name'+ x +'" value="" placeholder="DeviceName" /><input type="text" class="form-control" name="description'+ x +'" value="" placeholder="description" /></div><div class="col-sm-3"><input  class="form-control" type="text" name="mac'+ x +'" value="" placeholder="MAC" /><input  class="form-control" type="text" value="'+ $("#dtype").val() +'" name="device_type" /></div><div class="col-sm-3"><input  class="form-control" type="text" name="serial_no'+ x +'" value="" placeholder="serial_no" /><input  class="form-control" type="text" name="warranty'+ x +'" value="" placeholder="warranty" /></div><div class="col-sm-3"><input  class="form-control" type="text" name="expiry'+ x +'" value="" placeholder="expiry" /><input  class="form-control" type="text" name="purchase_date'+ x +'" value="" placeholder="purchase_date" /></div> <br>-->
      
      
      
	    <?php echo form_close(); ?>
   
    </div>
</div>

<script src="<?php echo base_url();?>assets/js/jquery-2.1.4.min.js" type="text/javascript" ></script>
	<script>
    	$(document).ready(function() {
            //alert("hello!");
			var x = 1;
			var str = '<div style="position:relative; margin:10px 0;"><div class="col-sm-3"><input type="text" class="form-control dn'+ x +'" name="device_name'+ x +'" value="" placeholder="DeviceName" /><input type="text" class="form-control" name="description'+ x +'" value="" placeholder="description" /></div><div class="col-sm-3"><input  class="form-control" type="text" name="mac'+ x +'" value="" placeholder="MAC" /><input  class="form-control" type="text" value="'+ $("#dtype").val() +'" name="device_type" /></div><div class="col-sm-3"><input  class="form-control" type="text" name="serial_no'+ x +'" value="" placeholder="serial_no" /><input  class="form-control" type="text" name="warranty'+ x +'" value="" placeholder="warranty" /></div><div class="col-sm-3"><input  class="form-control" type="text" name="expiry'+ x +'" value="" placeholder="expiry" /><input  class="form-control" type="text" name="purchase_date'+ x +'" value="" placeholder="purchase_date" /></div> </div><div class="clearfix"> </div>';
			$("#myform").prepend(str);

			$(".btn-addrow").click(function(){
				//alert("hi");
				  x = x + 1;
				  str = '<div style="position:relative; margin:10px 0;"><div class="col-sm-3"><input type="text" class="form-control dn'+ x +'" name="device_name'+ x +'" value="" placeholder="DeviceName" /><input type="text" class="form-control" name="description'+ x +'" value="" placeholder="description" /></div><div class="col-sm-3"><input  class="form-control" type="text" name="mac'+ x +'" value="" placeholder="MAC" /><input  class="form-control" type="text" value="'+ $("#dtype").val() +'" name="device_type" /></div><div class="col-sm-3"><input  class="form-control" type="text" name="serial_no'+ x +'" value="" placeholder="serial_no" /><input  class="form-control" type="text" name="warranty'+ x +'" value="" placeholder="warranty" /></div><div class="col-sm-3"><input  class="form-control" type="text" name="expiry'+ x +'" value="" placeholder="expiry" /><input  class="form-control" type="text" name="purchase_date'+ x +'" value="" placeholder="purchase_date" /></div> </div><div class="clearfix"> </div>';
				  $("#myform").prepend(str);
			});
			
			$(".btn-value").click(function(){
				
				x = x + 1;
				var y = x - 1;
				str = '<div style="position:relative; margin:10px 0;"><div class="col-sm-3"><input type="text" class="form-control dn'+ x +'" name="device_name'+ x +'" value="'+ $(".dn"+ y).val() +'" placeholder="DeviceName" /><input type="text" class="form-control dn'+ x +'" name="description'+ x +'" value="'+ $(".dn"+ y).val() +'" placeholder="description" /></div><div class="col-sm-3"><input  class="form-control " type="text" name="mac'+ x +'" value="" placeholder="MAC" /><input  class="form-control dn'+ x +'" type="text" value="'+ $("#dtype").val() +'" name="device_type" /></div><div class="col-sm-3"><input  class="form-control" type="text" name="serial_no'+ x +'" value="" placeholder="serial_no" /><input  class="form-control dn'+ x +'" type="text" name="warranty'+ x +'" value="'+ $(".dn"+ y).val() +'" placeholder="warranty" /></div><div class="col-sm-3"><input  class="form-control dn'+ x +'" type="text" name="expiry'+ x +'" value="'+ $(".dn"+ y).val() +'" placeholder="expiry" /><input  class="form-control dn'+ x +'" type="text" name="purchase_date'+ x +'" value="'+ $(".dn"+ y).val() +'" placeholder="purchase_date" /></div> </div><div class="clearfix"> </div>';
				 
					$("#myform").prepend(str);
			});
			
			
			$(".btn-addrow").click(function(){
				
				$("#box1").show();
			});
		});
    </script>
    
    