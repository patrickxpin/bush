        <!-- WRAPPER -->
        <div id="wrapper">

            <!-- PAGE TITLE -->
            <header id="page-title">

                <div class="container">
                    <h1>Portfolio Single</h1>

                    <ul class="breadcrumb">
                        <li><a href="<?php echo site_url('index'); ?>">Home</a></li>
                        <li><a href="<?php echo site_url('index/portfolio'); ?>">Portfolio</a></li>
                        <li class="active">Project Details</li>
                    </ul>
                </div>
            </header>

            <section id="portfolio" class="container">

                <h2><strong>Bush Contractor's</strong> project details</h2>

                <div class="row">
                    <div class="col-sm-6 col-md-7">
                        <div class="owl-carousel controlls-over product-image" data-plugin-options='{"items": 1, "singleItem": true, "navigation": true, "pagination": true, "transitionStyle":"fadeUp"}'>
                            <div>
                                <img alt="" class="img-responsive" src="<?php echo HTTP_IMAGES_PATH; ?>demo/portfolio/scouter.jpg">
                            </div>
                            <div>
                                <img alt="" class="img-responsive" src="<?php echo HTTP_IMAGES_PATH; ?>demo/portfolio/tumblr.jpg">
                            </div>
                        </div>

                        <div class="divider"><!-- divider -->
                            <i class="fa fa-star"></i>
                        </div>

                        <!-- COMMENTS -->
                        <div class="row">
                            <div class="col-md-12">
                                <div id="comments">
                                    <h4>3 Comments</h4>

                                    <!-- comment item -->
                                    <div class="comment">

                                        <!-- user-avatar -->
                                        <span class="user-avatar">
                                            <img class="pull-left media-object" src="<?php echo HTTP_IMAGES_PATH; ?>avatar.png" width="64" height="64" alt="">
                                        </span>

                                        <div class="media-body">
                                            <a href="#commentForm" class="scrollTo replyBtn">reply</a>
                                            <h4 class="media-heading bold">John Doe</h4>
                                            <small class="block">June 29, 2014 - 11:23</small>
                                            Proin eget tortor risus. Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                        </div>
                                    </div>

                                    <!-- comment item -->
                                    <div class="comment">

                                        <!-- user-avatar -->
                                        <span class="user-avatar">
                                            <img class="pull-left media-object" src="<?php echo HTTP_IMAGES_PATH; ?>avatar.png" width="64" height="64" alt="">
                                        </span>

                                        <div class="media-body">
                                            <a href="#commentForm" class="scrollTo replyBtn">reply</a>
                                            <h4 class="media-heading bold">Diana Doe</h4>
                                            <small class="block">June 29, 2014 - 11:23</small>
                                            Proin eget tortor risus. Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                        </div>
                                    </div>

                                    <!-- comment item -->
                                    <div class="comment">

                                        <!-- user-avatar -->
                                        <span class="user-avatar">
                                            <img class="media-object" src="<?php echo HTTP_IMAGES_PATH; ?>avatar.png" width="64" height="64" alt="">
                                        </span>

                                        <div class="media-body">
                                            <a href="#commentForm" class="scrollTo replyBtn">reply</a>
                                            <h4 class="media-heading bold">Melissa Doe</h4>
                                            <small class="block">June 29, 2014 - 11:23</small>
                                            Proin eget tortor risus. Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 

                                            <!-- comment reply -->
                                            <div class="media">

                                                <!-- user-avatar -->
                                                <span class="user-avatar">
                                                    <img class="media-object" src="<?php echo HTTP_IMAGES_PATH; ?>avatar.png" width="64" height="64" alt="">
                                                </span>

                                                <div class="media-body">
                                                    <h4 class="media-heading bold">Peter Doe</h4>
                                                    <small class="block">June 29, 2014 - 11:23</small>
                                                    Proin eget tortor risus. Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <hr />

                                    <h4>
                                        Leave a reply
                                        <small class="block fsize13 font300">Your email address will not be published.</small>
                                    </h4>

                                    <!-- COMMENT FORM -->
                                    <form id="commentForm" class="form-horizontal" method="post" action="#">
                                        <div class="row">

                                            <!-- name -->
                                            <div class="col-md-4">
                                                <label>Name *</label>
                                                <input required class="form-control input-lg" type="text" name="author" id="author" value="" />
                                            </div>

                                            <!-- email -->
                                            <div class="col-md-4">
                                                <label>Email *</label>
                                                <input required class="form-control input-lg" type="text" name="email" id="email" value="" />
                                            </div>

                                            <!-- website -->
                                            <div class="col-md-4">
                                                <label>Website</label>
                                                <input class="form-control input-lg" type="text" name="url" id="url" value="" />
                                            </div>

                                        </div>

                                        <div class="row">

                                            <!-- comment -->
                                            <div class="col-md-12">
                                                <textarea required class="form-control input-lg" id="comment" name="comment" rows="5"></textarea>
                                            </div><br />

                                            <!-- code info -->
                                            <div class="col-md-12 font300 fsize14">
                                                <p>Allowed HTML tags: &lt;a href=&quot;&quot; title=&quot;&quot;&gt; &lt;abbr title=&quot;&quot;&gt; &lt;acronym title=&quot;&quot;&gt; &lt;b&gt; &lt;blockquote cite=&quot;&quot;&gt; &lt;cite&gt; &lt;code&gt; &lt;del datetime=&quot;&quot;&gt; &lt;em&gt; &lt;i&gt; &lt;q cite=&quot;&quot;&gt; &lt;strike&gt; &lt;strong&gt; </p>
                                                <p>Inappropriate and irrelevant comments will be removed at an admin's discretion.<br /> Your email is used for verification purposes only, it will never be shared.</p>
                                            </div>

                                            <!-- btn -->
                                            <div class="col-md-12">
                                                <p>
                                                    <button class="btn btn-primary">Post Comment</button>
                                                </p>
                                            </div>

                                            <!-- subscribe -->
                                            <div class="col-md-12 fsize16">
                                                <p>
                                                    <input type="checkbox" name="subscribe_comments" id="subscribe_comments" value="subscribe" />  
                                                    <label for="subscribe_comments">Notify me of follow-up comments by email.</label>
                                                    <br />
                                                    <input type="checkbox" name="subscribe_blog" id="subscribe_blog" value="subscribe" /> 
                                                    <label for="subscribe_blog">Notify me of new posts by email.</label>
                                                </p>
                                            </div>

                                        </div>

                                    </form>
                                    <!-- /COMMENT FORM -->

                                </div>
                            </div>
                        </div>
                        <!-- /COMMENTS -->

                    </div>

                    <div class="col-sm-6 col-md-5">

                        <h3>Construction Project</h3>
                        <p>In et massa a massa egestas suscipit tincidunt ut est. Curabitur rutrum faucibus elit, at convallis diam mattis eget. Aliquam scelerisque erat a felis dignissim, a consequat tortor rhoncus. Nullam vulputate nibh at nisi consectetur, nec rutrum nunc iaculis.</p>
 
                    </div>
                </div>



                <hr />

                <!-- RELATED -->
                <h2><strong>Related</strong> Projects</h2>
                <div class="row">

                    <div class="col-md-3"><!-- item 1 -->
                        <div class="item-box">
                            <figure>
                                <a class="item-hover" href="portfolio-single.html">
                                    <span class="overlay color2"></span>
                                    <span class="inner">
                                        <span class="block fa fa-plus fsize20"></span>
                                        <strong>PROJECT</strong> DETAIL
                                    </span>
                                </a>
                                <img class="img-responsive" src="<?php echo HTTP_IMAGES_PATH; ?>demo/portfolio/scouter.jpg" width="260" height="260" alt="">
                            </figure>
                            <div class="item-box-desc">
                                <h4>Bush Contractors Project</h4>
                                <small class="styleColor">29 June, 2014</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3"><!-- item 2 -->
                        <div class="item-box">
                            <figure>
                                <a class="item-hover lightbox" href="http://www.youtube.com/watch?v=W7Las-MJnJo" data-plugin-options='{"type":"iframe"}'>
                                    <span class="overlay color2"></span>
                                    <span class="inner">
                                        <span class="block fa fa-plus fsize20"></span>
                                        <strong>VIEW</strong> VIDEO
                                    </span>
                                </a>
                                <img class="img-responsive" src="<?php echo HTTP_IMAGES_PATH; ?>demo/portfolio/black-kitty-600x403.jpg" width="260" height="260" alt="">
                            </figure>
                            <div class="item-box-desc">
                                <h4>Bush Contractors Video</h4>
                                <small class="styleColor">29 June, 2014</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3"><!-- item 3 -->
                        <div class="item-box">
                            <figure>
                                <a class="item-hover lightbox" href="assets/images/demo/portfolio/merchant2-600x403.jpg" data-plugin-options='{"type":"image"}'>
                                    <span class="overlay color2"></span>
                                    <span class="inner">
                                        <span class="block fa fa-plus fsize20"></span>
                                        <strong>PROJECT</strong> DETAIL
                                    </span>
                                </a>
                                <img class="img-responsive" src="<?php echo HTTP_IMAGES_PATH; ?>demo/portfolio/merchant2-600x403.jpg" width="260" height="260" alt="">
                            </figure>
                            <div class="item-box-desc">
                                <h4>Atropos Image</h4>
                                <small class="styleColor">29 June, 2014</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3"><!-- item 4 -->
                        <div class="item-box">
                            <figure>
                                <a class="item-hover" href="portfolio-single.html">
                                    <span class="overlay color2"></span>
                                    <span class="inner">
                                        <span class="block fa fa-plus fsize20"></span>
                                        <strong>PROJECT</strong> DETAIL
                                    </span>
                                </a>
                                <img class="img-responsive" src="<?php echo HTTP_IMAGES_PATH; ?>demo/portfolio/flippin-the-bird1-600x403.jpg" width="260" height="260" alt="">
                            </figure>
                            <div class="item-box-desc">
                                <h4>Atropos Project</h4>
                                <small class="styleColor">29 June, 2014</small>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /RELATED -->



                <!-- CALLOUT -->
                <div class="bs-callout text-center nomargin-bottom">
                <h3>Do you love our work? <a href="<?php echo site_url('index/contact'); ?>" target="_blank" class="btn btn-primary btn-lg">Yes, let's work together!</a></h3>
                </div>
                <!-- /CALLOUT -->


        </section>

    </div>
    <!-- /WRAPPER -->