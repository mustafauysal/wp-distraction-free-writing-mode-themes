<div class="wrap">
	<?php screen_icon(); ?>
	<h2>
		<?php _e('Distraction Free Writing mode Themes Configuration','dfwmdt');?>
	</h2>
	<form method="post" action="options.php"> 
	<?php
		settings_fields( 'dfwmdt-group' );
		//do_settings_fields( 'dfwmdt-group', 'dfwmdt-main' );
		do_settings_sections('dfwmdt');	
		submit_button();
	?>
	</form>
</div>