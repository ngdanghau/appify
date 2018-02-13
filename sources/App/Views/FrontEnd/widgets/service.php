<div  <?php if ($part->nameid != '#'): ?>id="<?php echo str_replace('#','',$part->nameid);?>"<?php endif ?> class="service-area section section-padding <?php if(Config_Model::get('site_style') == 'app'){ ?> service-area-bg-2 <?php } ?>">
    <div class="container">
        <div class="row">
            <div class="services">
                <?php 
                    $service = Service_Model::get();
                    for($i = 0; $i < $count = count($service); $i+=3) {
                ?>
                <?php if (!empty($service[$i]->id)){ ?>
                <div class="col-md-4">
                    <!-- service item -->
                    <div class="service wow animated fadeInUp" data-wow-duration="1.5s">
                        <div class="service-icon">
                            <span class="<?php echo $service[$i]->icon;?>"></span>
                        </div>
                        <h4 class="service-title"><?php echo $service[$i]->title;?></h4>
                        <p><?php echo $service[$i]->subtext;?></p>
                    </div>
                </div>
                <?php }if (!empty($service[$i+1]->id)){ ?>
                <div class="col-md-4">
                    <!-- service item -->
                    <div class="service wow animated fadeInUp" data-wow-delay="0.5s" data-wow-duration="1.5s">
                        <div class="service-icon">
                            <span class="<?php echo $service[$i+1]->icon;?>"></span>
                        </div>
                        <h4 class="service-title"><?php echo $service[$i+1]->title;?></h4>
                        <p><?php echo $service[$i+1]->subtext;?></p>
                    </div>
                </div>
                <?php }if (!empty($service[$i+2]->id)){ ?>
                <div class="col-md-4">
                    <!-- service item -->
                    <div class="service wow animated fadeInUp" data-wow-delay="1s" data-wow-duration="1.5s">
                        <div class="service-icon">
                            <span class="<?php echo $service[$i+2]->icon;?>"></span>
                        </div>
                        <h4 class="service-title"><?php echo $service[$i+2]->title;?></h4>
                        <p><?php echo $service[$i+2]->subtext;?></p>
                    </div>
                </div>
                <?php }} ?>
            </div>
        </div>
        <!-- end row -->
    </div>
</div>