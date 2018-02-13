<div  <?php if ($part->nameid != '#'): ?>id="<?php echo str_replace('#','',$part->nameid);?>"<?php endif ?> class="why-choose-us-area section section-padding <?php if(Config_Model::get('site_style') == 'app'){ ?> style-2 <?php } ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="section-header text-center">
                    <div class="section-header-icon">
                        <span class="<?php echo Widget_Choose::get('icon');?>"></span>
                    </div>
                    <h2 class="section-title"><?php echo Widget_Choose::get('title');?></h2>
                    <p class="section-subtext"><?php echo Widget_Choose::get('subtext');?></p>
                </div>
            </div>
        </div>
        <!-- end row -->
        <div class="row">

            <div class="col-md-4 col-sm-6 col-xs-12">
                <?php 
                $choose = Choose_Model::get();
                $count = count($choose);
                $count1 = round($count/2);
                $count2 = $count - $count1;
                $j = 1;
                for($i = 0; $i < $count1; $i++) {
                    if ($j-1 === $i) {
                       $j = 1; 
                    }
                ?>
                <?php if (!empty($choose[$i]->id) && $j === 1){ ?>
                <div class="left-block wow animated fadeInUp" data-wow-duration="1.5s">
                    <div class="why-choose-us">
                        <div class="why-choose-us-icon">
                            <div class="icon-background">
                                <span class="<?php echo $choose[$i]->icon;?>"></span>
                            </div>
                        </div>
                        <h4 class="why-choose-us-title"><?php echo $choose[$i]->title;?></h4>
                        <p><?php echo $choose[$i]->subtext;?> </p>
                    </div>
                </div>
                <?php }if (!empty($choose[$i]->id) && $j === 2){ ?>
                <div class="left-block wow animated fadeInUp" data-wow-delay="0.5s" data-wow-duration="1.5s">
                    <div class="why-choose-us">
                        <div class="why-choose-us-icon">
                            <div class="icon-background">
                                <span class="<?php echo $choose[$i]->icon;?>"></span>
                            </div>
                        </div>
                        <h4 class="why-choose-us-title"><?php echo $choose[$i]->title;?></h4>
                        <p><?php echo $choose[$i]->subtext;?> </p>
                    </div>
                </div>
                <?php }if (!empty($choose[$i]->id) && $j === 3){ ?>
                <div class="left-block wow animated fadeInUp" data-wow-delay="1s" data-wow-duration="1.5s">
                    <div class="why-choose-us">
                        <div class="why-choose-us-icon">
                            <div class="icon-background">
                                <span class="<?php echo $choose[$i]->icon;?>"></span>
                            </div>
                        </div>
                        <h4 class="why-choose-us-title"><?php echo $choose[$i]->title;?></h4>
                        <p><?php echo $choose[$i]->subtext;?> </p>
                    </div>
                </div>
                <?php }
                    $j++;
                } ?>
            </div>
            <div class="col-md-4 hidden-sm hidden-xs wow animated fadeInUp" data-wow-delay="0.5s" data-wow-duration="1.5s">
                <div class="wow animated fadeInUp why-choose-center-mock" data-wow-duration="1.5s">
                    <img src="<?php echo Widget_Choose::get('mock');?>" alt="why choose us mock">
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
            <?php
            $j = 1;
                for($i = $count1; $i < $count; $i++) {
                    if ($j-1 === $i) {
                       $j = 1; 
                    }
                ?>
                <?php if (!empty($choose[$i]->id) && $j === 1){ ?>
                <div class="right-block wow animated fadeInUp" data-wow-duration="1.5s">
                    <div class="why-choose-us">
                        <div class="why-choose-us-icon">
                            <div class="icon-background">
                                <span class="<?php echo $choose[$i]->icon;?>"></span>
                            </div>
                        </div>
                        <h4 class="why-choose-us-title"><?php echo $choose[$i]->title;?></h4>
                        <p><?php echo $choose[$i]->subtext;?> </p>
                    </div>
                </div>
                <?php }if (!empty($choose[$i]->id) && $j === 2){ ?>
                <div class="right-block wow animated fadeInUp" data-wow-delay="0.5s" data-wow-duration="1.5s">
                    <div class="why-choose-us">
                        <div class="why-choose-us-icon">
                            <div class="icon-background">
                                <span class="<?php echo $choose[$i]->icon;?>"></span>
                            </div>
                        </div>
                        <h4 class="why-choose-us-title"><?php echo $choose[$i]->title;?></h4>
                        <p><?php echo $choose[$i]->subtext;?> </p>
                    </div>
                </div>
                <?php }if (!empty($choose[$i]->id) && $j === 3){ ?>
                <div class="right-block wow animated fadeInUp" data-wow-delay="1s" data-wow-duration="1.5s">
                    <div class="why-choose-us">
                        <div class="why-choose-us-icon">
                            <div class="icon-background">
                                <span class="<?php echo $choose[$i]->icon;?>"></span>
                            </div>
                        </div>
                        <h4 class="why-choose-us-title"><?php echo $choose[$i]->title;?></h4>
                        <p><?php echo $choose[$i]->subtext;?> </p>
                    </div>
                </div>
                <?php }
                    $j++;
                } ?>
            </div>
        </div>
    </div>
</div>