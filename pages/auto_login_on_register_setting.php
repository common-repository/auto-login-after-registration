<?php
global $wpdb;

//getting all settings
$alar_enable_auto_login= get_option('alar_enable_auto_login');

//sanitize all post values
$add_opt_submit= sanitize_text_field( $_POST['add_opt_submit'] );
if($add_opt_submit!='') { 
    
	$alar_enable_auto_login= sanitize_text_field( $_POST['alar_enable_auto_login'] );	
	$saved= sanitize_text_field( $_POST['saved'] );


    if(isset($alar_enable_auto_login) ) {
		update_option('alar_enable_auto_login', $alar_enable_auto_login);
    }
	
	
	
	if($saved==true) {
		
		$message='saved';
	} 
}
  
?>
  <?php
        if ( $message == 'saved' ) {
		echo ' <div class="added-success"><p><strong>Settings Saved.</strong></p></div>';
		}
   ?>
   
    <div class="wrap netgo-admin-page-setting">
        <form method="post" id="settingForm" action="">
		<h2><?php _e('Auto login after registartion Setting','');?></h2>
		<table class="form-table">
		
	
	    <tr valign="top">
			<th scope="row" style="width: 370px;">
				<label for="vccs_munber_of_images"><?php _e('Enable/disable auto login after registartion','');?></label>
			</th>
			<td>
			<select style="width:120px" name="alar_enable_auto_login" id="alar_enable_auto_login">
			<option value='true' <?php if($alar_enable_auto_login == 'true') { echo "selected='selected'" ; } ?>>Enable</option>
			<option value='false' <?php if($alar_enable_auto_login == 'false') { echo "selected='selected'" ; } ?>>Disable</option>
		   </select>
		   <br />
		   <em><?php _e('Enable/disable auto login after registartion.', ''); ?></em>
			</td>
		</tr>
	   
		<tr>
		  <td>
		  <p class="submit">
		<input type="hidden" name="saved"  value="saved"/>
        <input type="submit" name="add_opt_submit" class="button-primary" value="Save Changes" />
		  <?php if(function_exists('wp_nonce_field')) wp_nonce_field('add_opt_submit', 'add_opt_submit'); ?>
        </p></td>
		</tr>
		</table>
		
        
       </form>
      
    </div>

