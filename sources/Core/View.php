<?php
// Template
class View {
	public static function Template($template, $ext = '.php') {
		$dir = dirname(__DIR__);
		if(CheckMobile()) {
			if (!is_dir($dir . Init::MOBILE_PATH)) {
				die('Không tồn tại thư mục template');
			}
			$rs = $dir . Init::MOBILE_PATH . $template . $ext;
		} else {
			if (!is_dir($dir . Init::FRONTEND_PATH)) {
				die('Không tồn tại thư mục template');
			}
			$rs = $dir . Init::FRONTEND_PATH . $template . $ext;
		}
		return $rs;
	}
	public static function adminView($template, $ext = '.php') {
		$dir = dirname(__DIR__);
		if (!is_dir($dir . Init::BACKEND_PATH)) {
			die('Không tồn tại thư mục template');
		}
		return $dir . Init::BACKEND_PATH . $template . $ext;
	}
	public static function output() {
		Site_Controller::display();
	}
}
