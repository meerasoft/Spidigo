<div id="page-wrapper">
    <div id="page-inner">
		<div class="panel-heading">
			<h3>Add Users</h3>
		</div>
         
         <div class="panel-body">
                    
                    <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>users/editcluster">
                    <fieldset>
                    
                    <!-- Form Name -->
                    <legend>User Form</legend>
                   
                   <div class="form-group">
					  <label class="col-md-4 control-label" for="radios">CLUSTER LOCATION</label><br/>
					  <input type="hidden" name="id" value="<?php echo $uid; ?>" />
					  
					  	<?php if(!empty($clusterid)){?>
		                    <?php foreach($clusterid as $intKey=>$strValue){?>
		                             <tr>
		                            	<td>
		                                <br/><input type="radio"  value="<?php echo $strValue['Id'];?>" name="cluster_id" /> 
										<?php echo $strValue['area'];?>
		                                </td>
		                               
		 							 </tr>
		                    <?php }?>
			                <?php } else {?>
			                    <tr>
			                        <td colspan="5">No Group found</td>
			                    </tr>
			                 <?php }
						 ?>
						      
					</div></br>
                    
                    <!-- Button -->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="requestquote"></label>
                       <div class="col-md-4">
                        <input type="submit" id="submit" name="submit" class="btn btn-primary" value="ADD CLUSTER">
                       </div>
                    </div>
                    
                    </fieldset>
                </form>
                
                </div>
	</div>
</div>