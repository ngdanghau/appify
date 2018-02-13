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
			<h2 class="text-primary">Chỉnh Sửa Menu</h2>
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
					$condition = 'name = :name, hyperlink = :hyperlink, parent_id= :parent_id';
					$data = array(
						':name' => RemoveHack($_POST['name']),
						':hyperlink' => RemoveHack($_POST['hyperlink']),
						':parent_id' => RemoveHack($_POST['parent_id']),
						':id' => $id
					);
					if (Menu_Model::update($condition,$data)) {
						header('Location: '.Config::SITE_URL.'/admincp/?action=menu&mode=edit&id='.$id);
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
										<label for="name" class="col-sm-2 control-label">Tên</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" name="name" value="<?= $item->name;?>"><div class="form-control-line"></div>
										</div>
									</div>
									<div class="form-group">
										<label for="hyperlink" class="col-sm-2 control-label">Siêu Liên Kết</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" name="hyperlink" value="<?= $item->hyperlink;?>"><div class="form-control-line"></div>
										</div>
									</div>
									<div class="form-group">
										<label for="parent_id" class="col-sm-2 control-label">Menu Con Của</label>
										<div class="col-sm-10">
											<select id="parent_id" name="parent_id" class="form-control">
												<option value="0"></option>
												<?php $list_cat = Menu_Model::get('parent_id = 0');?>
												<?php foreach ($list_cat as $items): ?>
												<option value="<?php echo $items->id;?>" <?php if ($items->id == $item->parent_id) { ?> selected="selected" <?php } ?>><?php echo $items->name;?></option>
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

