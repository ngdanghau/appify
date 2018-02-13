<div  <?php if ($part->nameid != '#'): ?>id="<?php echo str_replace('#','',$part->nameid);?>"<?php endif ?> class="screenshot section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="section-header text-center">
                    <div class="section-header-icon">
                        <span class="<?php echo Widget_Screenshot::get('icon');?>"></span>
                    </div>
                    <h2 class="section-title"><?php echo Widget_Screenshot::get('title');?></h2>
                    <p class="section-subtext"><?php echo Widget_Screenshot::get('subtext');?> </p>
                </div>
            </div>
        </div>
        <!-- end row -->
        <div class="row">
            <div class="col-xs-12">
                <div class="screen-mock screenshot-mock-2"></div>
                <div class="screenshot-wrap">
                    <div class="owl-carousel screenshot-carousel" id="screenshot-carousel">
                        <?php 
                        $screenshot = Screenshot_Model::get();
                        foreach ($screenshot as $item) {?>
                        <img src="<?php echo $item->src;?>" alt="<?php echo $item->title;?>">
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>