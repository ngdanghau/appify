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
			<h2 class="text-primary">Chỉnh Sửa Lý Do</h2>
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
					$condition = 'icon = :icon, title = :title, subtext = :subtext';
					$data = array(
						':icon' => RemoveHack($_POST['icon']),
						':title' => RemoveHack($_POST['title']),
						':subtext' => RemoveHack($_POST['subtext']),
						':id' => $id
					);
					if (Choose_Model::update($condition,$data)) {
						header('Location: '.Config::SITE_URL.'/admincp/?action=choose&mode=edit&id='.$id);
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
										<label for="icon" class="col-sm-2 control-label">Icon</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" name="icon" value="<?php echo $item->icon;?>"><div class="form-control-line"></div>
										</div>
									</div>
									<div class="form-group">
										<label for="title" class="col-sm-2 control-label">Title</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" name="title" value="<?php echo $item->title;?>"><div class="form-control-line"></div>
										</div>
									</div>
									<div class="form-group">
										<label for="subtext" class="col-sm-2 control-label">Subtext</label>
										<div class="col-sm-10">
											<textarea name="subtext" class="form-control" rows="2" placeholder=""><?php echo $item->subtext;?></textarea><div class="form-control-line"></div>
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

