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
			<h2 class="text-primary">Chỉnh Sửa Bài Viết</h2>
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
				$condition = 'title = :title, title_seo = :title_seo, description = :description, featured = :featured, category = :category, tags = :tags, content = :content, timeupdate = :timeupdate';
				$data = array(
					':title' => RemoveHack($_POST['title']),
					':title_seo' => RemoveHack($_POST['title_seo']),
					':featured' => RemoveHack($_POST['featured']),
					':category' => RemoveHack($_POST['category']),
					':tags' => RemoveHack($_POST['tags']),
					':description' => RemoveHack($_POST['description']),
					':content' => RemoveHack($_POST['content']),
					':timeupdate' => time(),
					':id' => $id
				);
				if (Post_Model::update($condition,$data)) {
					header('Location: '.Config::SITE_URL.'/admincp/?action=post&mode=edit&id='.$id);
				}else{
					echo '<div class="alert alert-danger" role="alert"><strong>Oh!</strong> Có Lỗi xảy ra, hãy xem lại.</div>';
				}	
			} ?>
			<div class="card">
							<div class="card-body">
								<form class="form-horizontal" role="form" method="post">
									<div class="form-group">
										<label for="title" class="col-sm-2 control-label">Tiêu Đề</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" name="title" value="<?php echo $item->title;?>"><div class="form-control-line"></div>
										</div>
									</div>
									<div class="form-group">
										<label for="featured" class="col-sm-2 control-label">Hình Ảnh</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" name="featured" value="<?php echo $item->featured;?>"><div class="form-control-line"></div>
										</div>
									</div>
									<div class="form-group">
										<label for="category" class="col-sm-2 control-label">Thể Loại</label>
										<div class="col-sm-10">
											<select id="category" name="category" class="form-control">
												<?php $list_cat = Category_Model::get();?>
												<?php foreach ($list_cat as $items): ?>
												<option value="<?php echo $items->id;?>" <?php if ($items->id == $item->category) { ?> selected="selected" <?php } ?>><?php echo $items->name;?></option>
												<?php endforeach ?>
											</select><div class="form-control-line"></div>
										</div>
									</div>
									<div class="form-group">
										<label for="title_seo" class="col-sm-2 control-label">Title_SEO</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" name="title_seo" value="<?php echo $item->title_seo;?>"><div class="form-control-line"></div>
										</div>
									</div>
									<div class="form-group">
										<label for="tags" class="col-sm-2 control-label">Tags</label>
										<div class="col-sm-10">
											<textarea name="tags" class="form-control" rows="2" placeholder=""><?php echo $item->tags;?></textarea><div class="form-control-line"></div>
										</div>
									</div>
									<div class="form-group">
										<label for="textarea13" class="col-sm-2 control-label">Mô tả</label>
										<div class="col-sm-10">
											<textarea name="description" class="form-control" rows="6" placeholder=""><?php echo $item->description;?></textarea><div class="form-control-line"></div>
										</div>
									</div>
									<div class="form-group">
										<label for="content" class="col-sm-2 control-label">Nội Dung</label>
										<div class="col-sm-10">
											<textarea id="ckeditor" name="content" class="form-control" rows="2" placeholder=""><?php echo $item->content;?></textarea><div class="form-control-line"></div>
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

