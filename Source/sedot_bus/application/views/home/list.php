    <div id="content" class="site-content">

        <div class="main-slider-wrap">
            <div class="main-slider">
                <div class="item">
                    <img src="<?php echo base_url();?>assets/front/images/slide1.jpg" alt="one"/>
                    <div class="slide-details clearfix">
                        <h3 class="title"><span>Have adventure trip with</span><span> tropical </span></h3>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo base_url();?>assets/front/images/slide2.jpg" alt="one"/>
                    <div class="slide-details clearfix">
                        <h3 class="title"><span>Have adventure trip with</span><span> tropical </span></h3>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo base_url();?>assets/front/images/slide3.jpg" alt="one"/>
                    <div class="slide-details clearfix">
                        <h3 class="title"><span>Have adventure trip with</span><span> tropical </span></h3>
                    </div>
                </div>
            </div>

            <form id="adv-search" action="#">
                <div class="container">
                    <fieldset>
                        <legend><span>Find the Tour</span></legend>
                        <div class="form-wrap clearfix">
                            <select class="form-control" id="places" >
                                <option>Africa</option>
                                <option>India</option>
                                <option>America</option>
                                <option>Russia</option>
                            </select>
                            <div class="input-group input-append date date-picker" >
                                <input type="text" class="form-control" name="date" value="CHECK-IN DATE">
                                <span class="input-group-addon add-on"><i class="fa fa-calendar"></i></span>
                            </div>
                            <div class="input-group input-append date date-picker" >
                                <input type="text" class="form-control" name="date" value="CHECK-OUT DATE">
                                <span class="input-group-addon add-on"><i class="fa fa-calendar"></i></span>
                            </div>
                            <select class="form-control" id="budget" >
                                <option>MAX-BUDGET</option>
                                <option>$300</option>
                                <option>$400</option>
                                <option>$500</option>
                                <option>$600</option>
                            </select>
                            <input name="search-tour" type="submit" value="Search Tours">
                        </div>

                    </fieldset>
                </div>
            </form>
        </div>
        <section class="home-services section-separator animatedParent">
            <div class="container">
                <header class="section-header header-with-nav clearfix">
                    <h3 class="title pull-left animated growIn slower">Terminal</h3>
                    <a class="pull-right animated growIn slower" href="<?php echo base_url('index.php/terminal');?>">SEE ALL</a>
                </header>
                <div class="row">
                <?php foreach ($terminal as $terminal){?>
                    <div class="col-sm-4 col-xs-6">
                        <article class="service-var-1 animated fadeInRightShort">
                            <div class="wrapper text-center clearfix">
                                <figure class="feature-img clearfix">
                                    <a class=" u-url u-photo" href="#"><img src="<?php echo base_url();?>assets/front/images/features-img.jpg" alt="image"/></a>
                                    <span class="overlay"></span>
                                </figure>
                            <span class="icon-wrapper">
                                <span class="icon">
                                    <i class="fa fa-hospital-o"></i>
                                </span>
                            </span>
                            </div>
                            <div class="contents clearfix">
                                <h5 class="entry-title p-name"><?php echo $terminal['nama_terminal'];?></h5>
                                <a href="<?php echo base_url('index.php/terminal/detil/'.$terminal['id_terminal']);?>" class="t-btn btn-red">View</a>
                            </div>
                        </article>
                    </div>
                <?php } ?>
                </div>
            </div>    </section>
        <section class="home-tour animatedParent">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-6">
                        <header class="section-header header-with-nav first clearfix">
                            <h3 class="title pull-left animated growIn slower">Explore the World by type</h3>
                            <a class="pull-right animated growIn slower" href="#">SEE ALL</a>
                        </header>
                        <div class="row">
                            <div class="col-md-6">
                                <article class="service-var-2 animated flipInY clearfix">
                                    <div class="icon-wrap">
                                        <i class="dashicons dashicons-universal-access"></i>
                                    </div>
                                    <div class="contents-wrap">
                                        <h5 class="entry-title p-name">Beach Holidays</h5>
                                        <small>4 tours available </small>
                                    </div>
                                    <a class="more" href="#"><i class="fa fa-angle-right"></i></a>
                                </article>
                            </div>
                            <div class="col-md-6">
                                <article class="service-var-2 animated flipInY clearfix">
                                    <div class="icon-wrap">
                                        <i class="dashicons dashicons-editor-removeformatting"></i>
                                    </div>
                                    <div class="contents-wrap">
                                        <h5 class="entry-title p-name">City breaks</h5>
                                        <small>4 tours available </small>
                                    </div>
                                    <a class="more" href="#"><i class="fa fa-angle-right"></i></a>
                                </article>
                            </div>
                            <div class="col-md-6">
                                <article class="service-var-2 animated flipInY clearfix">
                                    <div class="icon-wrap">
                                        <i class="dashicons dashicons-cloud"></i>
                                    </div>
                                    <div class="contents-wrap">
                                        <h5 class="entry-title p-name">Adventure Tour</h5>
                                        <small>6 tours available </small>
                                    </div>
                                    <a class="more" href="#"><i class="fa fa-angle-right"></i></a>
                                </article>
                            </div>
                            <div class="col-md-6">
                                <article class="service-var-2 animated flipInY clearfix">
                                    <div class="icon-wrap">
                                        <i class="dashicons dashicons-admin-site"></i>
                                    </div>
                                    <div class="contents-wrap">
                                        <h5 class="entry-title p-name">Resort</h5>
                                        <small>5 tours available </small>
                                    </div>
                                    <a class="more" href="#"><i class="fa fa-angle-right"></i></a>
                                </article>
                            </div>
                        </div>
                        <header class="section-header header-with-nav second clearfix">
                            <h3 class="title pull-left animated growIn slower">choose Your destination</h3>
                            <a class="pull-right animated growIn slower" href="#">SEE ALL</a>
                        </header>
                        <div class="tour-by-destination animated flipInX slower clearfix">
                            <div class="item">
                                <article class="destination-item clearfix">
                                    <div class="map text-center">
                                        <h6 class="title">mykonos</h6>
                                        <img src="<?php echo base_url();?>assets/front/images/map-img.png" alt="map"/>
                                    </div>
                                    <div class="destination-detail">
                                        <img src="<?php echo base_url();?>assets/front/images/destination-img-1.jpg" alt="Destination"/>
                                        <ul class="arrow-list">
                                            <li><a href="#">All Destinations</a></li>
                                            <li><a href="#">Manly</a></li>
                                            <li><a href="#">Parramatta</a></li>
                                            <li><a href="#">Penrith</a></li>
                                        </ul>
                                        <div class="destination-content clearfix">
                                            <h5 class="title">Tropical Island</h5>
                                            <small> Cosmopolitan Atmosphere</small>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="item">
                                <article class="destination-item clearfix">
                                    <div class="map text-center">
                                        <h6 class="title">mykonos</h6>
                                        <img src="<?php echo base_url();?>assets/front/images/map-img.png" alt="map"/>
                                    </div>
                                    <div class="destination-detail">
                                        <img src="<?php echo base_url();?>assets/front/images/destination-img.jpg" alt="Destination"/>
                                        <ul class="arrow-list">
                                            <li><a href="#">Parramatta</a></li>
                                            <li><a href="#">Manly</a></li>
                                            <li><a href="#">Penrith</a></li>
                                            <li><a href="#">All Destinations</a></li>
                                        </ul>
                                        <div class="destination-content clearfix">
                                            <h5 class="title">Africain island</h5>
                                            <small> Cosmopolitan Atmosphere</small>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="item">
                                <article class="destination-item clearfix">
                                    <div class="map text-center">
                                        <h6 class="title">mykonos</h6>
                                        <img src="<?php echo base_url();?>assets/front/images/map-img.png" alt="map"/>
                                    </div>
                                    <div class="destination-detail">
                                        <img src="<?php echo base_url();?>assets/front/images/destination-img-3.jpg" alt="Destination"/>
                                        <ul class="arrow-list">
                                            <li><a href="#">Manly</a></li>
                                            <li><a href="#">All Destinations</a></li>
                                            <li><a href="#">Penrith</a></li>
                                            <li><a href="#">Parramatta</a></li>
                                        </ul>
                                        <div class="destination-content clearfix">
                                            <h5 class="title">mykonos island</h5>
                                            <small> Cosmopolitan Atmosphere</small>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="item">
                                <article class="destination-item clearfix">
                                    <div class="map text-center">
                                        <h6 class="title">mykonos</h6>
                                        <img src="<?php echo base_url();?>assets/front/images/map-img.png" alt="map"/>
                                    </div>
                                    <div class="destination-detail">
                                        <img src="<?php echo base_url();?>assets/front/images/destination-img-4.jpg" alt="Destination"/>
                                        <ul class="arrow-list">
                                            <li><a href="#">Parramatta</a></li>
                                            <li><a href="#">All Destinations</a></li>
                                            <li><a href="#">Manly</a></li>
                                            <li><a href="#">Penrith</a></li>
                                        </ul>
                                        <div class="destination-content clearfix">
                                            <h5 class="title">mykonos island</h5>
                                            <small> Cosmopolitan Atmosphere</small>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="booking-tabs animated flipInY slowest" role="tabpanel">

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
                                                <label for="adults-1">Adults</label>
                                                <select class="form-control" id="adults-1">
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
            </div>
        </section>
        <section class="home-special-offers animatedParent clearfix">
            <div class="container">
                <header class="section-header header-with-nav clearfix">
                    <h3 class="title pull-left animated growIn">Latest Offers Tours</h3>
                    <a class="pull-right animated growIn" href="#">see more offers</a>
                </header>
                <div class="tour-carousel animated flipInX clearfix">
                    <article class="tour-post">
                        <i class="circle-icon"></i>
                        <header class="tour-post-header clearfix">
                            <span class="tour-price pull-left">$299.00</span>
                            <span class="tour-price-off pull-right">30% OFF</span>
                        </header>
                        <div class="tour-contents clearfix">
                            <figure class="tour-feature-img">
                                <img src="<?php echo base_url();?>assets/front/images/tour-carousel-img-4.jpg" alt="Image"/>
                            </figure>
                            <h5 class="entry-title p-name">Thai island hopper east</h5>
                            <a class="more-details u-url" href="#">See tour details <i class="fa fa-angle-right"></i></a>
                        </div>
                    </article>
                    <article class="tour-post">
                        <header class="tour-post-header clearfix">
                            <span class="tour-price pull-left">$299.00</span>
                            <span class="tour-price-off pull-right">30% OFF</span>
                            <i class="circle-icon"></i>
                        </header>
                        <div class="tour-contents clearfix">
                            <figure class="tour-feature-img">
                                <img src="<?php echo base_url();?>assets/front/images/tour-carousel-img-1.jpg" alt="Image"/>
                            </figure>
                            <h5 class="entry-title p-name">Thai island hopper east</h5>
                            <a class="more-details u-url" href="#">See tour details <i class="fa fa-angle-right"></i></a>
                        </div>
                    </article>
                    <article class="tour-post">
                        <header class="tour-post-header clearfix">
                            <span class="tour-price pull-left">$299.00</span>
                            <span class="tour-price-off pull-right">30% OFF</span>
                            <i class="circle-icon"></i>
                        </header>
                        <div class="tour-contents clearfix">
                            <figure class="tour-feature-img">
                                <img src="<?php echo base_url();?>assets/front/images/tour-carousel-img-2.jpg" alt="Image"/>
                            </figure>
                            <h5 class="entry-title p-name">Thai island hopper east</h5>
                            <a class="more-details u-url" href="#">See tour details <i class="fa fa-angle-right"></i></a>
                        </div>
                    </article>
                    <article class="tour-post">
                        <header class="tour-post-header clearfix">
                            <span class="tour-price pull-left">$299.00</span>
                            <span class="tour-price-off pull-right">30% OFF</span>
                            <i class="circle-icon"></i>
                        </header>
                        <div class="tour-contents clearfix">
                            <figure class="tour-feature-img">
                                <img src="<?php echo base_url();?>assets/front/images/tour-carousel-img-3.jpg" alt="Image"/>
                            </figure>
                            <h5 class="entry-title p-name">Thai island hopper east</h5>
                            <a class="more-details u-url" href="#">See tour details <i class="fa fa-angle-right"></i></a>
                        </div>
                    </article>
                    <article class="tour-post">
                        <header class="tour-post-header clearfix">
                            <span class="tour-price pull-left">$299.00</span>
                            <span class="tour-price-off pull-right">30% OFF</span>
                            <i class="circle-icon"></i>
                        </header>
                        <div class="tour-contents clearfix">
                            <figure class="tour-feature-img">
                                <img src="<?php echo base_url();?>assets/front/images/tour-carousel-img-4.jpg" alt="Image"/>
                            </figure>
                            <h5 class="entry-title p-name">Thai island hopper east</h5>
                            <a class="more-details u-url" href="#">See tour details <i class="fa fa-angle-right"></i></a>
                        </div>
                    </article>
                    <article class="tour-post">
                        <header class="tour-post-header clearfix">
                            <span class="tour-price pull-left">$299.00</span>
                            <span class="tour-price-off pull-right">30% OFF</span>
                            <i class="circle-icon"></i>
                        </header>
                        <div class="tour-contents clearfix">
                            <figure class="tour-feature-img">
                                <img src="<?php echo base_url();?>assets/front/images/tour-carousel-img-5.jpg" alt="Image"/>
                            </figure>
                            <h5 class="entry-title p-name">Thai island hopper east</h5>
                            <a class="more-details u-url" href="#">See tour details <i class="fa fa-angle-right"></i></a>
                        </div>
                    </article>
                    <article class="tour-post">
                        <header class="tour-post-header clearfix">
                            <span class="tour-price pull-left">$299.00</span>
                            <span class="tour-price-off pull-right">30% OFF</span>
                            <i class="circle-icon"></i>
                        </header>
                        <div class="tour-contents clearfix">
                            <figure class="tour-feature-img">
                                <img src="<?php echo base_url();?>assets/front/images/tour-carousel-img-5.jpg" alt="Image"/>
                            </figure>
                            <h5 class="entry-title p-name">Thai island hopper east</h5>
                            <a class="more-details u-url" href="#">See tour details <i class="fa fa-angle-right"></i></a>
                        </div>
                    </article>
                    <article class="tour-post">
                        <header class="tour-post-header clearfix">
                            <span class="tour-price pull-left">$299.00</span>
                            <span class="tour-price-off pull-right">30% OFF</span>
                            <i class="circle-icon"></i>
                        </header>
                        <div class="tour-contents clearfix">
                            <figure class="tour-feature-img">
                                <img src="<?php echo base_url();?>assets/front/images/tour-carousel-img-3.jpg" alt="Image"/>
                            </figure>
                            <h5 class="entry-title p-name">Thai island hopper east</h5>
                            <a class="more-details u-url" href="#">See tour details <i class="fa fa-angle-right"></i></a>
                        </div>
                    </article>
                </div>
            </div>
        </section>

    </div><!-- .site-content -->