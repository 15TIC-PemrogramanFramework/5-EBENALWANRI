<div id="content" class="site-content">
        <div id="tropical-banner" class=" text-center clearfix">
            <img src="<?php echo base_url();?>assets/front/images/banner.jpg" alt="banner"/>
            <div class="container banner-contents clearfix">
                <h2 class="template-title p-name"><strong>Where We Go</strong></h2>
            </div>
            <div class="breadcrumb-wrapper clearfix">
                <div class="container">
                    <ol class="breadcrumb">
                        <li><a href="index-2.html" >Home</a></li>
                        <li class="active">Where We Go</li>
                    </ol>
                </div>
            </div>
            <span class="overlay"></span>
        </div>

        <section class="tour-page clearfix">
            <div class="container">

                <div class="row">
                    <div class="col-md-9 col-sm-8">
                        <header class="section-header clearfix">
                            <div class="sorting pull-left">
                                <select class="form-control" >
                                <option>Pilih Kota</option>
                                <?php foreach ($kota as $kota) { ?>
                                    <option value="<?php echo $kota['id_kota'];?>"><?php echo $kota['nama_kota'];?></option>
                                <?php } ?>
                                </select>
                            </div>
                            <div class="layout-control pull-right clearfix">
                                <a data-layout="4" href="#"><i class="fa fa-th"></i></a>
                                <a data-layout="12" href="#"><i class="fa fa-th-list"></i></a>
                            </div>
                        </header>
                        <div class="row">
                        <?php foreach ($bis as $bis){?>
                            <div class="tour-item col-md-4 col-sm-6 animatedParent">
                                <article class="tour-post animated fadeInDownShort">
                                    <header class="tour-post-header clearfix">
                                        <span class="tour-price pull-left">$299.00</span>
                                        <span class="tour-days pull-right"><i class="fa fa-clock-o"></i>&nbsp; 3 days</span>
                                    </header>
                                    <div class="tour-contents clearfix">
                                        <figure class="tour-feature-img">
                                            <a href="<?php echo base_url('terminal/detil/'.$bis['id_bis']);?>"> <img src="<?php echo base_url();?>assets/front/images/tour-carousel-img-1.jpg" alt="Image"/></a>
                                        </figure>
                                        <h5 class="entry-title p-name"><a href="single-where-we-go.html"><?php echo $bis['nama_bis'];?></a></h5>
                                        <div class="entry-contents hide clearfix">
                                            <p> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremo emque laudantium, totam rem aperiam, eaqueipsa quae ab illo inventore veritatis et oquasi architecto beatae vitae dicta sunt explicabo. </p>
                                        </div>
                                        <a class="more-details u-url" href="<?php echo base_url('index.php/bis/detil/'.$bis['id_bis']);?>">Lihat Bis <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </article>
                            </div>
                        <?php } ?>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 animatedParent">
                        <section class="advance-tour-filter animated fadeInRightShort clearfix">
                            <h5 class="widget-title">filter the result</h5>
                            <div class="search widget clearfix">
                                <form method="get"  class="search-form" action="#">
                                    <div>
                                        <input type="text" value="" name="s" class="search-text">
                                        <input type="submit" class="search-submit" value="">
                                        <i class="fa fa-search"></i>
                                    </div>
                                </form>
                            </div>
                            <fieldset>
                                <h5>destination</h5>
                                <ul>
                                    <li>
                                        <input type="radio" id="d1" name="dc" />
                                        <label for="d1"><span></span>Africa</label>
                                    </li>
                                    <li>
                                        <input type="radio" id="d2" name="dc" />
                                        <label for="d2"><span></span>Australia</label>
                                    </li>
                                    <li>
                                        <input type="radio" id="d3" name="dc" />
                                        <label for="d3"><span></span>Asia</label>
                                    </li>
                                    <li>
                                        <input type="radio" id="d4" name="dc" />
                                        <label for="d4"><span></span>Europe</label>
                                    </li>
                                    <li>
                                        <input type="radio" id="d5" name="dc" />
                                        <label for="d5"><span></span>North America</label>
                                    </li>
                                    <li>
                                        <input type="radio" id="d6" name="dc" />
                                        <label for="d6"><span></span>South America</label>
                                    </li>
                                </ul>
                            </fieldset>
                            <fieldset>
                                <h5>Departure</h5>
                                <div class="input-group input-append date date-picker" >
                                    <input type="text" class="form-control" name="date" value="Check in Date">
                                    <span class="input-group-addon add-on"><i class="fa fa-calendar"></i></span>
                                </div>
                                <div class="input-group input-append date date-picker" >
                                    <input type="text" class="form-control" name="date" value="Check out Date">
                                    <span class="input-group-addon add-on"><i class="fa fa-calendar"></i></span>
                                </div>
                            </fieldset>
                            <fieldset>
                                <h5>Category</h5>
                                <ul>
                                    <li>
                                        <input type="radio" id="c1" name="cc" />
                                        <label for="c1"><span></span>Beach Holidays</label>
                                    </li>
                                    <li>
                                        <input type="radio" id="c2" name="cc" />
                                        <label for="c2"><span></span>City Breaks</label>
                                    </li>
                                    <li>
                                        <input type="radio" id="c3" name="cc" />
                                        <label for="c3"><span></span>Resorts</label>
                                    </li>
                                    <li>
                                        <input type="radio" id="c4" name="cc" />
                                        <label for="c4"><span></span>Tropical Island</label>
                                    </li>
                                </ul>
                            </fieldset>
                            <fieldset class="range-filter">
                                <input type="text" id="amount" readonly>
                                <div id="slider-range"></div>
                            </fieldset>
                            <input class="btn btn-red tour-filter-btn" name="search-tour" type="submit" value="Filter">
                        </section>            </div>
                </div>
            </div>
        </section>



    </div><!-- .site-content -->
