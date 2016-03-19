<select id="user_type" name="user_type" class="form-control">
			              <?php
							foreach($usertype as $each)
							{
							    ?>
							    <option value="<?=$each['user_type']?>"><?=$each['user_type']?></option>
							    <?php
							}
							?>
			            </select>