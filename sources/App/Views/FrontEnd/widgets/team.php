<div  <?php if ($part->nameid != '#'): ?>id="<?php echo str_replace('#','',$part->nameid);?>"<?php endif ?> class="team-area section-padding <?php if(Config_Model::get('site_style') == 'app'){ ?> style-2 <?php } ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="section-header text-center">
                    <div class="section-header-icon">
                        <span class="<?php echo Widget_Team::get('icon');?>"></span>
                    </div>
                    <h2 class="section-title"><?php echo Widget_Team::get('title');?></h2>
                    <p class="section-subtext"><?php echo Widget_Team::get('subtext');?> </p>
                </div>
            </div>
        </div>
        <!-- end row -->
        <div class="row">
            <div class="team-members">
                <?php 
                $team = Team_Model::get();
                for($i = 0; $i < $count = count($team); $i+=3) { ?>
                <?php if (!empty($team[$i]->id)){ ?>
                <!-- team member -->
                <div class="col-md-3 col-sm-6 col-xs-12 wow animated fadeInUp" data-wow-duration="1.5s">
                    <div class="team-member">
                        <div class="member-image">
                            <img src="<?php echo $team[$i]->avatar;?>" alt="Team member image">
                            <div class="image-overlay">
                                <div class="member-connections">
                                    <a href="<?php echo $team[$i]->facebook;?>" class="member-connection"><i class="fa fa-facebook"></i></a>
                                    <a href="<?php echo $team[$i]->twitter;?>" class="member-connection"><i class="fa fa-twitter"></i></a>
                                    <a href="<?php echo $team[$i]->google;?>" class="member-connection"><i class="fa fa-google"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4 class="member-name"><?php echo $team[$i]->name;?></h4>
                            <p class="member-role"><?php echo $team[$i]->role;?></p>
                        </div>
                    </div>
                </div>
                <?php }if (!empty($team[$i+1]->id)) {?>
                <!-- team member -->
                <div class="col-md-3 col-sm-6 col-xs-12 wow animated fadeInUp" data-wow-delay="0.5s" data-wow-duration="1.5s">
                    <div class="team-member">
                        <div class="member-image">
                            <img src="<?php echo $team[$i+1]->avatar;?>" alt="Team member image">
                            <div class="image-overlay">
                                <div class="member-connections">
                                    <a href="<?php echo $team[$i+1]->facebook;?>" class="member-connection"><i class="fa fa-facebook"></i></a>
                                    <a href="<?php echo $team[$i+1]->twitter;?>" class="member-connection"><i class="fa fa-twitter"></i></a>
                                    <a href="<?php echo $team[$i+1]->google;?>" class="member-connection"><i class="fa fa-google"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4 class="member-name"><?php echo $team[$i+1]->name;?></h4>
                            <p class="member-role"><?php echo $team[$i+1]->role;?></p>
                        </div>
                    </div>
                </div>
                <?php }if (!empty($team[$i+2]->id)) {?>
                <!-- team member -->
                <div class="col-md-3 col-sm-6 col-xs-12 wow animated fadeInUp" data-wow-delay="1s" data-wow-duration="1.5s">
                    <div class="team-member">
                        <div class="member-image">
                            <img src="<?php echo $team[$i+2]->avatar;?>" alt="Team member image">
                            <div class="image-overlay">
                                <div class="member-connections">
                                    <a href="<?php echo $team[$i+2]->facebook;?>" class="member-connection"><i class="fa fa-facebook"></i></a>
                                    <a href="<?php echo $team[$i+2]->twitter;?>" class="member-connection"><i class="fa fa-twitter"></i></a>
                                    <a href="<?php echo $team[$i+2]->google;?>" class="member-connection"><i class="fa fa-google"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4 class="member-name"><?php echo $team[$i+2]->name;?></h4>
                            <p class="member-role"><?php echo $team[$i+2]->role;?></p>
                        </div>
                    </div>
                </div>
                <?php }} ?>
            </div>
        </div>
    </div>
</div>