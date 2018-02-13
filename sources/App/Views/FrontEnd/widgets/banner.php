<div <?php if ($part->nameid != '#'): ?>id="<?php echo str_replace('#','',$part->nameid);?>"<?php endif ?> data-stellar-background-ratio="0.5" class="banner parallax">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-7">
                <div class="left-part wow animated fadeInUp" data-wow-delay="0.5s" data-wow-duration="1.5s">
                    <div class="banner-content">
                        <h1 class="banner-title">
                        	<?php echo Widget_Banner::get('title');?>
                        <div class="button-group">
                            <a class="btn play-store" href="<?php echo Widget_Banner::get('play-store');?>"><i class="fa fa-android"></i> Play Store</a>
                            <a class="btn app-store" href="<?php echo Widget_Banner::get('app-store');?>"><i class="fa fa-apple"></i> App Store</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-5 hidden-sm hidden-xs">
                <div class="right-part wow animated fadeInUp" data-wow-delay="1s" data-wow-duration="1.5s">
                    <div class="banner-mock">
                    	<?php if (Widget_Banner::get('front-mock') != null): ?>
                    	<img class="front-mock" src="<?php echo Widget_Banner::get('front-mock');?>" alt="Banner App screen phone">
                    	<?php endif ?>
                        <?php if (Widget_Banner::get('back-mock') != null): ?>
                        <img class="back-mock" src="<?php echo Widget_Banner::get('back-mock');?>" alt="Banner app screen">
                        <?php endif ?>
                    </div>
                </div>
            </div>
            <div class="banner-play-button">
                <a href="<?php echo Widget_Banner::get('video');?>" class="btn play-btn video-play wow animated fadeInUp" data-wow-delay="1.5s" data-wow-duration="1.5s">
                    <span class="btn-icon">
                            <i class="fa fa-play"></i>
                        </span>
                </a>
            </div>
        </div>
    </div>
</div>