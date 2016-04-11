<?php

	/* ----------------------------------
	 Control Theme Functions
	---------------------------------- */

	// Activates Theme Mode
	add_filter( 'ot_theme_mode', '__return_true' );

	// Loads OptionTree
	require( trailingslashit( get_template_directory() ) . 'mods/option-tree/ot-loader.php' );

?>