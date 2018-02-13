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
			<h2 class="text-primary">Cài Đặt Widget Pricing</h2>
		</div>
		<div class="section-body">
			<div class="row">
				<div class="col-md-8">
					<article class="margin-bottom-xxl">
						<p class="lead">
							Thay Đổi Thông Tin Bên Dưới phù hợp. Riêng tên icon bạn hãy <a target="_blank" href="https://themify.me/themify-icons" class="text-primary
">Vào Đây</a>
						</p>
					</article>
				</div><!--end .col -->
			</div>
			<?php 
			if (isset($_POST['submit'])){
				$condition = 'content = :content';
				$arr = array('icon','title','subtext');
				foreach ($arr as $item) {
					$data = array(
					':content' => $_POST[$item],
					':name' => $item
					);
					if (Widget_Pricing::update($condition,$data)) {
						header('Location: '.Config::SITE_URL.'/admincp/?action=pricing&mode=config');
					}else{
						echo '<div class="alert alert-danger" role="alert"><strong>Oh!</strong> Có Lỗi xảy ra, hãy xem lại.</div>';
					}
				}
			} ?>
			<div class="card">
				<div class="card-body">
					<form class="form" role="form" method="post">
						<div class="form-group floating-label">
							<input type="text" class="form-control" name="icon" value="<?php echo Widget_Pricing::get('icon');?>">
							<label for="icon">Icon</label>
						</div>	
						<div class="form-group floating-label">
							<input type="text" class="form-control" name="title" value="<?php echo Widget_Pricing::get('title');?>">
							<label for="title">Title</label>
						</div>	
						<div class="form-group floating-label">
							<textarea name="subtext" class="form-control" rows="2" placeholder=""><?php echo Widget_Pricing::get('subtext');?></textarea>
							<label for="icon">Subtext</label>
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

