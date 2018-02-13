<div  <?php if ($part->nameid != '#'): ?>id="<?php echo str_replace('#','',$part->nameid);?>"<?php endif ?> class="feture section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="section-header text-center">
                    <div class="section-header-icon">
                        <span class="<?php echo Widget_Feature::get('icon');?>"></span>
                    </div>
                    <h2 class="section-title"><?php echo Widget_Feature::get('title');?></h2>
                    <p class="section-subtext"><?php echo Widget_Feature::get('subtext');?> </p>
                </div>
            </div>
        </div>
        <!-- end row -->
        <div class="row">
            <div class="col-md-5">
                <div class="fetures features-left">
                	<?php 
                	$feature = Feature_Model::get();
                	for($i = 0; $i < $count = count($feature); $i+=3) {
                	?>
                	<?php if (!empty($feature[$i]->id)){ ?>
                    <!-- feature item -->
                    <div class="feture-item wow animated fadeInUp" data-wow-duration="1.5s">
                        <div class="feture-icon">
                            <span class="<?php echo $feature[$i]->icon;?>"></span>
                        </div>
                        <div class="feture-content">
                            <h4 class="feture-title"><?php echo $feature[$i]->title;?></h4>
                            <p class="feture-entry"><?php echo $feature[$i]->entry;?> </p>
                        </div>
                    </div>
                    <?php }if (!empty($feature[$i+1]->id)){ ?>
                    <!-- feature item -->
                    <div class="feture-item wow animated fadeInUp" data-wow-delay="0.5s" data-wow-duration="1.5s">
                        <div class="feture-icon">
                            <span class="<?php echo $feature[$i+1]->icon;?>"></span>
                        </div>
                        <div class="feture-content">
                            <h4 class="feture-title"><?php echo $feature[$i+1]->title;?></h4>
                            <p class="feture-entry"><?php echo $feature[$i+1]->entry;?> </p>
                        </div>
                    </div>
                    <?php }if (!empty($feature[$i+2]->id)){ ?>
                    <!-- feature item -->
                    <div class="feture-item wow animated fadeInUp" data-wow-delay="1s" data-wow-duration="1.5s">
                        <div class="feture-icon">
                            <span class="<?php echo $feature[$i+2]->icon;?>"></span>
                        </div>
                        <div class="feture-content">
                            <h4 class="feture-title"><?php echo $feature[$i+2]->title;?></h4>
                            <p class="feture-entry"><?php echo $feature[$i+2]->entry;?> </p>
                        </div>
                    </div>
                    <?php }} ?>
                </div>
            </div>
            <div class="col-md-7 hidden-sm hidden-xs wow animated fadeInUp" data-wow-delay="0.5s" data-wow-duration="1.5s">
                <div class="feture-mock featured-mock-2">
                    <img class="img-responsive" src="<?php echo Widget_Feature::get('mock');?>" alt="Feature mock">
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
</div>