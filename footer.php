<footer id="footer" class="bg-one">
    <div class="top-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
                    <h3>About</h3>
                    <p>Baru-baru ini kami mengembabangkan produk digital kami yang sebelumnya kami bergerak di bidang perikanan dan pertanian. Jadi kami berharap dengan produk digital terbaru kami, kami bisa lebih maju lagi.</p>
                </div>
                <!-- End of .col-sm-3 -->

                <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
                    <h3>Our Services</h3>
                    <ul>
                        <li><a href="#">Graphic Design</a></li>
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">Web Development</a></li>
                    </ul>
                </div>
                <!-- End of .col-sm-3 -->

                <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="index.php?hal=home">Home</a></li>
                        <li><a href="index.php?hal=about">About</a></li>
                        <li><a href="#">FAQ’s</a></li>

                    </ul>
                </div>
                <!-- End of .col-sm-3 -->

                <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
                    <h3>Subscribe Now</h3>
                    <form class="subscribe-form">
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <button type="submit" class="btn btn-main-sm">Subscribe Now</button>
                    </form>
                </div>
                <!-- End of .col-sm-3 -->

            </div>
        </div> <!-- end container -->
    </div>
    <div class="footer-bottom">
        <h5>Copyright 2017. All rights reserved.</h5>
        <h6>Design and Developed by <a href="https://github.com/saidak286" target="_blank">saidak286</a>. Get bootstrap template form <a href="https://themefisher.com/free-bootstrap-templates/" target="_blank">Themefisher</a></h6>
    </div>
</footer> <!-- end footer -->
<!-- end Footer Area
========================================== -->

<!-- 
Essential Scripts
=====================================-->
<!-- Main jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<!-- Parallax -->
<script src="plugins/parallax/jquery.parallax-1.1.3.js"></script>
<!-- lightbox -->
<script src="plugins/lightbox2/dist/js/lightbox.min.js"></script>
<!-- Owl Carousel -->
<script src="plugins/slick-carousel/slick/slick.min.js"></script>
<!-- Portfolio Filtering -->
<script src="plugins/filterzr/jquery.filterizr.min.js"></script>
<!-- Smooth Scroll js -->
<script src="plugins/smooth-scroll/dist/js/smooth-scroll.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBI14J_PNWVd-m0gnUBkjmhoQyNyd7nllA"></script>
<!-- Form Validation -->
<script src="plugins/form-validation/jquery.form.js"></script>
<script src="plugins/form-validation/jquery.validate.min.js"></script>
<!-- Custom js -->
<script type="text/javascript" src="plugins/revo-slider/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="plugins/revo-slider/js/jquery.themepunch.revolution.min.js"></script>
<script src="js/script.js"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
(Load Extensions only on Local File Systems ! 
The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="plugins/revo-slider/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="plugins/revo-slider/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="plugins/revo-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="plugins/revo-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="plugins/revo-slider/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="plugins/revo-slider/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="plugins/revo-slider/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="plugins/revo-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="plugins/revo-slider/js/extensions/revolution.extension.video.min.js"></script>
<script>
    /* https://learn.jquery.com/using-jquery-core/document-ready/ */
    jQuery(document).ready(function() {
        /* initialize the slider based on the Slider's ID attribute */
        jQuery('#rev_slider_1').show().revolution({

            /* options are 'auto', 'fullwidth' or 'fullscreen' */
            sliderLayout: 'fullscreen',

            /* basic navigation arrows and bullets */
            navigation: {

                arrows: {
                    style: "zeus",
                    enable: true,
                    hide_onmobile: true,
                    hide_under: 600,
                    hide_onleave: true,
                    hide_delay: 200,
                    hide_delay_mobile: 1200,
                    tmp: '<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                    left: {
                        h_align: "left",
                        v_align: "center",
                        h_offset: 30,
                        v_offset: 0
                    },
                    right: {
                        h_align: "right",
                        v_align: "center",
                        h_offset: 30,
                        v_offset: 0
                    }
                },
                bullets: {
                    enable: false,
                    hide_onmobile: true,
                    hide_under: 600,
                    style: "metis",
                    hide_onleave: true,
                    hide_delay: 200,
                    hide_delay_mobile: 1200,
                    direction: "horizontal",
                    h_align: "center",
                    v_align: "bottom",
                    h_offset: 0,
                    v_offset: 30,
                    space: 5,
                    tmp: '<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title">{{title}}</span>'
                }
            }
        });
    });
</script>
</body>

</html>