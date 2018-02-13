<!-- BEGIN BASE-->
	<div id="base">
		<!-- BEGIN OFFCANVAS LEFT -->
		<div class="offcanvas">
			 		</div><!--end .offcanvas-->
		<!-- END OFFCANVAS LEFT -->

		<!-- BEGIN CONTENT-->
		<div id="content">
				
	<!-- BEGIN PROFILE HEADER -->
	<section class="full-bleed">
		<div class="section-body style-default-dark force-padding text-shadow">
		<div class="img-backdrop" style="background-image: url('<?php echo $item->cover;?>')"></div>
			<div class="overlay overlay-shade-top stick-top-left height-3"></div>
			<div class="row">
				<div class="col-md-3 col-xs-5">
					<img class="img-circle border-white border-xl img-responsive" src="<?php echo $item->avatar;?>" alt="" width="146px" height="146px"/>
					<h3><?php echo $item->name;?><br/><small><?php echo Role_Model::get($item->role);?></small></h3>
				</div><!--end .col -->
			</div><!--end .row -->
			<div class="overlay overlay-shade-bottom stick-bottom-left force-padding text-right">
				<a href="mailto:<?php echo $item->email;?>" class="btn btn-icon-toggle" data-toggle="tooltip" data-placement="top" data-original-title="Contact me"><i class="fa fa-envelope"></i></a>
				<a class="btn btn-icon-toggle" data-toggle="tooltip" data-placement="top" data-original-title="Follow me"><i class="fa fa-twitter"></i></a>
				<a href="<?php echo $item->facebook;?>" class="btn btn-icon-toggle" data-toggle="tooltip" data-placement="top" data-original-title="Personal info"><i class="fa fa-facebook"></i></a>
			</div>
		</div><!--end .section-body -->
	</section>
	<!-- END PROFILE HEADER  -->

	<section>
		<div class="section-body no-margin">
			<div class="row">
				<div class="col-md-8">
					<!-- BEGIN PROFILE MEMBER -->
					<div class="card card-underline">
						<div class="card-head">
							<header>Personal info</header>
							<?php if ($_SESSION['Adminid'] == $id) { ?>
							<div class="tools">
								<a class="btn btn-icon-toggle ink-reaction" href="?action=admin&mode=edit&id=<?php echo $_SESSION['Adminid'];?>"><i class="md md-edit"></i></a>
							</div><!--end .tools -->
							<?php } ?>
						</div><!--end .card-head -->
						<div class="card-body no-padding">
							<ul class="list">
								<li class="tile">
									<a class="tile-content ink-reaction">
										<div class="tile-icon">
											<i class="md md-location-on"></i>
										</div>
										<div class="tile-text">
											<?php echo $item->address;?>
											<small>Address</small>
										</div>
									</a>
								</li>
								<li class="divider-inset"></li>
								<li class="tile">
									<a class="tile-content ink-reaction">
										<div class="tile-icon">
											<i class="fa fa-phone"></i>
										</div>
										<div class="tile-text">
											<?php echo $item->mobile;?>
											<small>Mobile</small>
										</div>
									</a>
								</li>
								<li class="divider-inset"></li>
								<li class="tile">
									<a class="tile-content ink-reaction">
										<div class="tile-icon">
											<i class="fa fa-envelope"></i>
										</div>
										<div class="tile-text">
											<?php echo $item->email;?>
											<small>Personal</small>
										</div>
									</a>
								</li>
								<li class="divider-inset"></li>
								<li class="tile">
									<a class="tile-content ink-reaction">
										<div class="tile-icon">
											<i class="fa fa-facebook"></i>
										</div>
										<div class="tile-text">
											<?php echo $item->facebook;?>
											<small>Facebook</small>
										</div>
									</a>
								</li>
							</ul>
						</div><!--end .card-body -->
					</div><!--end .card -->
					<!-- BEGIN PROFILE MEMBER -->

				</div><!--end .col -->
				<!-- END MESSAGE ACTIVITY -->

				<!-- BEGIN PROFILE MENUBAR -->
				<div class="col-lg-offset-1 col-lg-3 col-md-4">
					<div class="card card-underline">
						<div class="card-head">
							<header>Bạn Bè</header>
							<div class="tools">
								<form class="navbar-search" role="search">
									<div class="form-group">
										<input type="text" class="form-control" name="friendSearch" placeholder="Enter your keyword">
									</div>
									<button type="submit" class="btn btn-icon-toggle ink-reaction"><i class="fa fa-search"></i></button>
								</form>
							</div><!--end .tools -->
						</div><!--end .card-head -->
						<div class="card-body no-padding">
							<ul class="list">
								<?php foreach ($list as $item) {?>
								<li class="tile">
									<a class="tile-content ink-reaction" href="?action=user&mode=show&id=<?php echo $item->id;?>">
										<div class="tile-icon">
											<img src="<?php echo $item->avatar;?>" alt="" />
										</div>
										<div class="tile-text"><?php echo $item->name;?><small><?php echo Role_Model::get($item->role);?></small></div>
									</a>
								</li>
								<?php } ?>
							</ul>
						</div><!--end .card-body -->
					</div><!--end .card -->
				</div><!--end .col -->
				<!-- END PROFILE MENUBAR -->

			</div><!--end .row -->
		</div><!--end .section-body -->
	</section>

		</div><!--end #content-->		
		<!-- END CONTENT -->

		<?php include View::adminView('layouts/sidebar');?>

		<!-- BEGIN OFFCANVAS RIGHT -->
		<div class="offcanvas">
			<?php include View::adminView('layouts/listadmin');?>

			 		</div><!--end .offcanvas-->
		<!-- END OFFCANVAS RIGHT -->

	</div><!--end #base-->	
	<!-- END BASE -->