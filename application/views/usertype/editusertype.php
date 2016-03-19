<div id="page-wrapper">
            <div id="page-inner">

				<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            <button class="btn btn-primary"><a href="<?php echo base_url();?>user_type/addusertype">Add UserType</a></button>
                        </h1>
                    </div>
                </div>
<section id="services">
    	<div>
        	 <?php 
				$user = $user[0];
			 ?>
            <table class="table table-bordered">
                 <form method="post" action="<?php echo base_url();?>user_type/editusertype/<?php echo $user['user_type_id'];?>">
                    <input class="form-control" type="text" name="user_type" placeholder="First Name" value="<?php echo $user['user_type'];?>"/><br/>
                   	<input type="submit" name="submit" value="Update UserType" class="btn btn-primary"/><br/>
                 </form>
            </table>
     </div>
    </section>
    </div>
    </div>
