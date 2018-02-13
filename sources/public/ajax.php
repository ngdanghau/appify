<?php
if (isset($_POST['LOAD_MORE'])) {
	echo Ajax::post($_POST['page']);
	exit();
}elseif (isset($_POST['LOAD_MORE_TAG'])) {
	echo Ajax::tagPost($_POST['page'],$_POST['tag']);
	exit();
}elseif (isset($_POST['LOAD_MORE_CAT'])) {
	echo Ajax::categoryPost($_POST['page'],$_POST['category']);
	exit();
}elseif (isset($_POST['LOAD_MORE_SEARCH'])) {
	echo Ajax::searchPost($_POST['page'],$_POST['search']);
	exit();
}elseif (isset($_POST['FAQ'])) {
	echo Ajax::faq($_POST['name'],$_POST['email'],$_POST['message']);
	exit();
}
