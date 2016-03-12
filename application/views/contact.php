
        <!-- WRAPPER -->
        <div id="wrapper">

            <!-- PAGE TITLE -->
            <header id="page-title"> 
                <div class="container">
                    <h1>Contact Us</h1>

                    <ul class="breadcrumb">
                        <li><a href="<?php echo site_url('index'); ?>">Home</a></li>
                        <li class="active">Contact</li>
                    </ul>
                </div>
            </header>

            <section id="contact" class="container">

                <div class="row">

                        <!-- FORM -->
                        <div class="col-md-8">

                                <h2>Get in touch with <strong><em>Us!</em></strong></h2>

                                <form class="white-row" action="php/contact.php" method="post">
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <label>Full Name *</label>
                                                <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required="required">
                                            </div>
                                            <div class="col-md-6">
                                                <label>E-mail Address *</label>
                                                <input type="email" value="" required="required" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label>Subject</label>
                                                <input type="text" value="" required="required" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label>Message *</label>
                                                <textarea maxlength="5000" required="required" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" id="message"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <br />

                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="submit" value="Send Message" class="btn btn-primary btn-lg" data-loading-text="Loading...">
                                        </div>
                                    </div>
                                </form>

                        </div>
                        <!-- /FORM -->

                        <!-- INFO -->
                        <div class="col-md-4">

                            <h2>Visit Us</h2>

                            <div class="white-row">
                                <div id="gmap"><!-- google map --></div>
                                <script type="text/javascript">
                                    var	$googlemap_latitude 	= -37.812344,
                                        $googlemap_longitude	= 144.968900,
                                        $googlemap_zoom		= 13;
                                </script>

                                <div class="divider white half-margins"><!-- divider -->
                                    <i class="fa fa-star"></i>
                                </div>

                                <p class="nomargin-bottom">
                                    <span class="block"><strong><i class="fa fa-map-marker"></i> Address:</strong> PO Box 08, Juba, South Sudan</span>
                                     
                                    <span class="block">
                                        <strong><i class="fa fa-phone"></i> Phone:</strong> 
                                        <span style='padding-left: 0.2em;'>+211 977 100 358</span>  <br /> <span style='padding-left: 5em;'>+211 957 100 358</span> <br />
                                        <span style='padding-left: 5em;'>+256 772 474 731</span>    <br /> <span style='padding-left: 5em;'>+256 701 474 731</span> <br /> 
                                    </span> 
                                    <span class="block"><strong><i class="fa fa-envelope"></i> Email:</strong> <a href="mailto:bushcontractors@gmail.com">bushcontractors@gmail.com</a></span>
                                </p>

                            </div> 
                        </div>
                        <!-- /INFO -->

                </div>

            </section>

        </div>
        <!-- /WRAPPER -->