<div  <?php if ($part->nameid != '#'): ?>id="<?php echo str_replace('#','',$part->nameid);?>"<?php endif ?> class="pricing section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="section-header text-center">
                    <div class="section-header-icon">
                        <span class="<?php echo Widget_Pricing::get('icon'); ?>"></span>
                    </div>
                    <h2 class="section-title"><?php echo Widget_Pricing::get('title'); ?></h2>
                    <p class="section-subtext"><?php echo Widget_Pricing::get('subtext'); ?> </p>
                </div>
            </div>
        </div>
        <!-- end row -->
        <div class="row">
            <div class="price-items">
                <?php
                $pricing = Pricing_Model::get();
                for($i = 0; $i < $count = count($pricing); $i+=3) {
                ?>
                <?php if (!empty($pricing[$i]->id)){ ?>
                <!-- pricing table -->
                <div class="col-md-4">
                    <div class="price-item wow animated fadeInUp" data-wow-duration="1.5s">
                        <h4 class="pack-name"><?php echo $pricing[$i]->name;?></h4>
                        <div class="pack-price"><?php echo $pricing[$i]->price;?></div>
                        <ul class="pack-features">
                            <?php $features = explode('||',$pricing[$i]->features);
                            foreach ($features as $item) {?>
                            <li><?php echo $item;?></li>
                            <?php } ?>
                        </ul>
                        <a href="<?php echo $pricing[$i]->purchase;?>" class="btn pack-btn">Purchase Now</a>
                    </div>
                </div>
                <?php }if (!empty($pricing[$i+1]->id)){ ?>
                <!-- pricing table -->
                <div class="col-md-4">
                    <div class="price-item active wow animated fadeInUp" data-wow-delay="0.5s" data-wow-duration="1.5s">
                        <h4 class="pack-name"><?php echo $pricing[$i+1]->name;?></h4>
                        <div class="pack-price"><?php echo $pricing[$i+1]->price;?></div>
                        <ul class="pack-features">
                            <?php $features = explode('||',$pricing[$i+1]->features);
                            foreach ($features as $item) {?>
                            <li><?php echo $item;?></li>
                            <?php } ?>
                        </ul>
                        <a href="<?php echo $pricing[$i+1]->purchase;?>" class="btn pack-btn">Purchase Now</a>
                    </div>
                </div>
                <?php }if (!empty($pricing[$i+2]->id)){ ?>
                <!-- pricing table -->
                <div class="col-md-4">
                    <div class="price-item wow animated fadeInUp" data-wow-delay="1s" data-wow-duration="1.5s">
                        <h4 class="pack-name"><?php echo $pricing[$i+2]->name;?></h4>
                        <div class="pack-price"><?php echo $pricing[$i+2]->price;?></div>
                        <ul class="pack-features">
                            <?php $features = explode('||',$pricing[$i+2]->features);
                            foreach ($features as $item) {?>
                            <li><?php echo $item;?></li>
                            <?php } ?>
                        </ul>
                        <a href="<?php echo $pricing[$i+2]->purchase;?>" class="btn pack-btn">Purchase Now</a>
                    </div>
                </div>
                <?php }} ?>
            </div>
        </div>
    </div>
</div>