<div id="page-wrapper">
            <div id="page-inner">

				<div class="row">
                    <div class="col-md-12">
                        
                        
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
<section id="portfolio" class="bg-light-gray">
        <div>
          
         <table class="table table-bordered">
            	<thead>
                    <tr>
                        <td class="success">NO</td>
                        <td class="success">UserType</td>
						<td class="success">Action</td>
                    </tr>
                </thead>
                 <?php if(!empty($info)){?>
                    <?php foreach($info as $intKey=>$strValue){?>
                            <tr>
                                <td><?php echo ($intKey+1)?></td>
                                <td><?php echo $strValue['user_type']; ?></td>
								<td>
                                    <button class="btn btn-info"><a href="<?php echo base_url();?>user_type/editusertype/<?php echo $strValue['user_type_id']?>">Edit</a></button>
                                    <button class="btn btn-danger"><a href="<?php echo base_url();?>user_type/delete/<?php echo $strValue['user_type_id']?>">Delete</a></button>
                                </td> 	
                            </tr>
                    <?php }?>
                <?php } else {?>
                    <tr>
                        <td colspan="5">No Users found</td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </section>
 </div>
 </div>
   