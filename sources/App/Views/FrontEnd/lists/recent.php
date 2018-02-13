<aside class="widget post-widget">
    <h4 class="widget-title">Bài Viết Gần Đây</h4>
    <div class="widget-inner">
        <div class="widget-posts">
            <?php 
            $recent = Post_Model::recent([0,3]);
            foreach ($recent as $item) {
            ?>
            <div class="widget-post">
                <a class="widget-post-thumb" href="<?php echo get_url($item->id,$item->title,'blog'); ?>"><img src="<?php echo $item->featured;?>" alt="blog thumb"></a>
                <div class="widget-post-body">
                    <a class="widget-post-title" href="<?php echo get_url($item->id,$item->title,'blog'); ?>"><?php echo $item->title;?> </a>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</aside>