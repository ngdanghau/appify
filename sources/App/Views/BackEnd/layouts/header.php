<!-- BEGIN HEADER-->
<header id="header">
    <div class="headerbar">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="headerbar-left">
            <ul class="header-nav header-nav-options">
                <li class="header-nav-brand">
                    <div class="brand-holder">
                        <a href="<?php echo Config::SITE_URL . '/admincp/';?>">
									<span class="text-lg text-bold text-primary"><?php echo Config::SITE_NAME;?> ADMIN</span>
								</a>
                    </div>
                </li>
                <li>
                    <a class="btn btn-icon-toggle menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
								<i class="fa fa-bars"></i>
							</a>
                </li>
            </ul>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="headerbar-right">
            <ul class="header-nav header-nav-options">
                <li>
                    <!-- Search form -->
                    <form class="navbar-search" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" name="headerSearch" placeholder="Enter your keyword">
                        </div>
                        <button type="submit" class="btn btn-icon-toggle ink-reaction"><i class="fa fa-search"></i></button>
                    </form>
                </li>
                <?php include View::AdminView('layouts/comment'); ?>
            </ul>
            <!--end .header-nav-options -->
            <?php 
	            $item = User::show($_SESSION['Adminid']);
				$role = $item->role;
				$avatar = $item->avatar;
				$name = $item->name; 
			?>
            <ul class="header-nav header-nav-profile">
                <li class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle ink-reaction" data-toggle="dropdown">
								<img src="<?php echo $avatar;?>" alt="" />
								<span class="profile-info">
									<?php echo $name;?>
									<small><?php echo Role_Model::get($role);?></small>
								</span>
							</a>
                    <ul class="dropdown-menu animation-dock">
                        <li class="dropdown-header">Cài Đặt</li>
                        <li><a href="?action=admin&mode=show&id=<?php echo $_SESSION['Adminid'];?>">Hồ Sơ</a></li>
                        <li><a href="../../html/pages/blog/post.html">My blog <span class="badge style-danger pull-right">16</span></a></li>
                        <li><a href="?action=admin&mode=password&id=<?php echo $_SESSION['Adminid'];?>">Đổi Mật Khẩu</a></li>
                        <li class="divider"></li>
                        <li><a href="../../html/pages/locked.html"><i class="fa fa-fw fa-lock"></i> Lock</a></li>
                        <li><a href="?action=logout"><i class="fa fa-fw fa-power-off text-danger"></i> Logout</a></li>
                    </ul>
                    <!--end .dropdown-menu -->
                </li>
                <!--end .dropdown -->
            </ul>
            <!--end .header-nav-profile -->
            <ul class="header-nav header-nav-toggle">
                <li>
                    <a class="btn btn-icon-toggle btn-default" href="#offcanvas-search" data-toggle="offcanvas" data-backdrop="false">
								<i class="fa fa-ellipsis-v"></i>
							</a>
                </li>
            </ul>
            <!--end .header-nav-toggle -->
        </div>
        <!--end #header-navbar-collapse -->
    </div>
</header>
<!-- END HEADER-->