<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<?php if (qtrans_getLanguage() == 'en'): ?>

<nav class="navbar navbar-default" role="navigation">
    <div class="navbar-header text-center menu-hover"> <a class="navbar-brand" href="javascript:void(0)"></a> </div>
    <div class="navbar-collapse">
      <ul class="nav navbar-nav text-center">
        <li id="home-icon" class="active menu-hover"><a href="javascript:void(0)"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/home-icon.jpg" /></a></li>
        <li id="media-icon" class="menu-hover"><a href="javascript:void(0)"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/media-icon.jpg" /></a></li>
        <li id="recruit-icon" class="menu-hover"><a href="javascript:void(0)"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/recruit-icon.jpg" /></a></li>
        <li id="about-icon" class="menu-hover"><a href="javascript:void(0)"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/about-icon.jpg" /></a></li>
        <li><?php qtrans_generateLanguageSelectCode(); ?></li>
      </ul>
    </div>
    <div class="popout-menu" style="display:none;"  >
      <ul>
        <a class="grey-logo" href="#top-image">
        <li><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/logo-venture-grey.jpg" /></li>
        </a>
        <div class="popout-menu-wrapper"> <a class="popout-menu-title" href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <li>Home</li>
          </a>
          <ul class="sub-menu home-menu is_page_menu" style="display:none">
             <a href="#services">
            <li><span class="menu-icon cog"></span>Services</li>
            </a> <a href="#statistics">
            <li><span class="menu-icon pie-chart"></span>Growth Statistics</li>
            </a> <a href="#publicity">
            <li><span class="menu-icon eye"></span>Publicity</li>
            </a> <a href="#ceo">
            <li><span class="menu-icon speach_bubble"></span>Our Mission & CEO</li>
            </a> <a href="#history">
            <li><span class="menu-icon ribbon"></span>Our History</li>
            </a> <a href="#business-alliances">
            <li><span class="glyphicon glyphicon-globe"></span>Business Alliances</li>
            </a> <a href="#contact">
            <li><span class="menu-icon align"></span>Contact VR</li>
            </a>
          </ul>
        </div>
        <div class="popout-menu-wrapper"> <a class="popout-menu-title" href="<?php echo esc_url( home_url( '/' ) ); ?>media">
          <li>Media</li>
          </a>
          <ul class="sub-menu media-menu" style="display:none">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>/media#news">
            <li><span class="menu-icon icon-text-left"></span>Recent News</li>
            </a> <a href="media#video">
            <li><span class="menu-icon play"></span>Commercial/Video Stream</li>
            </a> <a href="media#press">
            <li><span class="menu-icon pad"></span>Press Releases</li>
            </a> <a href="media#contact">
            <li><span class="menu-icon align"></span>Contact VR</li>
            </a>
          </ul>
        </div>
        <div class="popout-menu-wrapper"> <a class="popout-menu-title" href="recruit">
          <li>Recruit</li>
          </a>
          <ul class="sub-menu recruit-menu" style="display:none">
            <a href="recruit#values">
            <li><span class="menu-icon star"></span>Our Values</li>
            </a> <a href="recruit#team">
            <li><span class="menu-icon users"></span>Meet the Team</li>
            </a> <a href="recruit#work_at_vr">
            <li><span class="menu-icon user"></span>Work at VR</li>
            </a>
          </ul>
        </div>
        <div class="popout-menu-wrapper"> <a class="popout-menu-title" href="about">
          <li>About</li>
          </a> </div>
      </ul>
    </div>
  </nav>
