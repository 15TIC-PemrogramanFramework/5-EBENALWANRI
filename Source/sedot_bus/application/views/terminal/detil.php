<div id="content" class="site-content">
        <div id="tropical-banner" class=" text-center clearfix">
            <img src="<?php echo base_url();?>assets/front/images/banner.jpg" alt="banner"/>
            <div class="container banner-contents clearfix">
                <h2 class="template-title p-name"><strong>Beach Holidays</strong></h2>
            </div>
            <div class="breadcrumb-wrapper clearfix">
                <div class="container">
                    <ol class="breadcrumb">
                        <li><a href="index-2.html" >Home</a></li>
                        <li><a href="where-we-go.html" >Where We Go</a></li>
                        <li class="active">Beach Holidays</li>
                    </ol>
                </div>
            </div>
            <span class="overlay"></span>
        </div>

        <section class="tour-single clearfix">
            <div class="container">

                <div class="row">
                    <div class="col-lg-9 col-sm-8">
                        <header class="entry-header animatedParent clearfix">
                            <h3 class="pull-left tour-single-title animated growIn slower"><?php echo $terminal['nama_terminal'];?></h3>
                            <span class="tour-price-single t-btn btn-red pull-right animated growIn slower">&#36;599.00</span>
                        </header>
                        <article class="tour-post-single clearfix">
                            <div class="tour-single-slider animatedParent clearfix">
                                <div class="slier tour-single-slider-for animated fadeInUpShort">
                                    <div class="item"><img src="<?php echo base_url();?>assets/front/images/where-we-go-single-img-2.jpg" alt="Tour Single"/></div>
                                    <div class="item"><img src="<?php echo base_url();?>assets/front/images/where-we-go-single-img-1.jpg" alt="Tour Single"/></div>
                                    <div class="item"><img src="<?php echo base_url();?>assets/front/images/where-we-go-single-img-3.jpg" alt="Tour Single"/></div>
                                </div>
                                <div class="slider tour-single-slider-nav animated fadeInUpShort">
                                    <div class="item slick-active"><img src="<?php echo base_url();?>assets/front/images/where-we-go-single-img-2.jpg" alt="Tour Single"/></div>
                                    <div class="item"><img src="<?php echo base_url();?>assets/front/images/where-we-go-single-img-1.jpg" alt="Tour Single"/></div>
                                    <div class="item"><img src="<?php echo base_url();?>assets/front/images/where-we-go-single-img-3.jpg" alt="Tour Single"/></div>
                                </div>
                            </div>
                            <div class="tour-single-contents animatedParent clearfix">
                                <div class="tour-post-meta pull-right animated fadeInUpShort clearfix">
                                    <span><i class="fa fa-map-marker"></i><strong>Destination : &nbsp;</strong>Europe</span>
                                    <span><i class="fa fa-clock-o"></i><strong>Duration : &nbsp;</strong>5 days</span>
                                    <span><i class="fa fa-tags"></i><strong>Price : &nbsp;</strong>&#36;847</span>
                                </div>
                                <p> Maecenas faucibus mollis interdum. Nulla vitae elit libero, a petra augue. Integer posua ereta ante venenatis dapibus posu vre velit aliquet. Aenean eu leo quam. Pellentesque ornadsgxare semetrt mo  lacinia quam venenatis vestibulum. Nulla vitae elit liberero, avelitu pharetra aug ue. Etiamums porta sem malesuada magna mollis euismod.</p>
                                <p> Maecenas faucibus mollis interdum. Nulla vitae elit libero, a petra augue. Integer posua ereta ante venenatis dapibus posu vre velit aliquet. Aenean eu leo quam. Pellentesque ornadsgxare semetrt mo  lacinia quam venenatis vestibulum. Nulla vitae elit liberero, avelitu pharetra aug ue. Etiamums porta sem malesuada magna mollis euismod.</p>
                                <footer class="tour-contents-footer clearfix">
                                    <a class="t-btn btn-red pull-right" href="#" data-toggle="modal" data-target="#booking-popup">Booking Now</a>
                                    <a class="t-btn btn-black-border pull-right" href="#" data-toggle="modal" data-target="#ask-q-popup">Ask Question</a>
                                    <div class="modal fade" id="booking-popup" tabindex="-1" role="dialog" aria-labelledby="booking-popup" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close"></i></button>
                                            <div class="booking-tabs" role="tabpanel">

                                                <!-- Nav tabs -->
                                                <ul class="nav nav-tabs" role="tablist">
                                                    <li role="presentation">
                                                        <a href="#tab-hotel3" aria-controls="tab-hotel3" role="tab" data-toggle="tab"><i class="fa fa-calendar"></i></a>
                                                    </li>
                                                    <li role="presentation">
                                                        <a href="#tab-train3" aria-controls="tab-train3" role="tab" data-toggle="tab"><i class="fa fa-bus"></i></a>
                                                    </li>
                                                    <li role="presentation">
                                                        <a href="#tab-flight3" aria-controls="tab-flight3" role="tab" data-toggle="tab"><i class="fa fa-plane"></i></a>
                                                    </li>
                                                    <li role="presentation" class="active">
                                                        <a href="#tab-booking3" aria-controls="tab-booking3" role="tab" data-toggle="tab"><i class="fa fa-building-o"></i></a>
                                                    </li>
                                                </ul>

                                                <!-- Tab panes -->
                                                <div class="tab-content">
                                                    <div role="tabpanel" class="tab-pane" id="tab-hotel3">
                                                        <div class="booking-criteria">
                                                            <h4>Book hotel</h4>
                                                            <ul>
                                                                <li><i class="glyphicon glyphicon-ok"></i> No.1 for booking in our surroundings</li>
                                                                <li><i class="glyphicon glyphicon-ok"></i> No hidden costs</li>
                                                                <li><i class="glyphicon glyphicon-ok"></i> Attractive offers with price advantage</li>
                                                            </ul>
                                                        </div>
                                                        <div class="bookingform">
                                                            <form action="#">
                                                                <fieldset>
                                                                    <div class="field-separator clearfix">
                                                                        <label>Destination</label>
                                                                        <input type="text" class="form-control" placeholder="Enter place / regions">
                                                                    </div>
                                                                    <div class="field-separator clearfix">
                                                                        <label>Arrival</label>
                                                                        <div class="input-group input-append date date-picker" >
                                                                            <input type="text" class="form-control" name="date">
                                                                            <span class="input-group-addon add-on"><i class="fa fa-calendar"></i></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="field-separator clearfix">
                                                                        <label>Departure Date</label>
                                                                        <div class="input-group input-append date date-picker" >
                                                                            <input type="text" class="form-control" name="date">
                                                                            <span class="input-group-addon add-on"><i class="fa fa-calendar"></i></span>
                                                                        </div>
                                                                    </div>
                                                                </fieldset>
                                                                <div class="field-separator clearfix">
                                                                    <label for="rooms">Rooms</label>
                                                                    <select class="form-control" id="rooms">
                                                                        <option>1 room</option>
                                                                        <option>Your destination</option>
                                                                        <option>Your destination</option>
                                                                        <option>Your destination</option>
                                                                    </select>

                                                                </div>
                                                                <div class="field-separator clearfix">
                                                                    <label for="adults-2">Adults</label>
                                                                    <select class="form-control" id="adults-2" >
                                                                        <option>3 adults</option>
                                                                        <option>3 adults</option>
                                                                        <option>Your destination</option>
                                                                        <option>Your destination</option>
                                                                    </select>

                                                                </div>
                                                                <div class="field-separator clearfix">
                                                                    <label for="children-2">Childrens</label>
                                                                    <select class="form-control" id="children-2">
                                                                        <option>5 childrens</option>
                                                                        <option>5 childrens</option>
                                                                        <option>Your destination</option>
                                                                        <option>Your destination</option>
                                                                    </select>
                                                                </div>
                                                                <div class="clearfix">
                                                                    <input type="submit" value="Find Hotel" class="t-btn btn-red">
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane" id="tab-train3">
                                                        <div class="booking-criteria">
                                                            <h4>Book hotel</h4>
                                                            <ul>
                                                                <li><i class="glyphicon glyphicon-ok"></i> No.1 for booking in our surroundings</li>
                                                                <li><i class="glyphicon glyphicon-ok"></i> No hidden costs</li>
                                                                <li><i class="glyphicon glyphicon-ok"></i> Attractive offers with price advantage</li>
                                                            </ul>
                                                        </div>
                                                        <div class="bookingform">
                                                            <form action="#">
                                                                <fieldset>
                                                                    <div class="field-separator clearfix">
                                                                        <label>From</label>
                                                                        <input type="text" class="form-control" placeholder="Enter place / regions">
                                                                    </div>
                                                                    <div class="field-separator clearfix">
                                                                        <label>To</label>
                                                                        <input type="text" class="form-control" placeholder="Enter place / regions">
                                                                    </div>
                                                                    <div class="field-separator clearfix">
                                                                        <label>OutBound</label>
                                                                        <div class="input-group input-append date date-picker" >
                                                                            <input type="text" class="form-control" name="date">
                                                                            <span class="input-group-addon add-on"><i class="fa fa-calendar"></i></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="field-separator clearfix">
                                                                        <label>InBound</label>
                                                                        <div class="input-group input-append date date-picker" >
                                                                            <input type="text" class="form-control" name="date">
                                                                            <span class="input-group-addon add-on"><i class="fa fa-calendar"></i></span>
                                                                        </div>
                                                                    </div>
                                                                </fieldset>
                                                                <div class="field-separator clearfix">
                                                                    <label for="adults-1">Adults</label>
                                                                    <select class="form-control" id="adults-1" >
                                                                        <option>3 adults</option>
                                                                        <option>3 adults</option>
                                                                        <option>Your destination</option>
                                                                        <option>Your destination</option>
                                                                    </select>

                                                                </div>
                                                                <div class="field-separator clearfix">
                                                                    <label for="children-1">Childrens</label>
                                                                    <select class="form-control" id="children-1">
                                                                        <option>5 childrens</option>
                                                                        <option>5 childrens</option>
                                                                        <option>Your destination</option>
                                                                        <option>Your destination</option>
                                                                    </select>
                                                                </div>
                                                                <div class="clearfix">
                                                                    <input type="submit" value="Search Train" class="t-btn btn-red">
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane" id="tab-flight3">
                                                        <div class="booking-criteria">
                                                            <h4>Book hotel</h4>
                                                            <ul>
                                                                <li><i class="glyphicon glyphicon-ok"></i> No.1 for booking in our surroundings</li>
                                                                <li><i class="glyphicon glyphicon-ok"></i> No hidden costs</li>
                                                                <li><i class="glyphicon glyphicon-ok"></i> Attractive offers with price advantage</li>
                                                            </ul>
                                                        </div>
                                                        <div class="bookingform">
                                                            <form action="#">
                                                                <fieldset>
                                                                    <div class="field-separator clearfix">
                                                                        <label>From</label>
                                                                        <input type="text" class="form-control" placeholder="Enter place / regions">
                                                                    </div>
                                                                    <div class="field-separator clearfix">
                                                                        <label>To</label>
                                                                        <input type="text" class="form-control" placeholder="Enter place / regions">
                                                                    </div>
                                                                    <div class="field-separator clearfix">
                                                                        <label>OutBound</label>
                                                                        <div class="input-group input-append date date-picker" >
                                                                            <input type="text" class="form-control" name="date">
                                                                            <span class="input-group-addon add-on"><i class="fa fa-calendar"></i></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="field-separator clearfix">
                                                                        <label>InBound</label>
                                                                        <div class="input-group input-append date date-picker" >
                                                                            <input type="text" class="form-control" name="date">
                                                                            <span class="input-group-addon add-on"><i class="fa fa-calendar"></i></span>
                                                                        </div>
                                                                    </div>
                                                                </fieldset>
                                                                <div class="field-separator clearfix">
                                                                    <label for="adults-3">Adults</label>
                                                                    <select class="form-control" id="adults-3" >
                                                                        <option>3 adults</option>
                                                                        <option>3 adults</option>
                                                                        <option>Your destination</option>
                                                                        <option>Your destination</option>
                                                                    </select>

                                                                </div>
                                                                <div class="field-separator clearfix">
                                                                    <label for="children-3">Childrens</label>
                                                                    <select class="form-control" id="children-3">
                                                                        <option>5 childrens</option>
                                                                        <option>5 childrens</option>
                                                                        <option>Your destination</option>
                                                                        <option>Your destination</option>
                                                                    </select>
                                                                </div>
                                                                <div class="clearfix">
                                                                    <input type="submit" value="Search Flight" class="t-btn btn-red">
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane active" id="tab-booking3">
                                                        <div class="booking-criteria">
                                                            <h4>tour Book</h4>
                                                            <ul>
                                                                <li><i class="glyphicon glyphicon-ok"></i> No.1 for booking in our surroundings</li>
                                                                <li><i class="glyphicon glyphicon-ok"></i> No hidden costs</li>
                                                                <li><i class="glyphicon glyphicon-ok"></i> Attractive offers with price advantage</li>
                                                            </ul>
                                                        </div>
                                                        <div class="bookingform">
                                                            <form action="#">
                                                                <fieldset>
                                                                    <div class="field-separator clearfix">
                                                                        <label>Destination</label>
                                                                        <input type="text" class="form-control" placeholder="Enter place / regions">
                                                                    </div>
                                                                    <div class="field-separator clearfix">
                                                                        <label>Check in</label>
                                                                        <div class="input-group input-append date date-picker" >
                                                                            <input type="text" class="form-control" name="date">
                                                                            <span class="input-group-addon add-on"><i class="fa fa-calendar"></i></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="field-separator clearfix">
                                                                        <label>Check out</label>
                                                                        <div class="input-group input-append date date-picker" >
                                                                            <input type="text" class="form-control" name="date">
                                                                            <span class="input-group-addon add-on"><i class="fa fa-calendar"></i></span>
                                                                        </div>
                                                                    </div>
                                                                </fieldset>
                                                                <div class="field-separator clearfix">
                                                                    <label>Name <span>*</span></label>
                                                                    <input type="text" class="form-control" >
                                                                </div>
                                                                <div class="field-separator clearfix">
                                                                    <label>Email <span>*</span></label>
                                                                    <input type="text" class="form-control" >
                                                                </div>
                                                                <div class="field-separator field-inline clearfix">
                                                                    <select class="form-control" id="adults" >
                                                                        <option>adults</option>
                                                                        <option>3 adults</option>
                                                                        <option>Your destination</option>
                                                                        <option>Your destination</option>
                                                                    </select>
                                                                    <select class="form-control" id="children">
                                                                        <option>childrens</option>
                                                                        <option>5 childrens</option>
                                                                        <option>Your destination</option>
                                                                        <option>Your destination</option>
                                                                    </select>
                                                                </div>
                                                                <div class="clearfix">
                                                                    <input type="submit" value="Book Now" class="t-btn btn-red">
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="ask-q-popup" tabindex="-1" role="dialog" aria-labelledby="ask-q-popup" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close"></i></button>
                                            <div class="booking-criteria">
                                                <h4>Ask Question <i class="fa fa-question-circle"></i></h4>
                                                <ul>
                                                    <li><i class="glyphicon glyphicon-ok"></i> No.1 for booking in our surroundings</li>
                                                    <li><i class="glyphicon glyphicon-ok"></i> No hidden costs</li>
                                                    <li><i class="glyphicon glyphicon-ok"></i> Attractive offers with price advantage</li>
                                                </ul>
                                            </div>
                                            <div class="question-form clearfix">
                                                <form action="#">
                                                    <div class="field-separator clearfix">
                                                        <label for="q-name">Name</label>
                                                        <input type="text" class="form-control" id="q-name" name="qname">
                                                    </div>
                                                    <div class="field-separator clearfix">
                                                        <label for="q-email">Email address</label>
                                                        <input type="text" class="form-control" name="qemail" id="q-email">
                                                    </div>
                                                    <div class="field-separator clearfix">
                                                        <label for="q-question">Question</label>
                                                        <textarea name="question" id="q-question" cols="30" rows="3"></textarea>
                                                    </div>
                                                    <div class="clearfix">
                                                        <input type="submit" value="SUBMIT" class="t-btn btn-red">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </footer>
                            </div>
                            <div class="tour-single-schedule animatedParent clearfix">
                                <ul class="nav nav-tabs animated fadeInUpShort" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#1" id="1-tab" role="tab" data-toggle="tab" aria-controls="1" aria-expanded="true">DAY-1</a>
                                        <span></span>
                                    </li>
                                    <li role="presentation">
                                        <a href="#2" role="tab" id="2-tab" data-toggle="tab" aria-controls="2">DAY-2</a>
                                        <span></span>
                                    </li>
                                    <li role="presentation">
                                        <a href="#3" role="tab" id="3-tab" data-toggle="tab" aria-controls="3">DAY-3</a>
                                        <span></span>
                                    </li>
                                </ul>
                                <div class="tab-content animated fadeInDownShort">
                                    <div role="tabpanel" class="tab-pane fade clearfix in active" id="1" aria-labelledby="1-tab">
                                        <img class="tab-img alignleft" src="<?php echo base_url();?>assets/front/images/tab-img.jpg" alt="one">
                                        <div class="contents">
                                            <h5 class="p-title">Tropical paradise one</h5>
                                            <p>
                                                Maecenas faucibus mollis interdum. Nulla vitaeryr
                                                elit libero, a pharetra augue. Integer posuere erero  ante  leo venenatis dapibus posuere velit aliquete Aenean eu leo quam. Pellentesque ornare semirat lacinia quam venenatis vestibulum.
                                            </p>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade clearfix" id="2" aria-labelledby="2-tab">
                                        <img class="tab-img alignleft" src="<?php echo base_url();?>assets/front/images/tab-img.jpg" alt="one">
                                        <div class="contents">
                                            <h5 class="p-title">Tropical paradise two</h5>
                                            <p>
                                                Maecenas faucibus mollis interdum. Nulla vitaeryr
                                                elit libero, a pharetra augue. Integer posuere erero  ante  leo venenatis dapibus posuere velit aliquete Aenean eu leo quam. Pellentesque ornare semirat lacinia quam venenatis vestibulum.
                                            </p>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade clearfix" id="3" aria-labelledby="3-tab">
                                        <img class="tab-img alignleft" src="<?php echo base_url();?>assets/front/images/tab-img.jpg" alt="one">
                                        <div class="contents">
                                            <h5 class="p-title">Tropical paradise three</h5>
                                            <p>
                                                Maecenas faucibus mollis interdum. Nulla vitaeryr
                                                elit libero, a pharetra augue. Integer posuere erero  ante  leo venenatis dapibus posuere velit aliquete Aenean eu leo quam. Pellentesque ornare semirat lacinia quam venenatis vestibulum.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tour-single-rates animatedParent clearfix">
                                <div class="accommodation animated fadeInUpShort clearfix">
                                    <ul class="clearfix">
                                        <li><strong>Economy Accomodation</strong> <span class="circle-icon"></span></li>
                                        <li><strong>type</strong><span class="circle-icon"></span></li>
                                        <li><strong>Jan-May</strong><span class="circle-icon"></span></li>
                                        <li><strong>June-dec</strong></li>
                                    </ul>
                                    <ul class="clearfix">
                                        <li>Thai Island hopper Resort</li>
                                        <li>Single</li>
                                        <li>&#36;550</li>
                                        <li>&#36;450</li>
                                    </ul>
                                    <ul class="clearfix">
                                        <li>Summer lake Family Hotel</li>
                                        <li>Double</li>
                                        <li>&#36;449</li>
                                        <li>&#36;399</li>
                                    </ul>
                                </div>
                                <div class="accommodation animated fadeInDownShort clearfix">
                                    <ul class="clearfix">
                                        <li><strong>Economy Accomodation</strong> <span class="circle-icon"></span></li>
                                        <li><strong>type</strong><span class="circle-icon"></span></li>
                                        <li><strong>Jan-May</strong><span class="circle-icon"></span></li>
                                        <li><strong>June-dec</strong></li>
                                    </ul>
                                    <ul class="clearfix">
                                        <li>Thai Island hopper Resort</li>
                                        <li>Single</li>
                                        <li>&#36;550</li>
                                        <li>&#36;450</li>
                                    </ul>
                                    <ul class="clearfix">
                                        <li>Summer lake Family Hotel</li>
                                        <li>Double</li>
                                        <li>&#36;449</li>
                                        <li>&#36;399</li>
                                    </ul>
                                </div>
                                <div class="accommodation animated fadeInUpShort clearfix">
                                    <ul class="clearfix">
                                        <li><strong>Economy Accomodation</strong> <span class="circle-icon"></span></li>
                                        <li><strong>type</strong><span class="circle-icon"></span></li>
                                        <li><strong>Jan-May</strong><span class="circle-icon"></span></li>
                                        <li><strong>June-dec</strong></li>
                                    </ul>
                                    <ul class="clearfix">
                                        <li>Thai Island hopper Resort</li>
                                        <li>Single</li>
                                        <li>&#36;550</li>
                                        <li>&#36;450</li>
                                    </ul>
                                    <ul class="clearfix">
                                        <li>Summer lake Family Hotel</li>
                                        <li>Double</li>
                                        <li>&#36;449</li>
                                        <li>&#36;399</li>
                                    </ul>
                                </div>
                            </div>
                        </article>
                        <div class="related-tours clearfix">
                            <header class="header-with-nav animatedParent clearfix">
                                <h3 class="title pull-left animated growIn slower">Related Tours</h3>
                                <a class="pull-right animated growIn slower" href="#">SEE All Tours</a>
                            </header>
                            <div class="row">
                                <div class="col-md-4 col-xs-6 animatedParent">
                                    <article class="tour-post animated fadeInLeftShort">
                                        <header class="tour-post-header clearfix">
                                            <span class="tour-price pull-left">&#36;299.00</span>
                                            <span class="tour-days pull-right"><i class="fa fa-clock-o"></i>&nbsp; 3 days</span>
                                        </header>
                                        <div class="tour-contents clearfix">
                                            <figure class="tour-feature-img">
                                                <img src="<?php echo base_url();?>assets/front/images/tour-carousel-img.jpg" alt="Image"/>
                                            </figure>
                                            <h5 class="entry-title p-name">Thai island hopper east</h5>
                                            <a class="more-details u-url" href="#">See tour details <i class="dashicons dashicons-arrow-right-alt2"></i></a>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-md-4 col-xs-6 animatedParent">
                                    <article class="tour-post animated fadeInUpShort">
                                        <header class="tour-post-header clearfix">
                                            <span class="tour-price pull-left">&#36;299.00</span>
                                            <span class="tour-days pull-right"><i class="fa fa-clock-o"></i>&nbsp; 3 days</span>
                                        </header>
                                        <div class="tour-contents clearfix">
                                            <figure class="tour-feature-img">
                                                <img src="<?php echo base_url();?>assets/front/images/tour-carousel-img.jpg" alt="Image"/>
                                            </figure>
                                            <h5 class="entry-title p-name">Thai island hopper east</h5>
                                            <a class="more-details u-url" href="#">See tour details <i class="dashicons dashicons-arrow-right-alt2"></i></a>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-md-4 col-xs-6 animatedParent">
                                    <article class="tour-post animated fadeInRightShort">
                                        <header class="tour-post-header clearfix">
                                            <span class="tour-price pull-left">&#36;299.00</span>
                                            <span class="tour-days pull-right"><i class="fa fa-clock-o"></i>&nbsp; 3 days</span>
                                        </header>
                                        <div class="tour-contents clearfix">
                                            <figure class="tour-feature-img">
                                                <img src="<?php echo base_url();?>assets/front/images/tour-carousel-img.jpg" alt="Image"/>
                                            </figure>
                                            <h5 class="entry-title p-name">Thai island hopper east</h5>
                                            <a class="more-details u-url" href="#">See tour details <i class="dashicons dashicons-arrow-right-alt2"></i></a>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4">
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
                                        <img src="<?php echo base_url();?>assets/front/images/blog-post-widget-img.jpg" alt="Blog Image"/>
                                    </figure>
                                    <h6 class="title"><a href="#">the standard blog post title</a></h6>
                                    <time datetime="2007-08-29T13:58Z"  class="post-meta"><i class="fa fa-clock-o"></i> 08 Nov @014</time>
                                </article>
                                <article class="post blog-post-widget clearfix animated fadeInUpShort">
                                    <figure class="blog-feature-img pull-right">
                                        <img src="<?php echo base_url();?>assets/front/images/blog-post-widget-img.jpg" alt="Blog Image"/>
                                    </figure>
                                    <h6 class="title"><a href="#">the standard blog post title</a></h6>
                                    <time datetime="2007-08-29T13:58Z"  class="post-meta"><i class="fa fa-clock-o"></i> 08 Nov @014</time>
                                </article>
                                <article class="post blog-post-widget clearfix animated fadeInUpShort">
                                    <figure class="blog-feature-img pull-right">
                                        <img src="<?php echo base_url();?>assets/front/images/blog-post-widget-img.jpg" alt="Blog Image"/>
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