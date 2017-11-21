<body>
<div id="page" class="hfeed site">
    <header id="masthead" class="site-header" role="banner">
        <div class="site-header-head clearfix">
            <div class="container header-user h-card">
                <div class="header-user-name pull-left">
                Selamat di <?php echo $site['nama_website'];?> 
                </div>
                <div class="header-user-tel pull-right">
                    <i class="fa fa-mobile-phone fa-lg"></i>
                    <span class="tel"><?php echo $site['telepone'];?></span>
                </div>

                <div class="header-user-email pull-right">
                    <i class="fa fa-envelope-o"></i>
                    <a class="u-url" href="mailto:<?php echo $site['email'];?>" >
                    <?php echo $site['email'];?>
                    </a>
                </div>
            </div>
        </div>
        <div class="site-branding">
            <div class="container">
                <h1 class="site-title pull-left">
                    <a href="index-2.html" rel="home">
                        <img src="<?php echo base_url();?>assets/front/images/logo.png" alt="logo"/>
                    </a>
                </h1>
                <div class="header-search pull-right clearfix">
                    <i class="fa fa-search"></i>
                    <div class="search clearfix">
                        <form method="get"  class="search-form" action="#">
                            <div>
                                <input type="text" placeholder="Search" name="s" class="search-text" >
                                <input type="submit" class="search-submit" value="" >
                            </div>
                        </form>
                    </div>
                </div>
                <nav class="main-nav pull-right" role="navigation">
                    <div class="menu-primary-menu-container">
                        <ul id="menu-primary-menu" class="main-menu">
                            <li>
                                <a href="index-2.html">Home</a>
                                <ul class="sub-menu">
                                    <li><a href="home-var-two.html">Home two</a></li>
                                    <li><a href="home-var-three.html">Home three</a></li>
                                </ul>
                            </li>
                            <li class="mega-menu-nav">
                                <a href="<?php echo base_url('index.php/terminal');?>">Terminal</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('index.php/bis');?>">Bis</a>
                            </li>
                            <li><a href="<?php echo base_url('index.php/tiket');?>">Tiket</a></li>
                            <li> <a href="<?php echo base_url('index.php/kontak');?>">Kontak</a> </li>
                        </ul>
                    </div>
                </nav>
            </div><!-- .container -->
        </div><!-- .site-branding -->
    </header><!-- .site-header -->