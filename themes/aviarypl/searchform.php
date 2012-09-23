<?php
if (!isset($s))$s="";
?>
	<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<p><span id="searchHdr" title="Szukaj"><label for="s" class="assistive-text">Szukaj</label></span>
		<input type="text" class="field" name="s" id="s" value="<?php echo esc_html($s); ?>" />
	</form>




