<?php
$acl = new ACL ();
if ($acl->hasPermission ( "version_info" )) {
	?>
	<?php Template::escape(cms_version());?> | PHP  <?php Template::escape(phpversion());?> |
	 <?php Template::escape($_SERVER['SERVER_SOFTWARE']);?> | MySQL <?php Template::escape(Database::getServerVersion());?>
<?php
}
