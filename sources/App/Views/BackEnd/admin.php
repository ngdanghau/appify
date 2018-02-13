<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo Config::SITE_NAME;?> Admin</title>

    <!-- BEGIN META -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="your,keywords">
    <meta name="description" content="Short explanation about this website">
    <!-- END META -->

    <?php include('layouts/head.php'); ?>
    
</head>

<body class="menubar-hoverable header-fixed ">
	<?php include('layouts/header.php'); ?>
<?php 
//require dirname(__DIR__) . '/App/Routers/FrontEnd/Routers.php';
$patch = str_replace('http://', '', $_SESSION['SITE_URL']);
require '/var/www/'.$patch.'/App/Routers/BackEnd/Routers.php';
?>
</body>
</html>
<?php ob_end_flush(); ?>