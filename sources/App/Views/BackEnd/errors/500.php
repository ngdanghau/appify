<!-- BEGIN BASE-->
		<div id="base">

			<!-- BEGIN OFFCANVAS LEFT -->
			<div class="offcanvas">
			</div><!--end .offcanvas-->
			<!-- END OFFCANVAS LEFT -->

			<!-- BEGIN CONTENT-->
			<div id="content">

				<!-- BEGIN 500 MESSAGE -->
				<section>
					<div class="section-header">
						<ol class="breadcrumb">
							<li><a href="../../html/.html">home</a></li>
							<li class="active">500</li>
						</ol>
					</div>
					<div class="section-body contain-lg">
						<div class="row">
							<div class="col-lg-12 text-center">
								<h1><span class="text-xxxl text-light">500 <i class="fa fa-exclamation-circle text-danger"></i></span></h1>
								<h2 class="text-light">Oops! Something went wrong</h2>
							</div><!--end .col -->
						</div><!--end .row -->
					</div><!--end .section-body -->
				</section>
				<!-- END 500 MESSAGE -->

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
