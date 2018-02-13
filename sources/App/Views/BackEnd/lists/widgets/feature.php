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
			<h2 class="text-primary">Danh Sách Feature</h2>
		</div>
		<div class="section-body">

			<!-- BEGIN DATATABLE 1 -->
			<div class="row">
				<div class="col-md-8">
					<article class="margin-bottom-xxl">
						<p class="lead">
							DataTables is a plug-in for the jQuery Javascript library. 
							It is a highly flexible tool, based upon the foundations of progressive enhancement, and will add advanced interaction controls to any HTML table.
						</p>
					</article>
				</div><!--end .col -->
			</div><!--end .row -->
			<div class="row">
				<div class="col-md-12">
					<h4>Dữ Liệu Feature</h4>
				</div><!--end .col -->
				<div class="col-lg-12">
					<div class="table-responsive">
						<table id="datatable1" class="table table-striped table-hover">
							<thead>
								<tr>
									<th class="sort-numeric">ID</th>
									<th class="sort-alpha">Icon</th>
									<th>Title</th>
									<th>Entry</th>
									<?php if ($_SESSION['role'] == 1): ?>
									<th>Tool</th>
									<?php endif ?>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($list as $item): ?>
								<tr class="gradeX">
									<td><?php echo $item->id;?></td>
									<td><?php echo $item->icon;?></td>
									<td><?php echo $item->title;?></td>
									<td><?php echo $item->entry;?></td>
									<?php if ($_SESSION['role'] == 1): ?>
									<td><a href="?action=feature&mode=edit&id=<?php echo $item->id;?>" class="btn ink-reaction btn-sm btn-floating-action btn-info"><i class="md md-edit"></i></a>
									<a href="javascript:void(0);" data-toggle="modal" data-target="#Modal" data-url="?action=feature&mode=delete&id=<?php echo $item->id;?>" class="btn ink-reaction btn-sm btn-floating-action btn-danger"><i class="md md-delete"></i></a></td>
									<?php endif ?>
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

