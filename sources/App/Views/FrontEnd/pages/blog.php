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
    <div data-stellar-background-ratio="0.5" class="page-header blog-single-header parallax">
        <div class="img-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title"><?php echo $post->title;?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-wrap">
        <div class="section section-padding blog-wrap">
            <div class="container">
                <div class="row">
                    <div class="blog-single">
                        <div class="col-md-8">
                            <div class="post-bar">
                                <article class="post">
                                    <div class="post-inner">
                                        <div class="post-thumb">
                                            <img class="img-responsive" src="<?php echo $post->featured;?>" alt="Single Blog Image">
                                        </div>
                                        <p class="post-metas">
                                            <span class="author-meta post-meta"> <a href=""><?php echo User_Model::show($post->author)->name;?></a> </span>
                                            <span class="date-meta post-meta"> <?php echo date('d M, Y',$post->timeupdate);?></span>
                                            <span class="comment-meta post-meta"><?php if (Comment_Model::count($post->id) == null){ ?>No Comments <?php }else{ echo Comment_Model::count($post->id);?> Comment<?php } ?></span>
                                        </p>
                                        <div class="post-entry">
                                            <?php echo UnHtmlChars($post->content);?>
                                        </div>
                                        <!-- Share on -->
                                        <div class="share-on">
                                            <b>Share this on: </b>
                                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_url($post->id,$post->title,'blog');?>"><i class="fa fa-facebook"></i></a>
                                            <a href="https://twitter.com/home?status=<?php echo get_url($post->id,$post->title,'blog');?>"><i class="fa fa-twitter"></i></a>
                                            <a href="https://plus.google.com/share?url=<?php echo get_url($post->id,$post->title,'blog');?>"><i class="fa fa-google-plus"></i></a>
                                        </div>
                                    </div>
                                </article>
                                <?php include View::Template('pages/comment');?>
                            </div>
                        </div>
                        <div class="col-lg-3 col-lg-offset-1 col-md-4">
                            <div class="sidebar">
                                <!-- Search widget -->
                                <aside class="widget search-widget">
                                    <div class="widget-inner">
                                        <form id="sidebarSearch" class="searchform" action="#" method="get">
                                            <input type="search" id="searchinput" placeholder="Search..." required="">
                                            <button type="submit" id="searchsubmit"><i class="fa fa-search"></i></button>
                                        </form>
                                    </div>
                                </aside>
                                <!-- Category widget -->
                                <?php include View::Template('lists/category');?>
                                <!-- Post widget -->
                                <?php include View::Template('lists/recent');?>
                                <!-- Tag widget -->
                                <?php include View::Template('lists/tag');?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    $widgets = Widget_Model::get(); ?>
    <?php foreach ($widgets as $part): ?>
    <?php if ($part->name == 'download' && $part->hide == 0){ ?>
    <!-- download area -->
    <?php include View::Template('widgets/download');?>
    <?php }?>
    <?php endforeach ?>
    <?php include View::Template('layouts/footer');?>
</body>

</html>
