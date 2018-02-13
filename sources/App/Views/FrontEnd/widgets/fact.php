<div  <?php if ($part->nameid != '#'): ?>id="<?php echo str_replace('#','',$part->nameid);?>"<?php endif ?> class="fun-facts parallax section" data-stellar-background-ratio="0.5">
    <div class="img-overlay">
        <div class="container">
            <div class="row">
            	<?php 
            	$fact = Fact_Model::get(); 
            	foreach ($fact as $item) {?>
                <div class="col-md-3 col-xs-6 wow animated fadeInUp" data-wow-duration="1.5s">
                    <div class="fun-fact">
                        <div class="fun-fact-icon">
                            <span class="<?php echo $item->icon;?>"></span>
                        </div>
                        <h4 class="fun-fact-count count"><?php echo $item->count;?></h4>
                        <p><?php echo $item->title;?></p>
                    </div>
                </div>
                <?php } ?>
            </div>
            <!-- end row -->
        </div>
    </div>
</div>