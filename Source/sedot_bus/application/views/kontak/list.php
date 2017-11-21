    <div id="content" class="site-content">
        <div id="tropical-banner" class=" text-center clearfix">
            <img src="<?php echo base_url();?>assets/front/images/banner.jpg" alt="banner"/>
            <div class="container banner-contents clearfix">
                <h2 class="template-title p-name"><strong>Shortcodes</strong></h2>
            </div>
            <div class="breadcrumb-wrapper clearfix">
                <div class="container">
                    <ol class="breadcrumb">
                        <li><a href="index-2.html" >Home</a></li>
                        <li class="active">Contact</li>
                    </ol>
                </div>
            </div>
            <span class="overlay"></span>
        </div>

        <section class="contact-template clearfix">
            <h6 class="hide">Title</h6>
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-sm-8">
                        <section class="contact-details animatedParent clearfix">
                            <h3 class="contact-title entry-title animated fadeInLeftShort">get in touch</h3>
                            <div class="row">
                                <div class="col-md-4">
                                    <address class="animated fadeInDownShort">
                                        <h5 class="title"><i class="fa fa-map-marker"></i>address<span></span></h5>
                                        <p>
                                            123 East West Corner Road, <br/>
                                            Melborne-606, Australia.
                                        </p>
                                    </address>
                                    <div class="email-section animated fadeInUpShort">
                                        <h5 class="title"><i class="fa fa-envelope"></i>Email address<span></span></h5>
                                        <a class="email" href="#">info@example.com</a>
                                    </div>
                                    <div class="phone-section animated fadeInDownShort">
                                        <h5 class="title"><i class="fa fa-mobile"></i>Phone Number <span></span></h5>
                                        <span class="number">+61 0123 456 789</span>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="map-wrap animated fadeInRightShort clearfix">
                                        <div id="location-map"></div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="contact-from animatedParent clearfix">
                            <h3 class="respond-title animated fadeInDownShort">send us your message</h3>
                            <form id="contact_form" action="<?php echo base_url('index.php/kontak/kirim');?>" method="post">
                                <fieldset class="animated fadeInLeftShort">
                                    <p class="form-name">
                                        <label for="name">name <span class="required">*</span></label>
                                        <input id="name" name="nama" type="text" value="" required="required">
                                    </p>
                                    <p class="form-email">
                                        <label for="email">Email <span class="required">*</span></label>
                                        <input id="email" name="email" data-rule-required="true" data-rule-email="true" data-msg-required="Please enter your email address" data-msg-email="Please enter a valid email address" aria-required="true" required="required" aria-invalid="true">
                                    </p>
                                    <p class="form-url">
                                        <label for="subjek">Subjek <span class="required">*</span></label>
                                        <input id="subjek" name="subjek" type="text" value="" required="required">
                                    </p>
                                </fieldset>
                                <fieldset class="animated fadeInRightShort">
                                    <p class="form-comment">
                                        <label for="isi">Message</label>
                                        <textarea id="isi" name="isi" cols="45" rows="5" ></textarea>
                                    </p>
                                    <p class="form-submit">
                                        <input name="submit" type="submit" id="submit" class="submit" value="Post Comment">
                                    </p>
                                    <img src="images/loader3.gif" id="contact-loader" alt="Loading...">
                                </fieldset>
                                <div id="error-container"></div>
                                <div id="response-container"></div>
                            </form>
                        </section>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <aside class="sidebar">
                            <section class="search-widget animatedParent">
                                <h5 class="hidden animated fadeInDownShort">Title</h5>
                                <div class="search animated fadeInUpShort clearfix">
                                    <form method="get" class="search-form" action="#">
                                        <div>
                                            <input type="text" placeholder="Search Category" name="s" class="search-text">
                                            <input type="submit" class="search-submit" value="">
                                            <i class="fa fa-search"></i>
                                        </div>
                                    </form>
                                </div>
                            </section>
                            <section class="widget recent-post-widget animatedParent">
                                <h5 class="widget-title animated fadeInDownShort">Recent Blog Post</h5>
                                <article class="post blog-post-widget clearfix animated fadeInUpShort">
                                    <figure class="blog-feature-img pull-right">
                                        <img src="images/blog-post-widget-img.jpg" alt="Blog Image"/>
                                    </figure>
                                    <h6 class="title"><a href="#">the standard blog post title</a></h6>
                                    <time datetime="2007-08-29T13:58Z"  class="post-meta"><i class="fa fa-clock-o"></i> 08 Nov @014</time>
                                </article>
                                <article class="post blog-post-widget clearfix animated fadeInUpShort">
                                    <figure class="blog-feature-img pull-right">
                                        <img src="images/blog-post-widget-img.jpg" alt="Blog Image"/>
                                    </figure>
                                    <h6 class="title"><a href="#">the standard blog post title</a></h6>
                                    <time datetime="2007-08-29T13:58Z"  class="post-meta"><i class="fa fa-clock-o"></i> 08 Nov @014</time>
                                </article>
                                <article class="post blog-post-widget clearfix animated fadeInUpShort">
                                    <figure class="blog-feature-img pull-right">
                                        <img src="images/blog-post-widget-img.jpg" alt="Blog Image"/>
                                    </figure>
                                    <h6 class="title"><a href="#">the standard blog post title</a></h6>
                                    <time datetime="2007-08-29T13:58Z"  class="post-meta"><i class="fa fa-clock-o"></i> 08 Nov @014</time>
                                </article>
                            </section>
                            <section class="widget widget-text animatedParent">
                                <h5 class="widget-title animated fadeInDownShort">about us</h5>
                                <p class="animated fadeInUpShort">  voluptatem accusantium doloremque laudantium, totam rem aperiam eaqu ipsa quae ab illo inventore veritatis et quasi archit ecto beatae vitae dicta sunt explicabo. </p>
                            </section>
                            <section class="widget contact-widget clearfix animatedParent">
                                <h5 class="widget-title animated fadeInDownShort">Contact us</h5>
                                <address class="animated fadeInUpShort">
                                    <strong> Address:</strong> 123 East West Corner Road,
                                    Melborne-606
                                    Australia.
                                </address>
                                <p class="phone-number animated fadeInUpShort"><strong>Phone:</strong>+61 0123 456 789</p>
                                <p class="email animated fadeInUpShort"><strong>Email:</strong> info@example.com </p>
                                <ul class="social-nav text-center clearfix animated fadeInUpShort">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                </ul>
                            </section>
                        </aside>
                    </div>
                </div>
            </div>
        </section>



    </div><!-- .site-content -->