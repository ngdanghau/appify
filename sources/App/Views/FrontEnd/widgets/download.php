<div  <?php if ($part->nameid != '#'): ?>id="<?php echo str_replace('#','',$part->nameid);?>"<?php endif ?> class="download sectioon-padding parallax" data-stellar-background-ratio="0.5">
    <div class="img-overlay">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-header-white text-center">
                        <div class="section-header-white-icon">
                            <span class="<?php echo Widget_Download::get('icon');?>"></span>
                        </div>
                        <h2 class="section-white-title"><?php echo Widget_Download::get('title');?></h2>
                        <p class="section-subtext"><?php echo Widget_Download::get('subtext');?></p>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <div class="download-links wow animated fadeInUp" data-wow-duration="1.5s">
                        <a href="<?php echo Widget_Download::get('app_store');?>"><img src="images/app-store.png" alt="App store download image"></a>
                        <a href="<?php echo Widget_Download::get('google_play');?>"><img src="images/play-store.png" alt="Play store download image"></a>
                    </div>
                    <div class="subscribe-form-area wow animated fadeInUp" data-wow-delay="0.5s" data-wow-duration="1.5s">
                        <h4>don’t miss our future updates...</h4>
                        <form id="subscribeForm" class="subscribe-form" action="#" method="post">
                            <input type="email" name="email" placeholder="Enter your email here...">
                            <button class="btn" type="submit"><i class="fa fa-paper-plane"></i></button>
                            <p class="newsletter-success"></p>
                            <p class="newsletter-error"></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>