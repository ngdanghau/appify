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
    <?php 
    $widgets = Widget_Model::get(); ?>
    <?php foreach ($widgets as $part): ?>
    <?php if ($part->name == 'banner' && $part->hide == 0){  ?>
    <!-- Banner section-->
    <?php include View::Template('widgets/banner');?>
    <!-- Banner end -->
    <?php }elseif ($part->name == 'service' && $part->hide == 0){ ?>
    <!-- service box -->
    <?php include View::Template('widgets/service');?>
    <?php }elseif ($part->name == 'feature' && $part->hide == 0){ ?>
    <!-- Feture section -->
    <?php include View::Template('widgets/feature');?>
    <?php }elseif ($part->name == 'video' && $part->hide == 0){ ?>
    <!-- Video section -->
    <?php include View::Template('widgets/video');?>
    <?php }elseif ($part->name == 'choose' && $part->hide == 0){ ?>
    <!-- Why choose us section -->
    <?php include View::Template('widgets/choose');?>
    <?php }elseif ($part->name == 'fact' && $part->hide == 0){ ?>
    <!-- Fun fact section -->
    <?php include View::Template('widgets/fact');?>
    <?php }elseif ($part->name == 'screenshot' && $part->hide == 0){ ?>
    <!-- Screenshot section -->
    <?php include View::Template('widgets/screenshot');?>
    <?php }elseif ($part->name == 'review' && $part->hide == 0){ ?>
    <!-- review section -->
    <?php include View::Template('widgets/review');?>
    <?php }elseif ($part->name == 'pricing' && $part->hide == 0){ ?>
    <!-- pricing section -->
    <?php include View::Template('widgets/pricing');?>
    <?php }elseif ($part->name == 'team' && $part->hide == 0){ ?>
    <!-- Team section -->
    <?php include View::Template('widgets/team');?>
    <?php }elseif ($part->name == 'faq' && $part->hide == 0){ ?>
    <!-- Contact & Faq section -->
    <?php include View::Template('widgets/faq');?>
    <?php }elseif ($part->name == 'download' && $part->hide == 0){ ?>
    <!-- download area -->
    <?php include View::Template('widgets/download');?>
    <?php }?>
    <?php endforeach ?>

    <?php include View::Template('layouts/footer');?>
</body>

</html>