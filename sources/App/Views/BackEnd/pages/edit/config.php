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
			<h2 class="text-primary">Cài Đặt Web</h2>
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
					$condition = 'content = :content';
					$arr = array('site_avatar','site_description','site_facebook','site_google','site_icon','site_logo','site_name','site_preloader','site_style','site_tags','site_title','site_twitter','site_vimeo','site_youtube');
					foreach ($arr as $item) {
						$data = array(
						':content' => RemoveHack($_POST[$item]),
						':name' => $item
						);
						if (Config_Model::update($condition,$data)) {
							header('Location: '.Config::SITE_URL.'/admincp/?action=config');
						}else{
							echo '<div class="alert alert-danger" role="alert"><strong>Oh!</strong> Có Lỗi xảy ra, hãy xem lại.</div>';
						}
					}
				}else{
					echo '<div class="alert alert-danger" role="alert"><strong>Oh!</strong> Bạn không đủ quyền</div>';
				}
			} ?>
			<div class="card">
				<div class="card-body">
					<form class="form" role="form" method="post">
						<div class="form-group floating-label">
							<input type="text" class="form-control" name="site_avatar" value="<?php echo Config_Model::get('site_avatar');?>">
							<label for="site_avatar">Avatar Mặc Định</label>
						</div>	
						<div class="form-group floating-label">
							<input type="text" class="form-control" name="site_facebook" value="<?php echo Config_Model::get('site_facebook');?>">
							<label for="site_facebook">Facebook</label>
						</div>	
						<div class="form-group floating-label">
							<input type="text" class="form-control" name="site_google" value="<?php echo Config_Model::get('site_google');?>">
							<label for="site_google">Google</label>
						</div>	
						<div class="form-group floating-label">
							<input type="text" class="form-control" name="site_twitter" value="<?php echo Config_Model::get('site_twitter');?>">
							<label for="site_twitter">Twitter</label>
						</div>
						<div class="form-group floating-label">
							<input type="text" class="form-control" name="site_vimeo" value="<?php echo Config_Model::get('site_vimeo');?>">
							<label for="site_vimeo">Vimdeo</label>
						</div>
						<div class="form-group floating-label">
							<input type="text" class="form-control" name="site_youtube" value="<?php echo Config_Model::get('site_youtube');?>">
							<label for="site_youtube">Youtube</label>
						</div>
						<div class="form-group floating-label">
							<input type="text" class="form-control" name="site_icon" value="<?php echo Config_Model::get('site_icon');?>">
							<label for="site_icon">Icon</label>
						</div>
						<div class="form-group floating-label">
							<input type="text" class="form-control" name="site_logo" value="<?php echo Config_Model::get('site_logo');?>">
							<label for="site_logo">Logo</label>
						</div>
						<div class="form-group floating-label">
							<input type="text" class="form-control" name="site_name" value="<?php echo Config_Model::get('site_name');?>">
							<label for="site_name">Name</label>
						</div>
						<div class="form-group floating-label">
							<input type="text" class="form-control" name="site_style" value="<?php echo Config_Model::get('site_style');?>">
							<label for="site_style">Style (Có 2 Style là: app/music)</label>
						</div>
						<div class="form-group floating-label">
							<input type="text" class="form-control" name="site_title" value="<?php echo Config_Model::get('site_title');?>">
							<label for="site_title">Title</label>
						</div>
						<div class="form-group floating-label">
							<textarea name="site_tags" class="form-control" rows="3" placeholder=""><?php echo Config_Model::get('site_tags');?></textarea>
							<label for="icon">Thẻ Tags</label>
						</div>	
						<div class="form-group floating-label">
							<textarea name="site_description" class="form-control" rows="3" placeholder=""><?php echo Config_Model::get('site_description');?></textarea>
							<label for="icon">Mô tả</label>
						</div>	
						<div class="form-group floating-label">
							<input type="text" class="form-control" name="site_preloader" value="<?php echo Config_Model::get('site_preloader');?>">
							<label for="site_preloader">Preloader (Khi truy cập sẽ xuất hiện icon load)</label>
							<p class="help-block">Nhập 0 Để Ẩn/ 1 Để Hiện</p>
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

