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
?>
<!-- BEGIN MENUBAR-->
<div id="menubar" class="menubar-inverse ">
	<div class="menubar-fixed-panel">
		<div>
			<a class="btn btn-icon-toggle btn-default menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
				<i class="fa fa-bars"></i>
			</a>
		</div>
		<div class="expanded">
			<a href="<?php echo Config::SITE_URL . '/admincp/'; ?>">
				<span class="text-lg text-bold text-primary ">MATERIAL&nbsp;ADMIN</span>
			</a>
		</div>
	</div>
	<div class="menubar-scroll-panel">

		<!-- BEGIN MAIN MENU -->
		<ul id="main-menu" class="gui-controls">

			<!-- BEGIN DASHBOARD -->
			<li <?php if(empty($action)) {?> class="active expanded" <?php } ?>>
				<a href="<?php echo Config::SITE_URL . '/admincp/'; ?>">
					<div class="gui-icon"><i class="md md-home"></i></div>
					<span class="title">Dashboard</span>
				</a>
			</li><!--end /menu-li -->
			<!-- END DASHBOARD -->

			<!-- BEGIN EMAIL -->
			<li class="gui-folder <?php if($action == 'user') {?> active expanded <?php } ?>">
				<a>
					<div class="gui-icon"><i class="md md-group"></i></div>
					<span class="title">Thành Viên</span>
				</a>
				<!--start submenu -->
				<ul>
					<li <?php if($action == 'user' && empty($mode)) {?> class="active expanded"<?php } ?>><a href="?action=user" <?php if($action == 'user' && empty($mode)) {?> class="active"<?php } ?>><span class="title">Danh Sách Thành Viên</span></a></li>
					<li <?php if($action == 'admin' && empty($mode)) {?> class="active expanded"<?php } ?>><a href="?action=admin" <?php if($action == 'admin' && empty($mode)) {?> class="active"<?php } ?>><span class="title">Danh Sách Ban Quản Trị</span></a></li>
					<li <?php if($action == 'admin' && !empty($mode) && $mode == 'add') {?> class="active expanded"<?php } ?>><a href="?action=admin&mode=add" <?php if($action == 'admin' && !empty($mode) && $mode == 'add') {?> class="active"<?php } ?>><span class="title">Thêm Ban Quản Trị</span></a></li>
				</ul><!--end /submenu -->
			</li><!--end /menu-li -->
			<!-- END EMAIL -->


			<!-- BEGIN UI -->
			<li class="gui-folder <?php if($action == 'post') {?> active expanded <?php } ?>">
				<a>
					<div class="gui-icon"><i class="md md-description"></i></div>
					<span class="title">Bài Viết</span>
				</a>
				<!--start submenu -->
				<ul>
					<li <?php if($action == 'post' && empty($mode)) {?> class="active expanded"<?php } ?>><a href="?action=post" <?php if($action == 'post' && empty($mode)) {?> class="active"<?php } ?>><span class="title">Danh Sách Bài Viết</span></a></li>
					<li <?php if($action == 'post' && !empty($mode) && $mode == 'add') {?> class="active expanded"<?php } ?> ><a href="?action=post&mode=add" <?php if($action == 'post' && !empty($mode) && $mode == 'add') {?> class="active"<?php } ?>><span class="title">Thêm Bài Viết</span></a></li>
				</ul><!--end /submenu -->
			</li><!--end /menu-li -->
			<!-- END UI -->

			<!-- BEGIN TABLES -->
			<li class="gui-folder <?php if($action == 'category') {?> active expanded <?php } ?>">
				<a>
					<div class="gui-icon"><i class="fa fa-tags"></i></div>
					<span class="title">Thể Loại</span>
				</a>
				<!--start submenu -->
				<ul>
					<li <?php if($action == 'category' && empty($mode)) {?> class="active expanded"<?php } ?>><a href="?action=category" <?php if($action == 'category' && empty($mode)) {?> class="active"<?php } ?>><span class="title">Danh Sách Thể Loại</span></a></li>
					<li <?php if($action == 'category' && !empty($mode) && $mode == 'add') {?> class="active expanded"<?php } ?>><a href="?action=category&mode=add" <?php if($action == 'category' && !empty($mode) && $mode == 'add') {?> class="active"<?php } ?>><span class="title">Thêm Thể Loại</span></a></li>
				</ul><!--end /submenu -->
			</li><!--end /menu-li -->
			<!-- END TABLES -->

			<!-- BEGIN FORMS -->
			<li class="gui-folder <?php if($action == 'menu') {?> active expanded <?php } ?>">
				<a>
					<div class="gui-icon"><i class="md md-view-quilt"></i></div>
					<span class="title">Menu</span>
				</a>
				<!--start submenu -->
				<ul>
					<li <?php if($action == 'menu' && empty($mode)) {?> class="active expanded"<?php } ?>><a href="?action=menu" <?php if($action == 'menu' && empty($mode)) {?> class="active"<?php } ?>><span class="title">Cấu Trúc Menu</span></a></li>
					<li <?php if($action == 'menu' && !empty($mode) && $mode == 'add') {?> class="active expanded"<?php } ?>><a href="?action=menu&mode=add" <?php if($action == 'menu' && !empty($mode) && $mode == 'add') {?> class="active"<?php } ?>><span class="title">Thêm Menu</span></a></li>
				</ul><!--end /submenu -->
			</li><!--end /menu-li -->
			<!-- END FORMS -->

			<!-- BEGIN PAGES -->
			<li class="gui-folder <?php if(in_array($action,['widgets','banner','service','feature','video','choose','fact','screenshot','review','pricing','team','contact','download'])) {?> active expanded <?php } ?>">
				<a>
					<div class="gui-icon"><i class="md md-now-widgets"></i></div>
					<span class="title">Widgets</span>
				</a>
				<!--start submenu -->
				<ul>
					<li><a href="?action=widgets" <?php if($action == 'widgets' && empty($mode)) {?> class="active expanded"<?php } ?>><span class="title">Cài Đặt Chung</span></a></li>
					<li class="gui-folder">
						<a href="javascript:void(0);">
							<span class="title">Danh Sách Widgets</span>
						</a>
						<!--start submenu -->
						<ul>
							<li><a href="?action=banner" <?php if($action == 'banner' && empty($mode)) {?> class="active expanded"<?php } ?>><span class="title">Banner</span></a></li>
							<li class="gui-folder">
								<a href="javascript:void(0);" >
									<span class="title">Service</span>
								</a>
								<ul>
									<li <?php if($action == 'service' && empty($mode)) {?> class="active expanded"<?php } ?> ><a href="?action=service" <?php if($action == 'service' && empty($mode)) {?> class="active"<?php } ?>><span class="title">Danh Sách Service</span></a></li>
									<li><a href="?action=service&mode=add" <?php if($action == 'service' && !empty($mode) && $mode == 'add') {?> class="active"<?php } ?>><span class="title">Thêm Danh Sách Service</span></a></li>
								</ul>
							</li>
							<li class="gui-folder">
								<a href="javascript:void(0);" >
									<span class="title">Feature</span>
								</a>
								<ul>
									<li><a href="?action=feature&mode=config" <?php if($action == 'feature' && !empty($mode) && $mode == 'config') {?> class="active"<?php } ?>><span class="title">Cài Đặt</span></a></li>
									<li <?php if($action == 'feature' && empty($mode)) {?> class="active expanded"<?php } ?>><a href="?action=feature" <?php if($action == 'feature' && empty($mode)) {?> class="active"<?php } ?>><span class="title">Danh Sách Feature</span></a></li>
									<li><a href="?action=feature&mode=add" <?php if($action == 'feature' && !empty($mode) && $mode == 'add') {?> class="active"<?php } ?>><span class="title">Thêm Danh Sách Feature</span></a></li>
								</ul>
							</li>
							<li><a href="?action=video" <?php if($action == 'video' && empty($mode)) {?> class="active expanded"<?php } ?>><span class="title">Video</span></a></li>
							<li class="gui-folder">
								<a href="javascript:void(0);" >
									<span class="title">Why Choose Us</span>
								</a>
								<ul>
									<li><a href="?action=choose&mode=config" <?php if($action == 'choose' && !empty($mode) && $mode == 'config') {?> class="active"<?php } ?>><span class="title">Cài Đặt</span></a></li>
									<li <?php if($action == 'choose' && empty($mode)) {?> class="active expanded"<?php } ?>><a href="?action=choose" <?php if($action == 'choose' && empty($mode)) {?> class="active"<?php } ?>><span class="title">Danh Sách Lý Do</span></a></li>
									<li><a href="?action=choose&mode=add" <?php if($action == 'choose' && !empty($mode) && $mode == 'add') {?> class="active"<?php } ?>><span class="title">Thêm Danh Sách Lý Do</span></a></li>
								</ul>
							</li>
							<li class="gui-folder">
								<a href="javascript:void(0);" >
									<span class="title">Fun Fact</span>
								</a>
								<ul>
									<li <?php if($action == 'fact' && empty($mode)) {?> class="active expanded"<?php } ?>><a href="?action=fact" <?php if($action == 'fact' && empty($mode)) {?> class="active"<?php } ?>><span class="title">Danh Sách Fun Fact</span></a></li>
									<li><a href="?action=fact&mode=add" <?php if($action == 'fact' && !empty($mode) && $mode == 'add') {?> class="active"<?php } ?>><span class="title">Thêm Danh Sách Fun Fact</span></a></li>
								</ul>
							</li>
							<li class="gui-folder">
								<a href="javascript:void(0);" >
									<span class="title">Screenshot</span>
								</a>
								<ul>
									<li><a href="?action=screenshot&mode=config" <?php if($action == 'screenshot' && !empty($mode) && $mode == 'config') {?> class="active"<?php } ?>><span class="title">Cài Đặt</span></a></li>
									<li <?php if($action == 'screenshot' && empty($mode)) {?> class="active expanded"<?php } ?>><a href="?action=screenshot" <?php if($action == 'screenshot' && empty($mode)) {?> class="active"<?php } ?>><span class="title">Danh Sách Screenshot</span></a></li>
									<li><a href="?action=screenshot&mode=add" <?php if($action == 'screenshot' && !empty($mode) && $mode == 'add') {?> class="active"<?php } ?>><span class="title">Thêm Danh Sách Screenshot</span></a></li>
								</ul>
							</li>
							<li class="gui-folder">
								<a href="javascript:void(0);" >
									<span class="title">Review</span>
								</a>
								<ul>
									<li <?php if($action == 'review' && empty($mode)) {?> class="active expanded"<?php } ?>><a href="?action=review" <?php if($action == 'review' && empty($mode)) {?> class="active"<?php } ?>><span class="title">Danh Sách Review</span></a></li>
									<li><a href="?action=review&mode=add" <?php if($action == 'review' && !empty($mode) && $mode == 'add') {?> class="active"<?php } ?>><span class="title">Thêm Danh Sách Review</span></a></li>
								</ul>
							</li>
							<li class="gui-folder">
								<a href="javascript:void(0);" >
									<span class="title">Pricing</span>
								</a>
								<ul>
									<li><a href="?action=pricing&mode=config" <?php if($action == 'pricing' && !empty($mode) && $mode == 'config') {?> class="active"<?php } ?>><span class="title">Cài Đặt</span></a></li>
									<li <?php if($action == 'pricing' && empty($mode)) {?> class="active expanded"<?php } ?>><a href="?action=pricing" <?php if($action == 'pricing' && empty($mode)) {?> class="active"<?php } ?>><span class="title">Danh Sách Pricing</span></a></li>
									<li><a href="?action=pricing&mode=add" <?php if($action == 'pricing' && !empty($mode) && $mode == 'add') {?> class="active"<?php } ?>><span class="title">Thêm Danh Sách Pricing</span></a></li>
								</ul>
							</li>
							<li class="gui-folder">
								<a href="javascript:void(0);" >
									<span class="title">Team</span>
								</a>
								<ul>
									<li><a href="?action=team&mode=config" <?php if($action == 'team' && !empty($mode) && $mode == 'config') {?> class="active"<?php } ?>><span class="title">Cài Đặt</span></a></li>
									<li <?php if($action == 'team' && empty($mode)) {?> class="active expanded"<?php } ?>><a href="?action=team" <?php if($action == 'team' && empty($mode)) {?> class="active"<?php } ?>><span class="title">Danh Sách Team</span></a></li>
									<li><a href="?action=team&mode=add" <?php if($action == 'team' && !empty($mode) && $mode == 'add') {?> class="active"<?php } ?>><span class="title">Thêm Danh Sách Team</span></a></li>
								</ul>
							</li>
							<li class="gui-folder">
								<a href="javascript:void(0);" >
									<span class="title">Contact</span>
								</a>
								<ul>
									<li><a href="?action=contact&mode=config" <?php if($action == 'contact' && !empty($mode) && $mode == 'config') {?> class="active"<?php } ?>><span class="title">Cài Đặt</span></a></li>
									<li <?php if($action == 'contact' && empty($mode)) {?> class="active expanded"<?php } ?>><a href="?action=contact" <?php if($action == 'contact' && empty($mode)) {?> class="active"<?php } ?>><span class="title">Danh Sách FAQ</span></a></li>
									<li><a href="?action=contact&mode=add" <?php if($action == 'contact' && !empty($mode) && $mode == 'add') {?> class="active"<?php } ?>><span class="title">Thêm Danh Sách FAQ</span></a></li>
								</ul>
							</li>
							<li><a href="?action=download" <?php if($action == 'download' && empty($mode)) {?> class="active expanded"<?php } ?>><span class="title">Download</span></a></li>
						</ul><!--end /submenu -->
					</li><!--end /menu-li -->
				</ul><!--end /submenu -->
			</li><!--end /menu-li -->
			<!-- END FORMS -->

			<!-- BEGIN CHARTS -->
			<li <?php if($action == 'config') {?> active expanded <?php } ?>>
				<a href="?action=config" <?php if($action == 'config' && empty($mode)) {?> class="active expanded"<?php } ?>>
					<div class="gui-icon"><i class="md md-settings"></i></div>
					<span class="title">Cài Đặt Web</span>
				</a>
			</li><!--end /menu-li -->
			<!-- END CHARTS -->

			<li <?php if($action == 'filemanager') {?> active expanded <?php } ?>>
				<a href="?action=filemanager" <?php if($action == 'filemanager' && empty($mode)) {?> class="active expanded"<?php } ?>>
					<div class="gui-icon"><i class="md md-collections"></i></div>
					<span class="title">File Manager</span>
				</a>
			</li><!--end /menu-li -->

			<!-- BEGIN LEVELS -->
			<li class="gui-folder <?php if($action == 'comment') {?> active expanded <?php } ?>">
				<a>
					<div class="gui-icon"><i class="md md-comment"></i></div>
					<span class="title">Bình Luận</span>
				</a>
				<!--start submenu -->
				<ul>
					<li <?php if($action == 'comment' && empty($mode)) {?> class="active expanded"<?php } ?>><a href="?action=comment" <?php if($action == 'comment' && empty($mode)) {?> class="active"<?php } ?>><span class="title">Danh Sách Bình Luận</span></a></li>
					<li <?php if($action == 'comment' && !empty($mode) && $mode == 'add') {?> class="active expanded"<?php } ?> ><a href="?action=comment&mode=add&id=0" <?php if($action == 'comment' && !empty($mode) && $mode == 'add') {?> class="active"<?php } ?>><span class="title">Thêm Bình Luận</span></a></li>
				</ul><!--end /submenu -->
			</li><!--end /menu-li -->
			<!-- END LEVELS -->

		</ul><!--end .main-menu -->
		<!-- END MAIN MENU -->

		<div class="menubar-foot-panel">
			<small class="no-linebreak hidden-folded">
				<span class="opacity-75">Copyright &copy; 2014</span> <strong>CodeCovers</strong>
			</small>
		</div>
	</div><!--end .menubar-scroll-panel-->
</div><!--end #menubar-->
<!-- END MENUBAR -->