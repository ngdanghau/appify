<aside class="widget tag-widget">
    <h4 class="widget-title">Tag Bài Viết</h4>
    <div class="widget-inner">
        <div class="widget-tag">
            <?php 
            $tag = explode(', ',$post->tags);
            foreach ($tag as $item) {
            ?>
            <a href="<?php echo get_url(0,$item,'tag');?>"><?php echo $item;?></a>
            <?php } ?>
        </div>
    </div>
</aside>