</header>
<!-- Content -->
<div id="skrollr-body">
  <div class="main-content">
    <div class="container-fluid">
      <!-- Top image -->
      <div class="row relative home-top" id="top-image">
        <div class="logo-top"><img src="<?php bloginfo('template_url'); ?>/img/logo-white.png" /></div>
        <div class="absolute-center-parent">
          <h1 class="absolute-center">Born to answer all of our customers’ <br />questions about travel </h1>
        </div>
      </div>
      <!-- Travel & Hotel -->
      <div id="services" class="row domestic-travel"><a class="active-tab" href="#" rel="travel-jp">
        <div class="col-md-6 text-center"> <span class="wrapper-test"><img class="pad2" src="<?php bloginfo('template_url'); ?>/img/travel-jp-logo.png" /></span></div>
        </a> <a class="tab" href="#" rel="hotel-jp">
        <div class="col-md-6 text-center"><span class="wrapper-test"><img class="pad2" src="<?php bloginfo('template_url'); ?>/img/hotel-jp-logo.png" /></span></div>
        </a> </div>
      <div class="domestic-travel-wrapper relative"> 
        <!-- Tab  1 -->
        <div class="row" id="travel-jp">
          <div class="right-social-networks"><a href="https://www.facebook.com/travel.jp" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/white-fb.png" /></a><a href="https://twitter.com/travel_jp" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/white-twitter.png" /></a></div>
          <div class="col-md-10 col-md-offset-1 text-center">
            <h3>Japan’s leading travel search engine</h3>
            <div class="row">
              <div class="col-md-4 col-md-offset-2 col-sm-6 text-right center-on-mobile visible"> <a href="http://travel.jp" target="_blank" class="btn btn-lg btn-default turquoise-btn">Visit Travel.jp</a> </div>
              <div class="col-md-4 col-sm-6 text-left center-on-mobile visible"> <a href="https://itunes.apple.com/jp/app/travel.jp-toraberu-jepi-guo/id923319321?mt=8&ign-mpt=uo%3D4" target="_blank" class="btn btn-lg btn-default light-blue-btn">App Store</a> </div>
            </div>
            <div class="row tabiness-wrapper">
              <div class="col-sm-3 col-sm-offset-2 col-xs-12 center-on-mobile text-right"><img class="tabiness" src="<?php bloginfo('template_url'); ?>/img/travel-jp-tabiness.png" /></div>
              <div class="col-sm-5 col-xs-12 text-left center-on-mobile">
                <p>Japan’s leading online travel media</p>
              </div>
              </div>
              <div class="row">
                <div class="col-md-4 col-md-offset-2 col-sm-6 text-right center-on-mobile visible"> <a href="http://guide.travel.co.jp/" target="_blank" class="btn btn-lg btn-default dark-yellow-btn">Visit Tabiness<span>IN JAPANESE</span></a> </div>
                <div class="col-md-4 col-sm-6 text-left center-on-mobile visible"> <a href="http://trip101.com" target="_blank" class="btn btn-lg btn-default dark-yellow-btn">Visit Trip 101<span>IN ENGLISH</span></a> </div>
              </div>
            </div>
          </div>
        
        <!-- Tab  2 -->
        <div id="hotel-jp" class="row" style="display:none;">
          <div class="right-social-networks"><a href="https://www.facebook.com/hotel.jp" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/white-fb.png" /></a><a href="https://twitter.com/_hoteljp" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/white-twitter.png" /></a></div>
          <div class="col-md-6 col-md-offset-3 text-center">
            <h3>Japan’s leading search engines for hotels and ryokans</h3>
          </div>
          <div class="col-md-4 col-md-offset-2 col-sm-6 text-right visible center-on-mobile"> <a href="http://hotel.jp" target="_blank" class="btn btn-default turquoise-btn" style="width:275px">Visit Hotel.jp (Japan)</a> </div>
          <div class="col-md-4 col-sm-6 text-left center-on-mobile visible"> <a href="http://hotel.jp/world/?language=en" target="_blank" class="btn btn-default turquoise-btn" style="width:275px">Visit Hotel.jp (Worldwide)</a> </div>
          <div class="col-md-3 col-md-offset-3 col-sm-6 text-right visible center-on-mobile"> <a href="https://itunes.apple.com/jp/app/hoteru-jepi-hotel.jp-kuchikomide/id445300541?mt=8" target="_blank" class="btn btn-lg btn-default light-blue-btn">App Store</a> </div>
          <div class="col-md-3 col-sm-6 text-left center-on-mobile visible"> <a href="https://play.google.com/store/apps/details?id=jp.hotel.android&hl=en" target="_blank" class="btn btn-lg btn-default light-blue-btn">Google Play</a> </div>
        </div>
      </div>
      
      <!-- Map 1 / Japan -->
      <div class="row relative map" data-bottom-top="background-position:0% 0%" data-center="background-position:50% 0%" data-top-bottom="background-position:100% 0%"> <img data-bottom-top="opacity:1;" data-bottom="opacity:0.2" class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/global-initiative-map-no-japan.png" />
        <div class="blue-ribbon">
          <h3>Japan</h3>
        </div>
        <div class="japan-only-map"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/collaboration-map-japan.png"></div>
      </div>
      <!-- Investments -->
      <div class="row relative investment"> <a class="active-tab" rel="the-list" href="#">
        <div class="col-lg-4 col-md-4 text-center"><span class="wrapper-test"><img class="pad10" src="<?php bloginfo('template_url'); ?>/img/the-list-logo.png" /></span></div>
        </a> 
        
        <!-- FOR MOBILE 1 -->
        <div class="investment-wrapper thelist-mobile"> 

        </div>
        
        
        <a class="tab" rel="flocations" href="#">
        <div class="col-lg-4 col-md-4 text-center"><span class="wrapper-test"><img class="pad10" src="<?php bloginfo('template_url'); ?>/img/flocations-logo.png" /></span></div>
        </a>
        
        <!-- FOR MOBILE 2 -->
        <div class="investment-wrapper flocations-mobile"> 
        
        </div>
        
        
        <a class="tab" rel="telunjuk" href="#">
        <div class="col-lg-4 col-md-4 text-center"><span class="wrapper-test"><img class="pad10" src="<?php bloginfo('template_url'); ?>/img/telunjuk-logo.png" /></span></div>
        </a>
        
        <!-- FOR MOBILE 3 -->
        <div class="investment-wrapper telunjuk-mobile">
        </div>
        
        </div>
      <div class="investment-wrapper hide-on-mobile"> 
        <!-- Tab 1 -->
        <div id="the-list" class="row visible text-center">
          <div class="col-md-12 visible">
            <h3>A curated shortlist of the<br />
              best hotels in each city</h3>
          </div>
          <div class="col-md-12 visible"> <a href="http://thelist101.com" target="_blank" class="btn btn-lg btn-default light-blue-btn">Visit THE LIST</a> </div>
        </div>
        <!-- Tab  2 -->
        <div id="flocations" class="row text-center" style="display:none">
          <div class="col-md-12 visible">
            <h3>Our affiliated partner:<br /> one of the leading travel search engines in Southeast AsiaWe became a shareholder of Singapore based</h3>
          </div>
          <div class="col-md-3 col-md-offset-3 col-sm-6 text-right visible center-on-mobile"> <a href="http://www.flocations.com/" target="_blank" class="btn btn-lg btn-default turquoise-btn">Visit Flocations</a> </div>
          <div class="col-md-3 col-sm-6 text-left visible center-on-mobile"> <a href="https://itunes.apple.com/app/flocations/id687689798?mt=8" target="_blank" class="btn btn-lg btn-default light-blue-btn">App Store</a> </div>
        </div>
        <!-- Tab  3 -->
        <div id="telunjuk" class="row text-center" style="display:none">
          <div class="col-md-12 visible">
            <h3>Our affiliated partner:<br /> one of the leading e-commerce search engines in Indonesia</h3>
          </div>
          <div class="col-md-3 col-md-offset-3 col-sm-6 text-right center-on-mobile visible"> <a href="https://www.telunjuk.com/" target="_blank" class="btn btn-lg btn-default turquoise-btn">Visit Telunjuk</a> </div>
          <div class="col-md-3 col-sm-6 text-left center-on-mobile visible"> <a href="https://play.google.com/store/apps/details?id=com.telunjuk" target="_blank" class="btn btn-lg btn-default light-blue-btn">Google Play</a> </div>
        </div>
      </div>
      <!-- Map 2 / World -->
      <div id="map-show"></div>
      <div class="row relative map map-service" data-bottom-top="background-position:0% 0%" data-center="background-position:50% 0%" data-top-bottom="background-position:100% 0%">
        <div class="maps-wrapper" data-bottom-top="opacity:1" data-bottom="opacity:0.2;">
          <div id="the-list-map"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/collaboration-map-no-japan.png" /></div>
          <div id="other-map" style="display:none"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/collaboration-map-flocations-no-japan.png" /></div>
        </div>
        <div class="blue-ribbon">
          <h3>Collaborations</h3>
        </div>
        <div class="japan-map"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/collaboration-map-no-africa.png"></div>
        <div class="asia-map"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/collaboration-map-asia.png"></div>
      </div>
      
      <!-- Statistics -->
      <div id="statistics" class="row statistics text-center">
        <div class="col-md-12">
          <h1 class="yellow">100 Million Monthly Visitors</h1>
          <h3 class="white">Our combined user base has reached nearly 100 million sessions per month.</h3>
        </div>
        <div class="col-md-12 graph-wrapper" data-bottom-top="opacity:0;" data-center="opacity:1">
          <div class="graph col-centered">
          <img class="graph_mobile img-responsive" src="<?php bloginfo('template_url'); ?>/img/graph_mobile.png" />
            <div class="graph-years">
				<span class="first-year">2010
					<span class="year-point"></span>
             		 <hr data-bottom-top="height:0px;" data-center="height:360px;" width="0">
             	 </span>
				 <span class="second-year">2011<span class="year-point"></span>
              <hr data-bottom-top="height:0px;" data-center="height:320px;" width="0">
              </span> <span class="third-year">2012<span class="year-point"></span>
              <hr data-bottom-top="height:0px;" data-center="height:263px;" width="0">
              </span> <span class="fourth-year">2013<span class="year-point"></span>
              <hr data-bottom-top="height:0px;" data-center="height:187px;" width="0">
              </span> <span class="fifth-year">2014<span class="year-point"></span>
              <hr data-bottom-top="height:0px;" data-center="height:122px;" width="0">
              </span> </div>
            <script> 
			document.write("<canvas height=\""+defCanvasHeight+"\" id=\"canvas_StackedBar2\"  width=\""+defCanvasWidth+"\"></canvas>");
