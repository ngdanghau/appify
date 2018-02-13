 <div  <?php if ($part->nameid != '#'): ?>id="<?php echo str_replace('#','',$part->nameid);?>"<?php endif ?> class="section-padding contact-faq">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="section-header text-center">
                    <div class="section-header-icon">
                        <span class="<?php echo Widget_Faq::get('icon');?>"></span>
                    </div>
                    <h2 class="section-title"><?php echo Widget_Faq::get('title');?></h2>
                    <p class="section-subtext"><?php echo Widget_Faq::get('subtext');?> </p>
                </div>
            </div>
        </div>
        <!-- end row -->
        <div class="row">
            <!--faq -->
            <div class="col-md-6">
                <div class="faq-section wow animated fadeInUp" data-wow-duration="1.5s">
                    <div class="panel-group" id="descriptions" role="tablist" aria-multiselectable="true">
                        <?php 
                            $faq = Faq_Model::get();
                            foreach ($faq as $item): ?>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#descriptions" href="#faq<?php echo $item->id;?>" aria-expanded="false" aria-controls="faq<?php echo $item->id;?>"><?php echo $item->question;?></a>
                                </h4>
                            </div>
                            <div id="faq<?php echo $item->id;?>" class="panel-collapse collapse" role="tabpanel">
                                <div class="panel-body"><?php echo $item->answer;?></div>
                            </div>
                        </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
            <!--End faq -->
            <!--Contact form -->
            <div class="col-md-6">
                <div class="contact-section wow animated fadeInUp" data-wow-delay="0.5s" data-wow-duration="1.5s">
                    <div class="row">
                        <div class="col-md-12">
                            <h4>Bạn Có Thắc Mắc! Hãy Hỏi Chúng Tôi!</h4>
                            <form id="contactForm" class="contact-form" method="post">
                                <input id="name" type="text" name="name" placeholder="Your Name" required>
                                <input id="email" type="email" name="email" placeholder="Your Email" required>
                                <textarea id="message" name="message" placeholder="Your Question" rows="3"></textarea>
                                <button class="btn btn-submit" type="submit">Submit</button>
                                <p class="input-success">Congratulation, your message sent</p>
                                <p class="input-error">Sorry, something went wrong</p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>