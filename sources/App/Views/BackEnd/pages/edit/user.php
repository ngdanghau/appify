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
			if (isset($_POST['submit'])) {
				$condition = 'role = :role';
					$data = array(
						':role' => RemoveHack($_POST['role']),
						':id' => $id
					);
					if (User_Model::updateAdmin($condition,$data)) {
						if (in_array($_POST['role'],array(1,2,3))) {
							header('Location: '.Config::SITE_URL.'/admincp/?action=admin&mode=edit&id='.$id);
						}else{
							header('Location: '.Config::SITE_URL.'/admincp/?action=user&mode=edit&id='.$id);
						}
					}else{
						echo '<div class="alert alert-danger" role="alert"><strong>Oh!</strong> Có Lỗi xảy ra, hãy xem lại.</div>';
					}
			} ?>
			<div class="card">
							<div class="card-body">
								<form class="form-horizontal" role="form" method="post">
									<div class="form-group">
										<label class="col-sm-2 control-label">Tên Đăng Nhập</label>
										<div class="col-sm-10">
											<p class="form-control-static"><?php echo $item->username;?></p>
										</div>
									</div>
									<div class="form-group">
										<label for="name" class="col-sm-2 control-label">Họ Và Tên</label>
										<div class="col-sm-10">
											<p class="form-control-static"><?php echo $item->name;?></p>
										</div>
									</div>
									<div class="form-group">
										<label for="mobile" class="col-sm-2 control-label">Số Điện Thoại</label>
										<div class="col-sm-10">
											<p class="form-control-static"><?php echo $item->mobile;?></p>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Email</label>
										<div class="col-sm-10">
											<p class="form-control-static"><?php echo $item->email;?></p>
										</div>
									</div>
									<div class="form-group">
										<label for="cover" class="col-sm-2 control-label">Ảnh Bìa</label>
										<div class="col-sm-10">
											<p class="form-control-static"><?php echo $item->cover;?></p>
										</div>
									</div>
									<div class="form-group">
										<label for="avatar" class="col-sm-2 control-label">Ảnh Đại Diện</label>
										<div class="col-sm-10">
											<p class="form-control-static"><?php echo $item->avatar;?></p>
										</div>
									</div>
									<?php if ($item->role != 1) { ?>
									<div class="form-group">
										<label for="role" class="col-sm-2 control-label">Chức Vụ</label>
										<div class="col-sm-10">
											<select id="role" name="role" class="form-control">
												<?php $list_role = Role_Model::show();?>
												<?php foreach ($list_role as $items): ?>
												<?php if ($items->id >= $_SESSION['role']) { ?>
												<option value="<?php echo $items->id;?>" <?php if ($items->id == $item->role) { ?> selected="selected" <?php } ?>><?php echo $items->vi_name;?></option>
												<?php } ?>
												<?php endforeach ?>
											</select><div class="form-control-line"></div>
										</div>
									</div>
									<?php }else{ ?>
									<div class="form-group">
										<label class="col-sm-2 control-label">Chức Vụ</label>
										<div class="col-sm-10">
											<p class="form-control-static"><?php echo Role_Model::get($item->role);?></p>
										</div>
									</div>
									<?php } ?>
									<div class="form-group">
										<label for="textarea13" class="col-sm-2 control-label">Địa Chỉ</label>
										<div class="col-sm-10">
											<p class="form-control-static"><?php echo $item->address;?></p>
										</div>
									</div>
									<button type="submit" name="submit" class="btn ink-reaction btn-raised btn-success">Hoàn Tất</button>
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

