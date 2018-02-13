<!-- BEGIN OFFCANVAS SEARCH -->
		<div id="offcanvas-search" class="offcanvas-pane width-8">
			<div class="offcanvas-head">
				<header class="text-primary">Search</header>
				<div class="offcanvas-tools">
					<a class="btn btn-icon-toggle btn-default-light pull-right" data-dismiss="offcanvas">
						<i class="md md-close"></i>
					</a>
				</div>
			</div>
			<?php
	            $arr = [1,2,3];
	            $word = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
			?>
			<div class="offcanvas-body no-padding">
				<ul class="list ">
					<?php foreach ($word as $item) {?>
					<?php $list = User_Model::inAdmin($arr,$item);
					if ($list) {?>
					<li class="tile divider-full-bleed">
						<div class="tile-content">
							<div class="tile-text"><strong><?php echo $item;?></strong></div>
						</div>
					</li>
					<?php foreach ($list as $items) {?>
					<li class="tile">
						<a class="tile-content ink-reaction" href="?action=admin&mode=show&id=<?php echo $items->id;?>" data-backdrop="false">
							<div class="tile-icon">
								<img src="<?php echo $items->avatar;?>" alt="" />
							</div>
							<div class="tile-text">
								<?php echo $items->name;?>
								<small><?php echo Role_Model::get($items->role);?></small>
							</div>
						</a>
					</li>
					<?php }} ?>
					<?php } ?>
				</ul>
			</div><!--end .offcanvas-body -->
		</div><!--end .offcanvas-pane -->
		<!-- END OFFCANVAS SEARCH -->