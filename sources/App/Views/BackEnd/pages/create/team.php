<!-- BEGIN BASE-->
	<div id="base">
		<!-- BEGIN OFFCANVAS LEFT -->
		<div class="offcanvas">
			 		</div><!--end .offcanvas-->
		<!-- END OFFCANVAS LEFT -->

		<!-- BEGIN CONTENT-->
		<div id="content">
				<section>
		<div class="section-header">
			<h2 class="text-primary">Tạo Team</h2>
		</div>
		<div class="section-body">
			<div class="row">
				<div class="col-md-8">
					<article class="margin-bottom-xxl">
						<p class="lead">
							DataTables is a plug-in for the jQuery Javascript library. 
							It is a highly flexible tool, based upon the foundations of progressive enhancement, and will add advanced interaction controls to any HTML table.
						</p>
					</article>
				</div><!--end .col -->
			</div>
			<?php 
			if (isset($_POST['submit'])){
				if ($_SESSION['role'] == 1) {
					$condition = 'name, role, avatar, facebook, twitter, google';
					$value = ':name, :role, :avatar, :facebook, :twitter, :google';
					$data = array(
						':name' => RemoveHack($_POST['name']),
						':role' => RemoveHack($_POST['role']),
						':avatar' => RemoveHack($_POST['avatar']),
						':facebook' => RemoveHack($_POST['facebook']),
						':twitter' => RemoveHack($_POST['twitter']),
						':google' => RemoveHack($_POST['google'])
						);
					$id = Team_Model::create($condition,$value,$data);
					if (!empty($id)) {
						header('Location: '.Config::SITE_URL.'/admincp/?action=team&mode=edit&id='.$id);
					}else{
						echo '<div class="alert alert-danger" role="alert"><strong>Oh!</strong> Có Lỗi xảy ra, hãy xem lại.</div>';
					}
				}else{
					echo '<div class="alert alert-danger" role="alert"><strong>Oh!</strong> Bạn không đủ quyền</div>';
				}
			} ?>
			<div class="card">
							<div class="card-body">
								<form class="form-horizontal" role="form" method="post">
									<div class="form-group">
										<label for="name" class="col-sm-2 control-label">Name</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" name="name"><div class="form-control-line"></div>
										</div>
									</div>
									<div class="form-group">
										<label for="role" class="col-sm-2 control-label">Role</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" name="role"><div class="form-control-line"></div>
										</div>
									</div>
									<div class="form-group">
										<label for="avatar" class="col-sm-2 control-label">Avatar</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" name="avatar"><div class="form-control-line"></div>
										</div>
									</div>
									<div class="form-group">
										<label for="facebook" class="col-sm-2 control-label">Facebook</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" name="facebook"><div class="form-control-line"></div>
										</div>
									</div>
									<div class="form-group">
										<label for="twitter" class="col-sm-2 control-label">Twitter</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" name="twitter"><div class="form-control-line"></div>
										</div>
									</div>
									<div class="form-group">
										<label for="google" class="col-sm-2 control-label">Google</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" name="google"><div class="form-control-line"></div>
										</div>
									</div>
									<button type="submit" name="submit" class="btn ink-reaction btn-raised btn-success">Hoàn Tất</button>
									<button type="reset" class="btn ink-reaction btn-raised btn-primary">Làm Lại</button>
								</form>
							</div><!--end .card-body -->
						</div>

	

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

