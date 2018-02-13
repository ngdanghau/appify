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
			<h2 class="text-primary">Chỉnh Sửa Widgets</h2>
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
					$condition = 'name = :name, nameid = :nameid, hide = :hide';
					$data = array(
						':name' => RemoveHack($_POST['name']),
						':nameid' => RemoveHack($_POST['nameid']),
						':hide' => RemoveHack($_POST['hide']),
						':id' => $id
					);
					if (Widget_Model::update($condition,$data)) {
						header('Location: '.Config::SITE_URL.'/admincp/?action=widgets&mode=edit&id='.$id);
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
											<input type="text" class="form-control" name="name" value="<?php echo $item->name;?>"><div class="form-control-line"></div>
										</div>
									</div>
									<div class="form-group">
										<label for="nameid" class="col-sm-2 control-label">Nameid</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" name="nameid" value="<?php echo $item->nameid;?>"><div class="form-control-line"></div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Trạng Thái</label>
										<div class="col-sm-10">
											<div class="radio radio-styled">
												<label>
													<input type="radio" name="hide" value="1" <?php if ($item->hide == 1) { echo 'checked'; }?>>
													<span>Ẩn</span>
												</label>
											</div>
											<div class="radio radio-styled">
												<label>
													<input type="radio" name="hide" value="0" <?php if ($item->hide == 0) { echo 'checked'; }?>>
													<span>Hiện</span>
												</label>
											</div>
										</div><!--end .col -->
									</div><!--end .form-group -->
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

