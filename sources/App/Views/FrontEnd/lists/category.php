<aside class="widget category-widget">
    <h4 class="widget-title">Thể Loại</h4>
    <div class="widget-inner">
        <ul class="widget-category">
            <?php 
            $category = Category_Model::get();
            foreach ($category as $item) {
            ?>
            <li><a href="<?php echo get_url(0,$item->name,'category');?>"><?php echo $item->name;?> (<?php echo Post_Model::count($item->id);?>)</a></li>
            <?php } ?>
            <?php if (Post_Model::count(0) > 0) {?>
            <li><a href="#">Uncategorized (<?php echo Post_Model::count(0);?>)</a></li>
            <?php } ?>
        </ul>
    </div>
</aside>