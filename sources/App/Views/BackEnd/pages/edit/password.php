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
			<h2 class="text-primary">Thay Đổi Mật Khẩu</h2>
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
					$condition = 'password = :password';
					if (Auth_Model::checkPass(RemoveHack($_POST['old_password']),$id)) {
						$password = password_hash(RemoveHack($_POST['password']) , PASSWORD_BCRYPT, array('cost' => 14));
						$data = array(
						':password' => $password,
						':id' => $id
						);
						if (User_Model::updateAdmin($condition,$data)) {
							header('Location: '.Config::SITE_URL.'/admincp/?action=admin&mode=edit&id='.$id);
						}else{
							echo '<div class="alert alert-danger" role="alert"><strong>Oh!</strong> Có Lỗi xảy ra, hãy xem lại.</div>';
						}
					}else{
						echo '<div class="alert alert-danger" role="alert"><strong>Oh!</strong> Mật Khẩu Cũ Sai.</div>';
					}
			} ?>
			<div class="card">
							<div class="card-body">
								<form class="form-horizontal" role="form" method="post">
									<div class="form-group">
										<label for="mobile" class="col-sm-2 control-label">Mật Khẩu Cũ</label>
										<div class="col-sm-10">
											<input type="password" class="form-control" name="old_password"><div class="form-control-line"></div>
										</div>
									</div>

									<div class="form-group">
										<label for="mobile" class="col-sm-2 control-label">Mật Khẩu Mới</label>
										<div class="col-sm-10">
											<input type="password" class="form-control" name="password"><div class="form-control-line"></div>
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

