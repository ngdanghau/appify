<?php
$geturl = explode('/',Router::curRequestURL());
$mode = $geturl[1];
if (isset($geturl[2])) {
	$id = $geturl[2];
	$id = explode('-',$id);
	$id = $id[0];
}

$router = new Controller;
if ($mode == 'admincp') {
    $router ->call('Admin','index','');
}elseif ($mode == 'blog') {
	if (empty($geturl[2])) {
		$router ->call('Blog','listPost','');
	}else{
		$router ->call('Blog','get',$id);
	} 
}elseif ($mode == 'tag') {
	$router ->call('Blog','tagPost',$geturl[2]);
}elseif ($mode == 'category') {
	$router ->call('Blog','categoryPost',$geturl[2]);
}elseif ($mode == 'search') {
	$router ->call('Blog','searchPost',$geturl[2]);
}else{
    $router ->call('Home','show','');
}