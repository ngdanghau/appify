<?php 
if(!Auth_Model::isAdmin()) 
	include View::AdminView('home');
else 
	include View::AdminView('admin');
?>