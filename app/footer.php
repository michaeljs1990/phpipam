<table class="donate">
<tr>
	<td>
		<?php
		// set href
		$href = REVISION=="000" ? "http://phpipam.net" : "http://phpipam.net";
		?>
		<a href="<?php print $href; ?>">phpIPAM IP address management <?php print '[v'. VERSION. ']'; ?><?php if(REVISION > 0) { print " rev".REVISION; } ?></a>
	</td>

	<?php
	# exclude install
	if($_GET['page']!="install") { ?>
	<td>
		<?php print _('In case of problems please contact').' <a href="mailto:'. $User->settings->siteAdminMail .'">'. $User->settings->siteAdminName .'</a>'; ?>
	</td>
	<?php
	/* hide donations button */
	if($User->settings->donate == 0) {

print '	<td id="donate" class="hidden-xs hidden-sm" rel="tooltip" data-html="true" title="'._('phpIPAM is free, open-source project').'.<br>'._('If you like the software you can donate by clicking this button to support further development').'.">
		<a href="https://phpipam.net/donate/" target="_blank"><input type="image" src="css/1.2/images/btn_donate_SM.gif" name="submit"></a>
	</td>';

	}
	}
	?>
</tr>
</table>