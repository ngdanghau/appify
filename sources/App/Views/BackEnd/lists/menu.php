<!-- BEGIN BASE-->
	<div id="base">
		<!-- BEGIN OFFCANVAS LEFT -->
		<div class="offcanvas">
			 		</div><!--end .offcanvas-->
		<!-- END OFFCANVAS LEFT -->

		<!-- BEGIN CONTENT-->
		<div id="content">
				<section >
		<div class="section-header">
			<h2 class="text-primary">Cấu Trúc Menu</h2>
		</div>
		<div class="section-body">

			<!-- BEGIN DATATABLE 1 -->
			<div class="row">
				<div class="col-md-8">
					<article class="margin-bottom-xxl">
						<p class="lead">
							Chú ý khi xóa menu có kèm theo menu con thì cả menu đó lẫn menu con sẽ mất.
							Siêu liên kết của menu mẹ phải bắt đầu bằng '#' kèm theo tên của id phần tử widgets.
							vd. #banner-area
							Tên của ID phần tử chính là Tên ID trong phần Widgets->Cài đặt chung
						</p>
					</article>
				</div><!--end .col -->
			</div><!--end .row -->
			<div class="row">
				<div class="col-md-12">
					<h4>Dữ Liệu Menu</h4>
				</div><!--end .col -->
				<div class="col-lg-12">
					<div class="panel-group" id="accordion1">
						<?php foreach ($list as $item): ?>
							<?php 
							$lists = Menu_Model::get("parent_id = $item->id");
							if (!empty($lists)){ ?>
						<div class="card panel">
							<div class="card-head collapsed" data-toggle="collapse" data-parent="#accordion1" data-target="#accordion1-<?php echo $item->id;?>" aria-expanded="false">
								<header><?php echo $item->name;?></header>
								<div class="tools">
									<a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
								</div>
							</div>
							<div id="accordion1-<?php echo $item->id;?>" class="collapse" aria-expanded="false" style="height: 0px;">
								<div class="card-body">
									<p>Siêu Liên Kết: <a href="<?php echo $item->hyperlink;?>" title=""><?php echo $item->hyperlink;?></a></p>
									<a href="?action=menu&mode=edit&id=<?php echo $item->id;?>" class="btn ink-reaction btn-sm btn-floating-action btn-info"><i class="md md-edit"></i></a>
									<a href="javascript:void(0);" data-toggle="modal" data-target="#Modal" data-url="?action=menu&mode=delete&id=<?php echo $item->id;?>" class="btn ink-reaction btn-sm btn-floating-action btn-danger"><i class="md md-delete"></i></a>
								</div>
							</div>
						</div><!--end .panel -->
						<?php foreach ($lists as $items){ ?>
						<div class="card panel" style="margin-left: 50px">
							<div class="card-head collapsed" data-toggle="collapse" data-parent="#accordion1" data-target="#accordion1-<?php echo $items->id;?>" aria-expanded="false">
								<header><?php echo $items->name;?></header>
								<div class="tools">
									<a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
								</div>
							</div>
							<div id="accordion1-<?php echo $items->id;?>" class="collapse" aria-expanded="false" style="height: 0px;">
								<div class="card-body"><p>Siêu Liên Kết: <a href="<?php echo $items->hyperlink;?>" title=""><?php echo $items->hyperlink;?></a></p>
									<a href="?action=menu&mode=edit&id=<?php echo $items->id;?>" class="btn ink-reaction btn-sm btn-floating-action btn-info"><i class="md md-edit"></i></a>
									<a href="javascript:void(0);" data-toggle="modal" data-target="#Modal" data-url="?action=menu&mode=delete&id=<?php echo $items->id;?>" class="btn ink-reaction btn-sm btn-floating-action btn-danger"><i class="md md-delete"></i></a>
								</div>
							</div>
						</div><!--end .panel -->
						<?php } ?>
							<?php }else{ ?>
						<div class="card panel">
							<div class="card-head collapsed" data-toggle="collapse" data-parent="#accordion1" data-target="#accordion1-<?php echo $item->id;?>" aria-expanded="false">
								<header><?php echo $item->name;?></header>
								<div class="tools">
									<a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
								</div>
							</div>
							<div id="accordion1-<?php echo $item->id;?>" class="collapse" aria-expanded="false" style="height: 0px;">
								<div class="card-body"><p>Siêu Liên Kết: <a href="<?php echo $item->hyperlink;?>" title=""><?php echo $item->hyperlink;?></a></p>
									<a href="?action=menu&mode=edit&id=<?php echo $item->id;?>" class="btn ink-reaction btn-sm btn-floating-action btn-info"><i class="md md-edit"></i></a>
									<a href="javascript:void(0);" data-toggle="modal" data-target="#Modal" data-url="?action=menu&mode=delete&id=<?php echo $item->id;?>" class="btn ink-reaction btn-sm btn-floating-action btn-danger"><i class="md md-delete"></i></a>
								</div>
							</div>
						</div><!--end .panel -->
						<?php } ?>
						<?php endforeach ?>
					</div>
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

