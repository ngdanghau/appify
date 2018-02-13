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
			<h2 class="text-primary">Chỉnh Sửa Ban Quản Trị</h2>
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
				$condition = 'username, name, email, password, role';
				$value = ':username, :name, :email, :password, :role';
				if (Auth_Model::checkUser(RemoveHack($_POST['username']))) {
					$password = password_hash($_POST['password'] , PASSWORD_BCRYPT, array('cost' => 14));
					$data = array(
							':username' => RemoveHack($_POST['username']),
							':name' => RemoveHack($_POST['name']),
							':email' => RemoveHack($_POST['email']),
							':password' => $password,
							':role' => RemoveHack($_POST['role'])
						);
					$id = User_Model::create($condition,$value,$data);
					if (!empty($id)) {
						if (in_array($_POST['role'],array(1,2,3))) {
							header('Location: '.Config::SITE_URL.'/admincp/?action=admin&mode=edit&id='.$id);
						}else{
							header('Location: '.Config::SITE_URL.'/admincp/?action=user&mode=edit&id='.$id);
						}
					}else{
						echo '<div class="alert alert-danger" role="alert"><strong>Oh!</strong> Có Lỗi xảy ra, hãy xem lại.</div>';
					}
				}else{
					echo '<div class="alert alert-danger" role="alert"><strong>Oh!</strong> Tên đăng nhập đã tồn tại.</div>';
				}
			} ?>
			<div class="card">
							<div class="card-body">
								<form class="form-horizontal" role="form" method="post">
									<div class="form-group">
										<label for="username" class="col-sm-2 control-label">Tên Đăng Nhập</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" name="username" required><div class="form-control-line"></div>
										</div>
									</div>
									<div class="form-group">
										<label for="name" class="col-sm-2 control-label">Họ Và Tên</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" name="name" required><div class="form-control-line"></div>
										</div>
									</div>
									<div class="form-group">
										<label for="email" class="col-sm-2 control-label">Email</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" name="email" required><div class="form-control-line"></div>
										</div>
									</div>
									<div class="form-group">
										<label for="password" class="col-sm-2 control-label">Password Mới</label>
										<div class="col-sm-10">
											<input type="password" class="form-control" name="password" required><div class="form-control-line"></div>
										</div>
									</div>
									<div class="form-group">
										<label for="role" class="col-sm-2 control-label">Chức Vụ</label>
										<div class="col-sm-10">
											<select id="role" name="role" class="form-control">
												<?php $list_role = Role_Model::show();?>
												<?php foreach ($list_role as $items): ?>
												<?php if ($_SESSION['role'] <= $items->id): ?>
												<option value="<?php echo $items->id;?>"><?php echo $items->vi_name;?></option>
												<?php endif ?>
												<?php endforeach ?>
											</select><div class="form-control-line"></div>
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

