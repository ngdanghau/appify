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
				if ($_SESSION['Adminid'] == 1) {
					$condition = 'username = :username, name = :name, mobile= :mobile, email = :email, address = :address, facebook = :facebook';
					$data = array(
						':username' => RemoveHack($_POST['username']),
						':name' => RemoveHack($_POST['name']),
						':mobile' => RemoveHack($_POST['mobile']),
						':email' => RemoveHack($_POST['email']),
						':address' => RemoveHack($_POST['address']),
						':facebook' => RemoveHack($_POST['facebook']),
						':id' => $id
					);
					if (User_Model::updateAdmin($condition,$data)) {
						header('Location: '.Config::SITE_URL.'/admincp/?action=admin&mode=edit&id='.$id);
					}else{
						echo '<div class="alert alert-danger" role="alert"><strong>Oh!</strong> Có Lỗi xảy ra, hãy xem lại.</div>';
					}
				}else{
					$condition = 'name = :name, mobile= :mobile, address = :address, facebook = :facebook';
					$data = array(
						':name' => RemoveHack($_POST['name']),
						':mobile' => RemoveHack($_POST['mobile']),
						':address' => RemoveHack($_POST['address']),
						':facebook' => RemoveHack($_POST['facebook']),
						':id' => $id
					);
					if (User_Model::updateAdmin($condition,$data)) {
						header('Location: '.Config::SITE_URL.'/admincp/?action=admin&mode=edit&id='.$id);
					}else{
						echo '<div class="alert alert-danger" role="alert"><strong>Oh!</strong> Có Lỗi xảy ra, hãy xem lại.</div>';
					}
				}
					
			}elseif (isset($_POST['update'])) {
				$condition = 'role = :role';
					$data = array(
						':role' => RemoveHack($_POST['role']),
						':id' => $id
					);
					if (User_Model::updateAdmin($condition,$data)) {
						if ($_POST['role'] == 1) {
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
									<?php if (($item->id == $_SESSION['Adminid'])) { ?>
									<?php if ($item->role == 1) { ?>
									<div class="form-group">
										<label for="username" class="col-sm-2 control-label">Tên Đăng Nhập</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" name="username" value="<?php echo $item->username;?>"><div class="form-control-line"></div>
										</div>
									</div>
									<?php }else{ ?>
									<div class="form-group">
										<label class="col-sm-2 control-label">Tên Đăng Nhập</label>
										<div class="col-sm-10">
											<p class="form-control-static"><?php echo $item->username;?></p>
										</div>
									</div>
									<?php } ?>
									<div class="form-group">
										<label for="name" class="col-sm-2 control-label">Họ Và Tên</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" name="name" value="<?php echo $item->name;?>"><div class="form-control-line"></div>
										</div>
									</div>
									<div class="form-group">
										<label for="mobile" class="col-sm-2 control-label">Số Điện Thoại</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" name="mobile" value="<?php echo $item->mobile;?>"><div class="form-control-line"></div>
										</div>
									</div>
									<?php if ($item->role == 1) { ?>
									<div class="form-group">
										<label for="email" class="col-sm-2 control-label">Email</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" name="email" value="<?php echo $item->email;?>"><div class="form-control-line"></div>
										</div>
									</div>
									<?php }else{ ?>
									<div class="form-group">
										<label class="col-sm-2 control-label">Email</label>
										<div class="col-sm-10">
											<p class="form-control-static"><?php echo $item->email;?></p>
										</div>
									</div>
									<?php } ?>
									<div class="form-group">
										<label for="cover" class="col-sm-2 control-label">Ảnh Bìa</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" name="cover" value="<?php echo $item->cover;?>"><div class="form-control-line"></div>
										</div>
									</div>
									<div class="form-group">
										<label for="avatar" class="col-sm-2 control-label">Ảnh Đại Diện</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" name="avatar" value="<?php echo $item->avatar;?>"><div class="form-control-line"></div>
										</div>
									</div>
									<?php if (in_array($_SESSION['role'],array(1,2,3))) { ?>
									<div class="form-group">
										<label class="col-sm-2 control-label">Chức Vụ</label>
										<div class="col-sm-10">
											<p class="form-control-static"><?php echo Role_Model::get($item->role);?></p>
										</div>
									</div>
									<?php }else{ ?>
									<div class="form-group">
										<label for="role" class="col-sm-2 control-label">Chức Vụ </label>
										<div class="col-sm-10">
											<select id="role" name="role" class="form-control">
												<?php $list_role = Role_Model::show();?>
												<?php foreach ($list_role as $items): ?>
												<?php if ($_SESSION['role'] <= $items->id): ?>
												<option value="<?php echo $items->id;?>" <?php if ($items->id == $item->role) { ?> selected="selected" <?php } ?>><?php echo $items->vi_name;?></option>
												<?php endif ?>
												<?php endforeach ?>
											</select><div class="form-control-line"></div>
										</div>
									</div>
									<?php } ?>
									<div class="form-group">
										<label for="textarea13" class="col-sm-2 control-label">Địa Chỉ</label>
										<div class="col-sm-10">
											<textarea name="address" name="address" class="form-control" rows="2" placeholder=""><?php echo $item->address;?></textarea><div class="form-control-line"></div>
										</div>
									</div>
									<div class="form-group">
										<label for="facebook" class="col-sm-2 control-label">Facebook</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" name="facebook" value="<?php echo $item->facebook;?>"><div class="form-control-line"></div>
										</div>
									</div>
									<button type="submit" name="submit" class="btn ink-reaction btn-raised btn-success">Hoàn Tất</button>
									<button type="reset" class="btn ink-reaction btn-raised btn-primary">Làm Lại</button>
									<?php }else{ ?>
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
									<div class="form-group">
										<label for="facebook" class="col-sm-2 control-label">Facebook</label>
										<div class="col-sm-10">
											<p class="form-control-static"><?php echo $item->facebook;?></p>
										</div>
									</div>
									<button type="submit" name="update" class="btn ink-reaction btn-raised btn-success">Hoàn Tất</button>
									<?php } ?>
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