window.onload = function() {
		//var myStackedBar = new Chart(document.getElementById("canvas_StackedBar2").getContext("2d")).StackedBar(mydata1,opt2);
			
skrollr.init({ forceHeight: false })
;}
			</script> 
            </div>
          </div>
        <div class="col-sm-7 stats-logo col-centered text-center">
          <div class="col-sm-4"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/travel-jp-logo-transparent.png" /></div>
          <div class="col-sm-4"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/tabiness-jp-logo-transparent.png" /></div>
          <div class="col-sm-4"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/hotel-jp-logo-transparent.png" /></div>
        </div>
      </div>
      <!-- Publicity -->
      <div id="publicity" class="row text-center">
        <div class="col-md-10 col-md-offset-1">
          <h2>
          Publicity
          </h1>
          <h3>We’ve had the honor of being sponsored in the<br />
            following reputable publications.</h3>
          <div class="row">
            <div class="col-md-4"><img src="<?php bloginfo('template_url'); ?>/img/wall-street-journal-logo.png" /></div>
            <div class="col-md-5"><img src="<?php bloginfo('template_url'); ?>/img/travel-journal-logo.png" /></div>
            <div class="col-md-3"><img src="<?php bloginfo('template_url'); ?>/img/online-logo.png" /></div>
            <div class="col-md-2"><img src="<?php bloginfo('template_url'); ?>/img/wit-logo.png" /></div>
            <div class="col-md-2"><img src="<?php bloginfo('template_url'); ?>/img/nikkei-logo.png" /></div>
            <div class="col-md-2"><img src="<?php bloginfo('template_url'); ?>/img/tv-tokyo-logo.png" /></div>
            <div class="col-md-2"><img src="<?php bloginfo('template_url'); ?>/img/wbs-logo.png" /></div>
            <div class="col-md-2"><img src="<?php bloginfo('template_url'); ?>/img/travel-voice-logo.png" /></div>
            <div class="col-md-2"><img src="<?php bloginfo('template_url'); ?>/img/tnooz-logo.png" /></div>
          </div>
        </div>
      </div>
      <!-- CTA -->
      <div class="row cta text-center scroll-link">
        <div class="col-md-12">
          <h1 class="yellow">Interested in being a Partner</h1>
          <h3 class="white">If you’re interested in advertising your travel content through our online<br />
            network or discussing a business alliance, contact us!</h3>
          <a href="#contact" class="btn btn-default yellow-btn">Partner Up with Venture Republic</a> </div>
      </div>
      <!-- Transition -->
      <div id="plane" class="row relative text-center">
        <div class="plane" data-bottom-top="background-position:0% 0%" data-top-bottom="background-position:100% 0%"></div>
        <div class="absolute-center-parent">
          <h1 class="absolute-center"><i>Revolutionizing how people are inspired,<br />find, book, and share on travel.</i></h1>
        </div>
      </div>
      <!-- CEO -->
      <div id="ceo" class="row transition relative text-center"> <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/ceo.jpg" />
        <div class="col-md-6 col-sm-6 ceo-mission text-left">
          <h1>KEI SHIBATA <span class="ceo-font">CEO</span></h1>
          <h2>Our mission</h2>
          <p>Where to go? How to go? What price to pay? What to do? Those are among many questions that travelers always have. We were born to answer them all.</p>
        </div>
      </div>
      
      <!-- our History -->
      <div id="history" class="row">
        <h2 class="text-center"> Our History </h2>
        <div class="col-md-12">
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <div class="carousel-bar"></div>
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"><span>2001</span></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"><span>2001</span></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"><span>2008</span></li>
              <li data-target="#carousel-example-generic" data-slide-to="3"><span>2009</span></li>
              <li data-target="#carousel-example-generic" data-slide-to="4"><span>2012</span></li>
              <li data-target="#carousel-example-generic" data-slide-to="5"><span>2012</span></li>
              <li data-target="#carousel-example-generic" data-slide-to="6"><span>2014</span></li>
            </ol>
            
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <div class="col-md-3 col-md-offset-1">
                  <h2>January 2001 </h2>
                  <p>Founded the company empowering consumers
                    to make informed buying decisions online.</p>
                </div>
                <div class="col-md-8"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/construction.jpg" /></div>
              </div>
              <div class="item">
                <div class="col-md-3 col-md-offset-1">
                  <h2>June 2001 </h2>
                  <p>Launched Travel.jp
                    (formerly Travel.co.jp)
                    as a website to compare hundreds of travel
                    sites at once.</p>
                  <br />
                  <img src="<?php bloginfo('template_url'); ?>/img/travel-jp-logo.png" /> </div>
                <div class="col-md-8"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/construction-2.jpg" /></div>
              </div>
              <div class="item">
                <div class="col-md-3 col-md-offset-1">
                  <h2>August 2008</h2>
                  <p>Applied to List on Tokyo Stock Exchange "JASDAQ" (formerly Osaka Stock Exchange "Hercules")</p>
                </div>
                <div class="col-md-8"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/construction-3.jpg" /></div>
              </div>
              <div class="item">
                <div class="col-md-3 col-md-offset-1">
                  <h2> March 2009 </h2>
                  <p>Launched Hotel.jp, search engine/review website for hotels and ryokans in Japan.</p>
                </div>
                <div class="col-md-8"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/construction-4.jpg" /></div>
              </div>
              <div class="item">
                <div class="col-md-3 col-md-offset-1">
                  <h2> August 2012 </h2>
                  <p>Company Privatized</p>
                </div>
                <div class="col-md-8"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/construction-5.jpg" /></div>
              </div>
              <div class="item">
                <div class="col-md-3 col-md-offset-1">
                  <h2> September 2012 </h2>
                  <p>Launched Travel.jp Tabiness, cureated online travel guide in Japan.</p>
                </div>
                <div class="col-md-8"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/construction-6.jpg" /></div>
              </div>
              <div class="item">
                <div class="col-md-3 col-md-offset-1">
                  <h2> March 2014 </h2>
                  <p>Launched Travel.jp Tabiness (in English) for travelers visiting Japan.</p>
                </div>
                <div class="col-md-8"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/history_2014.jpg" /></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Business Alliances -->
      <div id="business-alliances" class="row text-center">
        <div class="col-md-8 col-md-offset-2">
          <h2>
          Business Alliances
          </h1>
          <p>Our business partners continue to create value through working with us.</p>
        </div>
      </div>
      
      <!-- Carousel 2 -->
      <div id="carousel-alliances" class="carousel slide row" data-ride="carousel"> 
        <!-- Indicators -->
        <?php if(get_field('business_alliances')): ?>
        
        <ol class="carousel-indicators">
        <?php while(has_sub_field('business_alliances')): ?>
        <?php if(get_sub_field('carousel_indicators')): ?>
        <?php while(has_sub_field('carousel_indicators')): ?>
          <li data-target="#carousel-alliances" data-slide-to="<?php the_sub_field('slide_number'); ?>"></li>
          <?php endwhile; ?>
        <?php endif; ?>
        <?php endwhile; ?>
        </ol>
        
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
        
        <?php while(has_sub_field('business_alliances')): ?>
          <div class="item">
            <div class="col-md-6 col-md-offset-3 text-center"> <img src="<?php the_sub_field('logo'); ?>">
              <p><i><?php the_sub_field('text'); ?></i></p>
            </div>
          </div>
          <?php endwhile; ?>
        </div>
        
        <?php endif; ?>
      </div>
      
      <!-- CTA 2 -->
      <div class="row cta2 text-center scroll-link">
        <div class="col-md-10 col-md-offset-1">
          <h1 class="blue">JOIN OUR FORCE</h1>
          <h3 class="white">We are eager to meet you who can potentially collaborate and partner with us. Contact us to explore the options.</h3>
          <a href="#contact" class="btn btn-default blue-btn">Partner Up with Venture Republic</a> </div>
      </div>
      
      <!-- Contact -->
      <div id="contact" class="row">
        <div class="col-md-12">
          <h2>Contact Us</h2>
          <?php echo do_shortcode( '[contact-form-7 id="15" title="Contact Form Eng"]' ); ?>
        </div>
      </div>
    </div>
    
    <!-- Social Networks -->
    <div id="social" class="row">
      <div class="col-sm-6 text-right center-on-mobile">
        <h2 class="blue">
        JOIN OUR SOCIAL NETWORK
        </h1>
      </div>
      <div class="col-sm-6 text-left center-on-mobile"> <a href="https://www.facebook.com/VentureRepublic" class="fb-icon" target="_blank"></a> <a href="https://twitter.com/VentureRepublic" class="twitter-icon" target="_blank"></a> <a href="http://instagram.com/vkanri" class="insta-icon" target="_blank"></a> </div>
    </div>
    
    <!-- Map -->
    <div id="map" class="row"> <a target="_blank" href="https://www.google.co.jp/maps/place/〒106-0031+Tōkyō-to,+Minato-ku,+Nishiazabu,+4+Chome−3−11+西麻布幸田ビル泉西麻布ビル/@35.6578435,139.7233975,17z/data=!3m1!4b1!4m2!3m1!1s0x60188b704f2e5d9d:0x6fb185ca69b6db99">
      <div class="overlay" onClick="style.pointerEvents='none'"></div>
      <iframe width="100%" height="300px" src="http://api.tiles.mapbox.com/v4/vr.kca37a5p.html?access_token=pk.eyJ1IjoidnIiLCJhIjoiSElUV2J0ayJ9.FgAQ_S6-ic0k72d7heqhNg#17/35.65580/139.72338"></iframe>
      </a> </div>
  </div>
</div>
<footer class="relative">
  <div class="footer-social-networks"><a href="https://www.facebook.com/VentureRepublic" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/black-fb.jpg" /></a><a href="https://twitter.com/VentureRepublic" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/black-twitter.jpg" /></a><a href="http://instagram.com/vkanri" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/black-insta.jpg" /></a></div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <ul>
          <li><img class="logo-footer" src="<?php bloginfo('template_url'); ?>/img/black-logo.jpg" /></li>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
          <li><a href="media">Media</a></li>
          <li><a href="recruit">Recruit</a></li>
          <li><a href="about">About</a></li>
          <li class="menu-blue"><a href="privacy">Privacy</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/skrollr.min.js"></script> 
<script>
$('.selectpicker').selectpicker({
      style: 'btn-info',
	  size: 4,
  });
</script>

<?php get_footer(); ?>

<?php else: ?>

<?php get_template_part( 'homepage_jp' ); ?>

<?php endif ?>