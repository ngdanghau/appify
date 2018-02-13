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
			<h2 class="text-primary">File Manager</h2>
		</div>
		<div class="section-body">

			<!-- BEGIN DATATABLE 1 -->
			<div class="row">
				<div class="col-md-8">
					<article class="margin-bottom-xxl">
						<p class="lead">
							Nơi Quản Lý Ảnh Của Web
						</p>
					</article>
				</div><!--end .col -->
			</div><!--end .row -->
			<div class="row">
				<div class="col-lg-12">
					<section class="ckfinder-demo">
					  <div class="section-container">
					    <div class="div" id="ckfinder-widget"></div>
					    
					  </div>
					</section>
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

