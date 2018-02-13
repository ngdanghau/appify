<!-- Footer section -->
    <footer>
        <div class="footer-area <?php if(Config_Model::get('site_style') == 'app'){ ?> style-2 <?php } ?>">
            <div class="img-overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="footer-widget">
                                <a class="c wow animated fadeInDown" data-wow-duration="1.5s" href="">
                                    <img src="<?php echo Config_Model::get('site_logo');?>" alt="Footer logo">
                                </a>
                                <div class="socials wow animated fadeInUp" data-wow-delay="0.5s" data-wow-duration="1.5s">
                                    <a href="<?php echo Config_Model::get('site_facebook');?>" class="social"><i class="fa fa-facebook"></i></a>
                                    <a href="<?php echo Config_Model::get('site_twitter');?>" class="social"><i class="fa fa-twitter"></i></a>
                                    <a href="<?php echo Config_Model::get('site_youtube');?>" class="social"><i class="fa fa-youtube"></i></a>
                                    <a href="<?php echo Config_Model::get('site_google');?>" class="social"><i class="fa fa-google"></i></a>
                                    <a href="<?php echo Config_Model::get('site_vimeo');?>" class="social"><i class="fa fa-vimeo"></i></a>
                                </div>
                                <p class="copyright wow animated fadeInUp" data-wow-delay="1s" data-wow-duration="1.5s">Copyright @ 2017, <a href="<?php echo Config::SITE_URL;?>"><?php echo Config_Model::get('site_name');?></a>. All Right Reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script>var site_url = '<?php echo Config::SITE_URL;?>';</script>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/jquery-migrate-3.0.0.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/jquery.stellar.min.js"></script>
    <script src="assets/js/owl.carousel.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/jquery.nav.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/app.js"></script>