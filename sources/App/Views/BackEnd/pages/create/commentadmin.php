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
			<h2 class="text-primary">Tạo Bình Luận Mới</h2>
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
				$condition = 'name, email, user_id, post_id, parent_id, timeupdate, publish, comment';
				$value = ':name, :email, :user_id, :post_id, :parent_id, :timeupdate, :publish, :comment';
				$data = array(
						':name' => User_Model::show($_SESSION['Adminid'])->name,
						':email' => User_Model::show($_SESSION['Adminid'])->email,
						':user_id' => $_SESSION['Adminid'],
						':post_id' => RemoveHack($_POST['post_id']),
						':parent_id' => 0,
						':timeupdate' => time(),
						':publish' => 1,
						':comment' => RemoveHack($_POST['comment'])
					);
				$id = Comment_Model::create($condition,$value,$data);
				if (!empty($id)) {
					header('Location: '.Config::SITE_URL.'/admincp/?action=comment');
				}else{
					echo '<div class="alert alert-danger" role="alert"><strong>Oh!</strong> Có Lỗi xảy ra, hãy xem lại.</div>';
				}
			} ?>
			<div class="card">
				<div class="card-body">
					<form class="form-horizontal" role="form" method="post">
						<div class="form-group">
							<label for="post_id" class="col-sm-2 control-label">ID Bài Viết</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="post_id" required><div class="form-control-line"></div>
							</div>
						</div>
						<div class="form-group">
							<label for="textarea13" class="col-sm-2 control-label">Trả Lời</label>
							<div class="col-sm-10">
								<textarea id="ckeditor" name="comment" class="form-control" rows="5" placeholder=""></textarea><div class="form-control-line"></div>
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

