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
			<h2 class="text-primary">Chỉnh Sửa Bình Luận</h2>
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
				if (in_array($_SESSION['role'],[1,2])) {
					$condition = 'publish = :publish';
					$data = array(
						':publish' => RemoveHack($_POST['publish']),
						':id' => $id
					);
					if (Comment_Model::update($condition,$data)) {
						header('Location: '.Config::SITE_URL.'/admincp/?action=comment&mode=edit&id='.$id);
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
							<label class="col-sm-2 control-label">Tên</label>
							<div class="col-sm-10">
								<p class="form-control-static"><?php echo $item->name;?></p>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Emal</label>
							<div class="col-sm-10">
								<p class="form-control-static"><?php echo $item->email;?></p>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Comment</label>
							<div class="col-sm-10">
								<p class="form-control-static"><?php echo $item->comment;?></p>
							</div>
						</div>
						<div class="form-group">
										<label class="col-sm-2 control-label">Trạng Thái</label>
										<div class="col-sm-10">
											<div class="radio radio-styled">
												<label>
													<input type="radio" name="publish" value="1" <?php if ($item->publish == 1) { echo 'checked'; }?>>
													<span>Duyệt</span>
												</label>
											</div>
											<div class="radio radio-styled">
												<label>
													<input type="radio" name="publish" value="0" <?php if ($item->publish == 0) { echo 'checked'; }?>>
													<span>Không Duyệt</span>
												</label>
											</div>
										</div><!--end .col -->
									</div><!--end .form-group -->
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

