<!-- BEGIN BASE-->
	<div id="base">
		<!-- BEGIN OFFCANVAS LEFT -->
		<div class="offcanvas">
			 		</div><!--end .offcanvas-->
		<!-- END OFFCANVAS LEFT -->

		<!-- BEGIN CONTENT-->
		<div id="content">
				<section class="style-default-bright">
		<div class="section-header">
			<h2 class="text-primary">Danh Sách Bài Viết</h2>
		</div>
		<div class="section-body">

			<!-- BEGIN DATATABLE 1 -->
			<div class="row">
				<div class="col-md-8">
					<article class="margin-bottom-xxl">
						<p class="lead">
							Quản trị viên và Biên Tập Viên có quyền xem hết bài viết được lưu trữ trên hệ thống. Những chức vụ khác thì chỉ xem được bài viết của mình.
						</p>
					</article>
				</div><!--end .col -->
			</div><!--end .row -->
			<div class="row">
				<div class="col-md-12">
					<h4>Dữ Liệu Bài Viết</h4>
				</div><!--end .col -->
				<div class="col-lg-12">
					<div class="table-responsive">
						<table id="datatable1" class="table table-striped table-hover">
							<thead>
								<tr>
									<th class="sort-numeric">ID</th>
									<th class="sort-alpha">Title</th>
									<th>Featured</th>
									<th>Category</th>
									<th>Author</th>
									<th>Tool</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($list as $item): ?>
								<tr class="gradeX">
									<td><?php echo $item->id;?></td>
									<td><?php echo $item->title;?></td>
									<td><?php echo $item->featured;?></td>
									<td><?php if ($item->category == 0) { echo 'Uncategorized'; }else { echo Category_Model::show($item->category)->name; }?></td>
									<td><?php echo User_Model::show($item->author)->name;?></td>
									<td><a href="?action=post&mode=edit&id=<?php echo $item->id;?>" class="btn ink-reaction btn-sm btn-floating-action btn-info"><i class="md md-edit"></i></a>
									<a href="javascript:void(0);" data-toggle="modal" data-target="#Modal" data-url="?action=post&mode=delete&id=<?php echo $item->id;?>" class="btn ink-reaction btn-sm btn-floating-action btn-danger"><i class="md md-delete"></i></a></td>
								</tr>
								<?php endforeach ?>
							</tbody>
						</table>
					</div><!--end .table-responsive -->
				</div><!--end .col -->
			</div><!--end .row -->
			<!-- END DATATABLE 1 -->

			<hr class="ruler-xxl"/>
			<?php include View::adminView('layouts/popup');?>
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

