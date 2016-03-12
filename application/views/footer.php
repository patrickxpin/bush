 
            
            <!-- FOOTER -->
            <footer>

                <!-- copyright , scrollTo Top -->
                <div class="footer-bar">
                    <div class="container">
                        <span class="copyright">Copyright &copy; Bush Contractors Co Ltd . All Rights Reserved.</span>
                        <a class="toTop" href="#topNav">BACK TO TOP <i class="fa fa-arrow-circle-up"></i></a>
                    </div>
                </div>
                <!-- copyright , scrollTo Top -->


                <!-- footer content -->
                <div class="footer-content">
                    <div class="container">

                        <div class="row"> 
                            <!-- FOOTER CONTACT INFO -->
                            <div class="column col-md-4">
                                <h3>About Us</h3>

                                <p class="contact-desc">
                                    We are the Leaders in Construction Industry in South Sudan. We strive to excel in all the services 
                                    we provide and have acquired a lot of experience, large client base and projects under our management.
                                </p>
                                <p>We provide services in:</p>
                                <div class="col-md-6">
                                    <ul>
                                        <li class="footer-sprite address"> Building & Construction</li>
                                        <li class="footer-sprite phone"> Supply of Materials</li>
                                        <li class="footer-sprite email"> Electricals</li> 
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul> 
                                        <li class="footer-sprite email"> Color and finishing</li>
                                        <li class="footer-sprite email"> Graphics & Design</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /FOOTER CONTACT INFO -->


                            <!-- FOOTER LOGO -->
                            <div class="column logo col-md-4 text-center">
                                <div class="logo-content">
                                    <img class="animate_fade_in" src="<?php echo HTTP_IMAGES_PATH; ?>logo_footer.png" width="200" alt="" />
                                    <h4>Bush Contractors Co Ltd.</h4>
                                </div>											
                            </div>
                            <!-- /FOOTER LOGO -->


                            <!-- FOOTER LATEST POSTS -->
                            <div class="column col-md-4">
                                <h3>CONTACT</h3>

                                <p class="contact-desc">
                                    We would love to hear from you, get in touch with us.										
                                </p>
                                <address class="font-opensans">
                                    <ul>
                                        <li class="footer-sprite address">
                                            PO Box 08<br />
                                            Juba, South Sudan<br /> 
                                        </li>
                                        <li class="footer-sprite phone">
                                            Tel: +211 977 100 358 | +211 957 100 358 <br />
                                                 +256 772 474 731 | +256 701 474 731 <br />
                                        </li>
                                        <li class="footer-sprite email">
                                            <a href="mailto:bushcontractors@gmail.com">bushcontractors@gmail.com</a>
                                        </li>
                                    </ul>
                                </address> 
                            </div>
                            <!-- /FOOTER LATEST POSTS -->

                        </div>

                    </div>
                </div>
                <!-- footer content -->

            </footer>
            <!-- /FOOTER -->

        <!-- Default page scripts -->   
        <script type="text/javascript" src="<?php echo HTTP_JS_PATH; ?>plugins/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="<?php echo HTTP_JS_PATH; ?>plugins/jquery.cookie.js"></script>
        <script type="text/javascript" src="<?php echo HTTP_JS_PATH; ?>plugins/jquery.appear.js"></script>
        <script type="text/javascript" src="<?php echo HTTP_JS_PATH; ?>plugins/jquery.isotope.js"></script>
        <script type="text/javascript" src="<?php echo HTTP_JS_PATH; ?>plugins/masonry.js"></script>
        <script type="text/javascript" src="<?php echo HTTP_JS_PATH; ?>plugins/jquery.easing.1.3.js"></script> 
        
        <script type="text/javascript" src="<?php echo HTTP_JS_PATH; ?>plugins/modernizr.min.js"></script>  

        <script type="text/javascript" src="<?php echo HTTP_JS_PATH; ?>plugins/bootstrap/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo HTTP_JS_PATH; ?>plugins/magnific-popup/jquery.magnific-popup.min.js"></script> 
        <script type="text/javascript" src="<?php echo HTTP_JS_PATH; ?>plugins/owl-carousel/owl.carousel.min.js"></script>
        <script type="text/javascript" src="<?php echo HTTP_JS_PATH; ?>plugins/stellar/jquery.stellar.min.js"></script>
        <script type="text/javascript" src="<?php echo HTTP_JS_PATH; ?>plugins/knob/jquery.knob.js"></script>
        <script type="text/javascript" src="<?php echo HTTP_JS_PATH; ?>plugins/jquery.backstretch.min.js"></script>
        <script type="text/javascript" src="<?php echo HTTP_JS_PATH; ?>plugins/superslides/dist/jquery.superslides.min.js"></script> 
        <!-- REVOLUTION SLIDER -->
        <script type="text/javascript" src="<?php echo HTTP_JS_PATH; ?>plugins/revolution-slider/jquery.themepunch.plugins.min.js"></script>
        <script type="text/javascript" src="<?php echo HTTP_JS_PATH; ?>plugins/revolution-slider/jquery.themepunch.revolution.min.js"></script>
        <script type="text/javascript" src="<?php echo HTTP_JS_PATH; ?>slider_revolution.js"></script>

        <script type="text/javascript" src="<?php echo HTTP_JS_PATH; ?>scripts.js"></script>
        <?php if(isset($scripts)) {
            foreach($scripts as $script) {
                echo $script;
            }
        } ?> 
        <!-- ./page scripts -->
         
         
    </body>
</html>
       