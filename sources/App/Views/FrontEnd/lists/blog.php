<!DOCTYPE html>
<html lang="en">

<?php include View::Template('layouts/head');?>

<body>

    <?php if(Config_Model::get('site_preloader') == 1): ?>
    <!-- Preloader -->
    <?php include View::Template('layouts/preloader');?>
    <!-- Preloader End -->
    <?php endif ?>

    <!-- Main header -->
    <?php include View::Template('layouts/menu');?>
    <!--  Blog Header area  -->
    <div data-stellar-background-ratio="0.5" class="blog-header page-header parallax">
        <div class="img-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title">News &amp; Blog</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  Main Blog post area  -->
    <div class="main-wrap">
        <div class="blog-wrap section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="blog-listing masonry">
                            <div class="grid-sizer"></div>
                            <?php foreach ($post as $item): ?>
                            <!-- post single -->
                            <article class="post masonry-item">
                                <div class="post-inner">
                                    <a href="<?php echo get_url($item->id,$item->title,'blog'); ?>" class="post-thumb">
                                        <img class="img-responsive" src="<?php if (!empty($item->featured)){ echo $item->featured; }else{ ?>images/blog/1.jpg <?php }?>" alt="Blog Image">
                                    </a>
                                    <h3 class="post-title"><a href="<?php echo get_url($item->id,$item->title,'blog'); ?>"><?php echo $item->title;?></a></h3>
                                    <div class="post-metas">
                                        <span class="date-meta post-meta"><i class="fa fa-calendar"></i> <?php echo date('d F Y',$item->timeupdate);?> </span>
                                    </div>
                                    <p class="post-excerpt">
                                        <?php echo CutName($item->description,100);?>
                                    </p>
                                </div>
                            </article>
                           <?php endforeach ?>

                        </div>
                        <div class="blog-page-btn">
                            <?php $geturl = explode('/',Router::curRequestURL()); $mode = $geturl[1]; ?>
                            <?php if ($mode == 'blog'){ ?>
                                <a href="javascript:void(0);" id="blog" class="btn load-more" data-page="2">Load more</a>
                            <?php }elseif($mode == 'tag'){ ?>
                                <a href="javascript:void(0);" id="tag" class="btn load-more" data-page="2" data-tag="<?php echo $geturl[2];?>" >Load more</a>
                            <?php }elseif($mode == 'category'){ ?>
                                <a href="javascript:void(0);" id="category" class="btn load-more" data-page="2" data-category="<?php echo $geturl[2];?>" >Load more</a>
                            <?php }elseif($mode == 'search'){ ?>
                                <a href="javascript:void(0);" id="search" class="btn load-more" data-page="2" data-search="<?php echo $geturl[2];?>" >Load more</a>
                            <?php } ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- download area -->
    <div id="download-area" class="download sectioon-padding parallax" data-stellar-background-ratio="0.5">
        <div class="img-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="section-header-white text-center">
                            <div class="section-header-white-icon">
                                <span class="ti-gift"></span>
                            </div>
                            <h2 class="section-white-title">Download now</h2>
                            <p class="section-subtext">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis </p>
                        </div>
                    </div>
                </div>
                <!-- end row -->
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center">
                        <div class="download-links">
                            <a href=""><img src="images/app-store.png" alt="App store download image"></a>
                            <a href=""><img src="images/play-store.png" alt="Play store download image"></a>
                        </div>
                        <div class="subscribe-form-area">
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
    <?php include View::Template('layouts/footer');?>
</body>

</html>
