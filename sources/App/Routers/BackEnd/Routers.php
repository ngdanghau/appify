<?php
$geturl = explode('/',Router::curRequestURL());
if (!empty($geturl[2])) {
    if (!empty($_GET['action'])) {
        $action = $_GET['action'];
    } if (!empty($_GET['mode'])) {
        $mode = $_GET['mode'];
    } if (!empty($_GET['id'])) {
        $id = $_GET['id'];
    }
    
}else{
    $action = null;
}
$router = new Controller;
if ($action == 'logout') {
    $router ->call('Admin','logout','');
}elseif($action == 'post'){
    if (empty($mode) && empty($id)) {
        $router ->call('Post_BE','index','');
    }elseif($mode == 'edit' && !empty($id)){
        $router ->call('Post_BE','edit',$id);
    }elseif($mode == 'edit' && empty($id)){
        $router ->call('Error_Controller','e500','');
    }elseif($mode == 'add' && empty($id)){
        $router ->call('Post_BE','add','');
    }elseif($mode == 'add' && !empty($id)){
        $router ->call('Error_Controller','e500','');
    }elseif($mode == 'delete' && !empty($id)){
        $router ->call('Post_BE','delete',$id);
    }elseif($mode == 'delete' && empty($id)){
        $router ->call('Error_Controller','e500','');
    }
}elseif($action == 'user'){
    if (empty($mode) && empty($id)) {
        $router ->call('User_BE','index','');
    }elseif($mode == 'edit' && !empty($id)){
        $router ->call('User_BE','edit',$id);
    }elseif($mode == 'edit' && empty($id)){
        $router ->call('Error_Controller','e500','');
    }elseif($mode == 'add' && empty($id)){
        $router ->call('Error_Controller','e500','');
    }elseif($mode == 'add' && !empty($id)){
        $router ->call('Error_Controller','e500','');
    }elseif($mode == 'delete' && !empty($id)){
        $router ->call('User_BE','deleteUser',$id);
    }elseif($mode == 'delete' && empty($id)){
        $router ->call('Error_Controller','e500','');
    }
}elseif($action == 'admin'){
    if (empty($mode) && empty($id)) {
        $router ->call('User_BE','showAdmin','');
    }elseif($mode == 'show' && !empty($id)){
        $router ->call('User_BE','show',$id);
    }elseif($mode == 'show' && empty($id)){
        $router ->call('Error_Controller','e404','');
    }elseif($mode == 'edit' && !empty($id)){
        $router ->call('User_BE','edit',$id);
    }elseif($mode == 'edit' && empty($id)){
        $router ->call('Error_Controller','e500','');
    }elseif($mode == 'add' && empty($id)){
        $router ->call('User_BE','add','');
    }elseif($mode == 'add' && !empty($id)){
        $router ->call('Error_Controller','e500','');
    }elseif($mode == 'delete' && !empty($id)){
        $router ->call('User_BE','delete',$id);
    }elseif($mode == 'delete' && empty($id)){
        $router ->call('Error_Controller','e500','');
    }elseif($mode == 'password' && empty($id)){
        $router ->call('Error_Controller','e500','');
    }elseif($mode == 'password' && !empty($id)){
        $router ->call('User_BE','password',$id);
    }
}elseif($action == 'category'){
    if (empty($mode) && empty($id)) {
        $router ->call('Category_BE','index','');
    }elseif($mode == 'edit' && !empty($id)){
        $router ->call('Category_BE','edit',$id);
    }elseif($mode == 'edit' && empty($id)){
        $router ->call('Error_Controller','e500','');
    }elseif($mode == 'add' && empty($id)){
        $router ->call('Category_BE','add','');
    }elseif($mode == 'add' && !empty($id)){
        $router ->call('Error_Controller','e500','');
    }elseif($mode == 'delete' && !empty($id)){
        $router ->call('Category_BE','delete',$id);
    }elseif($mode == 'delete' && empty($id)){
        $router ->call('Error_Controller','e500','');
    }
}elseif($action == 'menu'){
    if (empty($mode) && empty($id)) {
        $router ->call('Menu_BE','index','');
    }elseif($mode == 'edit' && !empty($id)){
        $router ->call('Menu_BE','edit',$id);
    }elseif($mode == 'edit' && empty($id)){
        $router ->call('Error_Controller','e500','');
    }elseif($mode == 'add' && empty($id)){
        $router ->call('Menu_BE','add','');
    }elseif($mode == 'add' && !empty($id)){
        $router ->call('Error_Controller','e500','');
    }elseif($mode == 'delete' && !empty($id)){
        $router ->call('Menu_BE','delete',$id);
    }elseif($mode == 'delete' && empty($id)){
        $router ->call('Error_Controller','e500','');
    }
}elseif($action == 'widgets'){
    if (empty($mode) && empty($id)) {
        $router ->call('Widget_BE','index','');
    }elseif($mode == 'edit' && !empty($id)){
        $router ->call('Widget_BE','edit',$id);
    }elseif($mode == 'edit' && empty($id)){
        $router ->call('Error_Controller','e500','');
    }elseif($mode == 'add' && empty($id)){
        $router ->call('Widget_BE','add','');
    }elseif($mode == 'add' && !empty($id)){
        $router ->call('Error_Controller','e500','');
    }elseif($mode == 'delete' && !empty($id)){
        $router ->call('Widget_BE','delete',$id);
    }elseif($mode == 'delete' && empty($id)){
        $router ->call('Error_Controller','e500','');
    }
}elseif($action == 'banner'){
    if (empty($mode) && empty($id)) {
        $router ->call('Banner_BE','index','');
    }
}elseif($action == 'service'){
    if (empty($mode) && empty($id)) {
        $router ->call('Service_BE','index','');
    }elseif($mode == 'edit' && !empty($id)){
        $router ->call('Service_BE','edit',$id);
    }elseif($mode == 'edit' && empty($id)){
        $router ->call('Error_Controller','e500','');
    }elseif($mode == 'add' && empty($id)){
        $router ->call('Service_BE','add','');
    }elseif($mode == 'add' && !empty($id)){
        $router ->call('Error_Controller','e500','');
    }elseif($mode == 'delete' && !empty($id)){
        $router ->call('Service_BE','delete',$id);
    }elseif($mode == 'delete' && empty($id)){
        $router ->call('Error_Controller','e500','');
    }
}elseif($action == 'feature'){
    if (empty($mode) && empty($id)) {
        $router ->call('Feature_BE','index','');
    }elseif($mode == 'config' && empty($id)){
        $router ->call('Feature_BE','config','');
    }elseif($mode == 'edit' && !empty($id)){
        $router ->call('Feature_BE','edit',$id);
    }elseif($mode == 'edit' && empty($id)){
        $router ->call('Error_Controller','e500','');
    }elseif($mode == 'add' && empty($id)){
        $router ->call('Feature_BE','add','');
    }elseif($mode == 'add' && !empty($id)){
        $router ->call('Error_Controller','e500','');
    }elseif($mode == 'delete' && !empty($id)){
        $router ->call('Feature_BE','delete',$id);
    }elseif($mode == 'delete' && empty($id)){
        $router ->call('Error_Controller','e500','');
    }
}elseif($action == 'video'){
     if (empty($mode) && empty($id)) {
        $router ->call('Video_BE','index','');
    }
}elseif($action == 'choose'){
    if (empty($mode) && empty($id)) {
        $router ->call('Choose_BE','index','');
    }elseif($mode == 'config' && empty($id)){
        $router ->call('Choose_BE','config','');
    }elseif($mode == 'edit' && !empty($id)){
        $router ->call('Choose_BE','edit',$id);
    }elseif($mode == 'edit' && empty($id)){
        $router ->call('Error_Controller','e500','');
    }elseif($mode == 'add' && empty($id)){
        $router ->call('Choose_BE','add','');
    }elseif($mode == 'add' && !empty($id)){
        $router ->call('Error_Controller','e500','');
    }elseif($mode == 'delete' && !empty($id)){
        $router ->call('Choose_BE','delete',$id);
    }elseif($mode == 'delete' && empty($id)){
        $router ->call('Error_Controller','e500','');
    }
}elseif($action == 'fact'){
    if (empty($mode) && empty($id)) {
        $router ->call('Fact_BE','index','');
    }elseif($mode == 'edit' && !empty($id)){
        $router ->call('Fact_BE','edit',$id);
    }elseif($mode == 'edit' && empty($id)){
        $router ->call('Error_Controller','e500','');
    }elseif($mode == 'add' && empty($id)){
        $router ->call('Fact_BE','add','');
    }elseif($mode == 'add' && !empty($id)){
        $router ->call('Error_Controller','e500','');
    }elseif($mode == 'delete' && !empty($id)){
        $router ->call('Fact_BE','delete',$id);
    }elseif($mode == 'delete' && empty($id)){
        $router ->call('Error_Controller','e500','');
    }
}elseif($action == 'screenshot'){
    if (empty($mode) && empty($id)) {
        $router ->call('Screenshot_BE','index','');
    }elseif($mode == 'config' && empty($id)){
        $router ->call('Screenshot_BE','config','');
    }elseif($mode == 'edit' && !empty($id)){
        $router ->call('Screenshot_BE','edit',$id);
    }elseif($mode == 'edit' && empty($id)){
        $router ->call('Error_Controller','e500','');
    }elseif($mode == 'add' && empty($id)){
        $router ->call('Screenshot_BE','add','');
    }elseif($mode == 'add' && !empty($id)){
        $router ->call('Error_Controller','e500','');
    }elseif($mode == 'delete' && !empty($id)){
        $router ->call('Screenshot_BE','delete',$id);
    }elseif($mode == 'delete' && empty($id)){
        $router ->call('Error_Controller','e500','');
    }
}elseif($action == 'review'){
     if (empty($mode) && empty($id)) {
        $router ->call('Review_BE','index','');
    }elseif($mode == 'edit' && !empty($id)){
        $router ->call('Review_BE','edit',$id);
    }elseif($mode == 'edit' && empty($id)){
        $router ->call('Error_Controller','e500','');
    }elseif($mode == 'add' && empty($id)){
        $router ->call('Review_BE','add','');
    }elseif($mode == 'add' && !empty($id)){
        $router ->call('Error_Controller','e500','');
    }elseif($mode == 'delete' && !empty($id)){
        $router ->call('Review_BE','delete',$id);
    }elseif($mode == 'delete' && empty($id)){
        $router ->call('Error_Controller','e500','');
    }
}elseif($action == 'pricing'){
    if (empty($mode) && empty($id)) {
        $router ->call('Pricing_BE','index','');
    }elseif($mode == 'config' && empty($id)){
        $router ->call('Pricing_BE','config','');
    }elseif($mode == 'edit' && !empty($id)){
        $router ->call('Pricing_BE','edit',$id);
    }elseif($mode == 'edit' && empty($id)){
        $router ->call('Error_Controller','e500','');
    }elseif($mode == 'add' && empty($id)){
        $router ->call('Pricing_BE','add','');
    }elseif($mode == 'add' && !empty($id)){
        $router ->call('Error_Controller','e500','');
    }elseif($mode == 'delete' && !empty($id)){
        $router ->call('Pricing_BE','delete',$id);
    }elseif($mode == 'delete' && empty($id)){
        $router ->call('Error_Controller','e500','');
    }
}elseif($action == 'team'){
    if (empty($mode) && empty($id)) {
        $router ->call('Team_BE','index','');
    }elseif($mode == 'config' && empty($id)){
        $router ->call('Team_BE','config','');
    }elseif($mode == 'edit' && !empty($id)){
        $router ->call('Team_BE','edit',$id);
    }elseif($mode == 'edit' && empty($id)){
        $router ->call('Error_Controller','e500','');
    }elseif($mode == 'add' && empty($id)){
        $router ->call('Team_BE','add','');
    }elseif($mode == 'add' && !empty($id)){
        $router ->call('Error_Controller','e500','');
    }elseif($mode == 'delete' && !empty($id)){
        $router ->call('Team_BE','delete',$id);
    }elseif($mode == 'delete' && empty($id)){
        $router ->call('Error_Controller','e500','');
    }
}elseif($action == 'contact'){
    if (empty($mode) && empty($id)) {
        $router ->call('Faq_BE','index','');
    }elseif($mode == 'config' && empty($id)){
        $router ->call('Faq_BE','config','');
    }elseif($mode == 'edit' && !empty($id)){
        $router ->call('Faq_BE','edit',$id);
    }elseif($mode == 'edit' && empty($id)){
        $router ->call('Error_Controller','e500','');
    }elseif($mode == 'add' && empty($id)){
        $router ->call('Faq_BE','add','');
    }elseif($mode == 'add' && !empty($id)){
        $router ->call('Error_Controller','e500','');
    }elseif($mode == 'delete' && !empty($id)){
        $router ->call('Faq_BE','delete',$id);
    }elseif($mode == 'delete' && empty($id)){
        $router ->call('Error_Controller','e500','');
    }
}elseif($action == 'download'){
     if (empty($mode) && empty($id)) {
        $router ->call('Download_BE','index','');
    }
}elseif($action == 'config'){
    if (empty($mode) && empty($id)) {
        $router ->call('Config_BE','index','');
    }
}elseif($action == 'comment'){
    if (empty($mode) && empty($id)) {
        $router ->call('Comment_BE','index','');
    }elseif ($mode == 'mask' && empty($id)) {
        $router ->call('Comment_BE','mask','');
    }elseif($mode == 'edit' && !empty($id)){
        $router ->call('Comment_BE','edit',$id);
    }elseif($mode == 'edit' && empty($id)){
        $router ->call('Error_Controller','e500','');
    }elseif($mode == 'add' && !empty($id)){
        $router ->call('Comment_BE','add',$id);
    }elseif($mode == 'add' && empty($id)){
        $router ->call('Comment_BE','add',0);
    }elseif($mode == 'delete' && !empty($id)){
        $router ->call('Comment_BE','delete',$id);
    }elseif($mode == 'delete' && empty($id)){
        $router ->call('Error_Controller','e500','');
    }
}elseif($action == 'filemanager'){
    if (empty($mode) && empty($id)) {
        $router ->call('File_Manager','index','');
    }
}elseif (empty($action)) {
    include View::adminView('dashboard');
    include View::adminView('layouts/footer');
}