<?php
class VersionInfo extends Controller {
	public function adminCopyrightFooterLeft() {
		return "<small>";
	}
	public function adminCopyrightFooterRight() {
		return Template::executeModuleTemplate ( "version_info", "version_info" ) . "</small>";
	}
}