<?php
/*
Template Name: Recruit
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
        <div class="popout-menu-wrapper is_about_page"> <a class="popout-menu-title" href="<?php echo site_url(); ?>">
          <li>Home</li>
          </a>
          <ul class="sub-menu home-menu" style="display:none">
             <a href="<?php echo site_url(); ?>#services">
            <li><span class="menu-icon cog"></span>Services</li>
            </a> <a href="<?php echo site_url(); ?>#statistics">
            <li><span class="menu-icon pie-chart"></span>Growth Statistics</li>
            </a> <a href="<?php echo site_url(); ?>#publicity">
            <li><span class="menu-icon eye"></span>Publicity</li>
            </a> <a href="<?php echo site_url(); ?>#ceo">
            <li><span class="menu-icon speach_bubble"></span>Our Mission & CEO</li>
            </a> <a href="<?php echo site_url(); ?>#history">
            <li><span class="menu-icon ribbon"></span>Our History</li>
            </a> <a href="<?php echo site_url(); ?>#business-alliances">
            <li><span class="glyphicon glyphicon-globe"></span>Business Alliances</li>
            </a> <a href="<?php echo site_url(); ?>#contact">
            <li><span class="menu-icon align"></span>Contact VR</li>
            </a>
          </ul>
        </div>
        <div class="popout-menu-wrapper"> <a class="popout-menu-title" href="media">
          <li>Media</li>
          </a>
          <ul class="sub-menu media-menu" style="display:none">
            <a href="#video">
            <li><span class="menu-icon icon-text-left"></span>Recent News</li>
            </a> <a href="media#news">
            <li><span class="menu-icon play"></span>Commercial/Video Stream</li>
            </a> <a href="media#press">
            <li><span class="menu-icon pad"></span>Press Releases</li>
            </a> <a href="media#contact">
            <li><span class="menu-icon align"></span>Contact VR</li>
            </a>
          </ul>
        </div>
        <div class="popout-menu-wrapper is_page_menu"> <a class="popout-menu-title" href="recruit">
          <li>Recruit</li>
          </a>
          <ul class="sub-menu recruit-menu" style="display:none">
            <a href="#values">
            <li><span class="menu-icon star"></span>Our Values</li>
            </a> <a href="#team">
            <li><span class="menu-icon users"></span>Meet the Team</li>
            </a> <a href="#work_at_vr">
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
      <div class="row relative recruit-top panel" id="top-image">
        <div class="logo-top"><img src="<?php bloginfo('template_url'); ?>/img/logo-white.png" /></div>
        <div class="absolute-center-parent">
          <div class="absolute-center col-md-8 col-centered">
            <h1>Join Venture Republic</h1>
            <h3>Where to go? How to go? What price to pay? What to do? Those are among many questions that travelers always have. We were born to answer them all.</h3>
          </div>
        </div>
      </div>
      
      <!-- Panel 2 -->
      <div class="row relative panel" id="values">
        <div class="absolute-center-parent">
          <div class="absolute-center col-md-8 col-centered">
            <h1>A “Venture” Spirit</h1>
            <h3>Our staff are unique in that everyone has not just their own areas of expertise, but a true venture spirit or business mindset. Through this, we’re able to develop highly professional services and great quality content for our customers. That’s our strongest asset and the way we’re able to realize our Mission.</h3>
          </div>
        </div>
      </div>
      <!-- Panel 3 -->
      <div class="row relative panel" id="panel_recruit_3">
        <div class="absolute-center-parent">
          <div class="absolute-center col-md-8 col-centered">
            <h1>Team Player</h1>
            <h3>Having included the word “Republic” in our company name, it’s easy to see that we really value “team” play. Staff are encouraged to speak out. Flexibility, thinking from the ground up, and not getting caught or locked into past success, for the sake of innovation and growth, are a few things we value in VR staff.</h3>
          </div>
        </div>
      </div>
      <!-- Panel 4 -->
      <div class="row relative panel" id="panel_recruit_4">
        <div class="absolute-center-parent">
          <div class="absolute-center col-md-8 col-centered">
            <h1>Expertise</h1>
            <h3>What makes VR’s services and products great is that the staff developing it are experts. Have you got a passion or something you love that will help us bring real value to global travel, we’d love to hear from you.</h3>
          </div>
        </div>
      </div>
      
      <!-- Stripe 1-->
      <div class="stripe row text-center" id="team">
        <div class="col-md-8 col-md-offset-2">
          <h2> System Development Team </h2>
        </div>
      </div>
      
      <!-- Panel 5 -->
      <div class="row relative team-wrapper" id="panel_recruit_5">
          <div class="col-md-8 col-md-offset-2">
            <div class="row text-left">
              <div class="col-sm-6 team_member"> <img src="<?php bloginfo('template_url'); ?>/img/benxi.png">
                <p>Benxi<br>
                  <i>System Engineer</i></p>
              </div>
              <div class="col-sm-6 team_member"> <img src="<?php bloginfo('template_url'); ?>/img/xiaowei.png">
                <p>Xiaowei<br>
                  <i>System Engineer</i></p>
              </div>
              <div class="col-md-12 text-center">
                <h3>Xiaowei and Benxi are a couple of young engineers from China. Not only are they doing incredible things in engineering, they’re also friends who share a love of cooking and dance!</h3>
              </div>
            </div>
            <div class="col-md-12 text-center"><a class="btn btn-default blue-btn">Contact Our Department</a></div>
          </div>
      </div>
      
      <!-- Stripe 2 -->
      <div class="stripe row text-center">
        <div class="col-md-8 col-md-offset-2">
          <h2> Design & Content Team </h2>
        </div>
      </div>
      
      <!-- Panel 6 -->
      <div class="row relative team-wrapper" id="panel_recruit_6">
          <div class="col-md-8 col-md-offset-2">
            <div class="row text-left">
              <div class="col-sm-6 team_member col-md-offset-3"> <img src="<?php bloginfo('template_url'); ?>/img/rizumi.png">
                <p>Rizumi<br>
                  <i>Web Developer</i></p>
              </div>
              <div class="col-md-12 text-center">
                <h3>Rizumi’s not just a breathe of fresh air around the office, she’s also an incredibly talented designer. On the weekends you can find her outdoors; she’s what the Japanese call a “Mountain Girl”.</h3>
              </div>
            </div>
            <div class="col-md-12 text-center"><a class="btn btn-default blue-btn">Contact Our Department</a></div>
          </div>
      </div>
      
      <!-- Stripe3 -->
      <div class="stripe row text-center">
        <div class="col-md-8 col-md-offset-2">
          <h2> Sales Team </h2>
        </div>
      </div>
      
      <!-- Panel 7 -->
      <div class="row relative team-wrapper" id="panel_recruit_7">
        <div class="col-md-8 col-md-offset-2">
            <div class="row text-left">
              <div class="col-sm-6 team_member col-md-offset-3"> <img src="<?php bloginfo('template_url'); ?>/img/akemi.png">
                <p>Akemi<br>
                  <i>Sales Representative</i></p>
              </div>
              <div class="col-md-12 text-center">
                <h3>Introducing Akemi, our energetic and enthusiastic sales rep. When she’s not in and out of the country promoting international sales, she’s a passionate florist!</h3>
              </div>
            </div>
            <div class="col-md-12 text-center"><a class="btn btn-default blue-btn">Contact Our Department</a></div>
          </div>
      </div>
      
      <!-- Stripe 4 -->
      <div class="stripe row text-center">
        <div class="col-md-8 col-md-offset-2">
          <h2> Product Data Management Team </h2>
        </div>
      </div>
      
      <!-- Panel 8 -->
      <div class="row relative team-wrapper" id="panel_recruit_8">
        <div class="col-md-8 col-md-offset-2">
            <div class="row text-left">
            
              <div class="col-sm-6 team_member col-md-offset-3"> <img src="<?php bloginfo('template_url'); ?>/img/kyoko.png">
                <p>Kyoko<br>
                  <i>Product Data Scientist</i></p>
              </div>
              
              
              <div class="col-md-12 text-center">
                <h3>Kyoko’s our France and french culture-loving data superhero—always improving the site with a focus on fixing any issues that come up and making everything perfect. Merci, Kyoko-san!</h3>
              </div>
            </div>
            <div class="col-md-12 text-center"><a class="btn btn-default blue-btn">Contact Our Department</a></div>
          </div>
      </div>
      
      <!-- Stripe 5 -->
      <div class="stripe row text-center">
        <div class="col-md-8 col-md-offset-2">
          <h2> Marketing Team </h2>
        </div>
      </div>
      
      <!-- Panel 9 -->
      <div class="row relative team-wrapper" id="panel_recruit_9">
        <div class="col-md-8 col-md-offset-2">
            <div class="row text-left">
              <div class="col-sm-6 team_member col-md-offset-3"> <img src="<?php bloginfo('template_url'); ?>/img/ryo.png">
                <p>Ryo<br>
                  <i>Marketing Analyst</i></p>
              </div>
              <div class="col-md-12 text-center">
                <h3>Ryo does various marketing tasks from international projects, to analysis. In the evenings, he can be found enjoying movies as he’s an avid cinema fan.</h3>
              </div>
            </div>
            <div class="col-md-12 text-center"><a class="btn btn-default blue-btn">Contact Our Department</a></div>
          </div>
      </div>
      
      <!-- Stripe 6 -->
      <div class="stripe row text-center">
        <div class="col-md-8 col-md-offset-2">
          <h2> Administrative Division </h2>
        </div>
      </div>
      
      <!-- Panel 10 -->
      <div class="row relative team-wrapper" id="panel_recruit_10">
        <div class="col-md-8 col-md-offset-2">
            <div class="row text-left">
              <div class="col-sm-6 team_member col-md-offset-3"> <img src="<?php bloginfo('template_url'); ?>/img/kenji.png">
                <p>Kenji<br>
                  <i>Accountant</i></p>
              </div>
              <div class="col-md-12 text-center">
                <h3>The keeper of VR’s metaphorical “wallet”, Kenji is our ever-reliable accountant. Owning many certifications and licenses, he’s super diligent!</h3>
              </div>
            </div>
            <div class="col-md-12 text-center"><a class="btn btn-default blue-btn">Contact Our Department</a></div>
          </div>
      </div>
      <!-- Instagram Banner -->
      <div class="row relative"> <a href="#"><img src="<?php bloginfo('template_url'); ?>/img/follow_us_banner.jpg" class="img-responsive"></a> </div>
      
      <!--TEST-->
      <div class="mCustomScrollbar row" data-mcs-theme="dark">
      <div class="col-md-12">
      <div class="insta-feed">
      <ul class="instagram-lite"></ul>
      </div>
      </div>
      </div>
      
      <!-- Social Networks -->
    <div id="social" class="row">
      <div class="col-sm-6 text-right center-on-mobile">
        <h2 class="blue">
        Join our social network
        </h1>
      </div>
      <div class="col-sm-6 text-left center-on-mobile"> <a href="#" class="fb-icon" target="_blank"></a> <a href="#" class="twitter-icon" target="_blank"></a> <a href="#" class="insta-icon" target="_blank"></a> </div>
    </div>
      <!-- Panel 11 -->
      <div class="row relative panel" id="work_at_vr">
        <div class="absolute-center-parent">
          <div class="absolute-center col-md-8 col-centered">
            <h1>View Opportunities</h1>
          </div>
        </div>
      </div>
      
      <!-- Apply -->
      <div id="application" class="row text-center">
        <div class="col-sm-6">
          <p>Join our team and build a career in our growing global travel businesses.</p>
          <a class="btn btn-lg btn-default light-blue-btn">Apply to VR</a> </div>
        <div class="col-sm-6">
          <p> Work from home and bring your expertise to VR through curated content
            and travel writing.</p>
          <a class="btn btn-lg btn-default apply-btn">Apply to VR</a> </div>
      </div>
      
     <!-- Social Networks -->
    <div id="social" class="row">
      <div class="col-sm-6 text-right center-on-mobile">
        <h2 class="blue">
        Join our social network
        </h1>
      </div>
      <div class="col-sm-6 text-left center-on-mobile"> <a href="#" class="fb-icon" target="_blank"></a> <a href="#" class="twitter-icon" target="_blank"></a> <a href="#" class="insta-icon" target="_blank"></a> </div>
    </div>
      
      <!-- Map -->
    <div id="map" class="row"> <a target="_blank" href="https://www.google.co.jp/maps/place/〒106-0031+Tōkyō-to,+Minato-ku,+Nishiazabu,+4+Chome−3−11+西麻布幸田ビル泉西麻布ビル/@35.6578435,139.7233975,17z/data=!3m1!4b1!4m2!3m1!1s0x60188b704f2e5d9d:0x6fb185ca69b6db99">
      <div class="overlay" onClick="style.pointerEvents='none'"></div>
      <iframe width="100%" height="300px" src="http://api.tiles.mapbox.com/v4/vr.kca37a5p.html?access_token=pk.eyJ1IjoidnIiLCJhIjoiSElUV2J0ayJ9.FgAQ_S6-ic0k72d7heqhNg#17/35.65580/139.72338"></iframe>
      </a> </div>
  </div>
</div>
  <footer class="relative">
    <div class="footer-social-networks"><a href="#" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/black-fb.jpg" /></a><a href="#" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/black-twitter.jpg" /></a><a href="#" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/black-insta.jpg" /></a></div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <ul>
            <li><img class="logo-footer" src="<?php bloginfo('template_url'); ?>/img/black-logo.jpg" /></li>
            <li><a href="index.html">Home</a></li>
            <li><a href="media.html">Media</a></li>
            <li><a href="recruit.html">Recruit</a></li>
            <li><a href="about.html">About</a></li>
            <li class="menu-blue"><a href="#">Privacy</a></li>
            <li class="menu-blue"><a href="#">Terms</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/skrollr.min.js"></script> 
  <script>
  $('.instagram-lite').instagramLite({
    clientID: '00407888b30e402f97379f39f0d30896',
    username: 'vkanri',
	limit: 10,
	urls:true
});

$(window).load(function(){
  $(".insta-feed").mCustomScrollbar({axis:"x", theme:"rounded-dark"});
});

</script> 

<?php get_footer(); ?>

<?php else: ?>

<?php get_template_part( 'recruit_jp' ); ?>

<?php endif ?>