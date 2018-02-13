<div data-stellar-background-ratio="0.5" class="video video-bg-2 parallax parallax-1"  <?php if ($part->nameid != '#'): ?>id="<?php echo str_replace('#','',$part->nameid);?>"<?php endif ?>>
    <div class="img-overlay">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center wow animated fadeInUp" data-wow-duration="1.5s">
                    <a href="<?php echo Widget_Video::get('url');?>" class="btn play-btn video-play">
                        <span class="btn-icon">
                            <i class="fa fa-play"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>