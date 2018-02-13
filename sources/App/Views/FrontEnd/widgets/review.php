<div  <?php if ($part->nameid != '#'): ?>id="<?php echo str_replace('#','',$part->nameid);?>"<?php endif ?> data-stellar-background-ratio="0.5" class="review-area parallax">
    <div class="img-overlay">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="review-carousel-wrapper">
                        <div id="review-carousel" class="owl-carousel review-carousel">
                        	<?php 
                        	$review = Review_Model::get();
                        	for($i = 0; $i < $count = count($review); $i+=3) {
                        	?>
                        	<?php if (!empty($review[$i]->id)){ ?>
                        	 <!-- review -->
                            <div class="review wow animated fadeInUp" data-wow-duration="1.5s">
                                <div class="review-icon">
                                    <i class="fa fa-quote-right"></i>
                                </div>
                                <p class="review-text"><?php echo $review[$i]->text;?></p>
                                <div class="reviewer-image">
                                    <img src="<?php echo $review[$i]->image;?>" alt="">
                                </div>
                                <div class="about-reviewer">
                                    <h5 class="name"><?php echo $review[$i]->name;?></h5>
                                    <p class="designation"><?php echo $review[$i]->designation;?></p>
                                </div>
                            </div>
                            <?php }if (!empty($review[$i+1]->id)) {?>
                            <!-- review -->
                            <div class="review wow animated fadeInUp" data-wow-delay="0.5s" data-wow-duration="1.5s">
                                <div class="review-icon">
                                    <i class="fa fa-quote-right"></i>
                                </div>
                                <p class="review-text"><?php echo $review[$i+1]->text;?></p>
                                <div class="reviewer-image">
                                    <img src="<?php echo $review[$i+1]->image;?>" alt="">
                                </div>
                                <div class="about-reviewer">
                                    <h5 class="name"><?php echo $review[$i+1]->name;?></h5>
                                    <p class="designation"><?php echo $review[$i+1]->designation;?></p>
                                </div>
                            </div>
                            <?php }if (!empty($review[$i+2]->id)) {?>
                            <!-- review -->
                            <div class="review wow animated fadeInUp" data-wow-delay="1s" data-wow-duration="1.5s">
                                <div class="review-icon">
                                    <i class="fa fa-quote-right"></i>
                                </div>
                                <p class="review-text"><?php echo $review[$i+2]->text;?></p>
                                <div class="reviewer-image">
                                    <img src="<?php echo $review[$i+2]->image;?>" alt="">
                                </div>
                                <div class="about-reviewer">
                                    <h5 class="name"><?php echo $review[$i+2]->name;?></h5>
                                    <p class="designation"><?php echo $review[$i+2]->designation;?></p>
                                </div>
                            </div>
                            <?php }} ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>