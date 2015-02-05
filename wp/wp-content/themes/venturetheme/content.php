<nav class="navbar navbar-default" role="navigation">
  <div class="navbar-header text-center menu-hover"> <a class="navbar-brand" href="javascript:void(0)"></a> </div>
  <div class="navbar-collapse">
    <ul class="nav navbar-nav text-center">
      <li id="home-icon" class="active menu-hover"><a href="javascript:void(0)"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/home-icon.jpg" /></a></li>
      <li id="media-icon" class="menu-hover"><a href="javascript:void(0)"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/media-icon.jpg" /></a></li>
      <li id="recruit-icon" class="menu-hover"><a href="javascript:void(0)"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/recruit-icon.jpg" /></a></li>
      <li id="about-icon" class="menu-hover"><a href="javascript:void(0)"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/about-icon.jpg" /></a></li>
      <li>
        <?php qtrans_generateLanguageSelectCode(); ?>
      </li>
    </ul>
  </div>
  <div class="popout-menu" style="display:none;"  >
    <ul>
      <a class="grey-logo" href="#top-image">
      <li><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/logo-venture-grey.jpg" /></li>
      </a>
      <div class="popout-menu-wrapper is_about_page"> <a class="popout-menu-title" href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <li>Home</li>
          </a>
          <ul class="sub-menu home-menu" style="display:none">
             <a href="<?php echo esc_url( home_url( '/' ) ); ?>#services">
            <li><span class="menu-icon cog"></span>Services</li>
            </a> <a href="<?php echo esc_url( home_url( '/' ) ); ?>#statistics">
            <li><span class="menu-icon pie-chart"></span>Growth Statistics</li>
            </a> <a href="<?php echo esc_url( home_url( '/' ) ); ?>#publicity">
            <li><span class="menu-icon eye"></span>Publicity</li>
            </a> <a href="<?php echo esc_url( home_url( '/' ) ); ?>#ceo">
            <li><span class="menu-icon speach_bubble"></span>Our Mission & CEO</li>
            </a> <a href="<?php echo esc_url( home_url( '/' ) ); ?>#history">
            <li><span class="menu-icon ribbon"></span>Our History</li>
            </a> <a href="<?php echo esc_url( home_url( '/' ) ); ?>#business-alliances">
            <li><span class="glyphicon glyphicon-globe"></span>Business Alliances</li>
            </a> <a href="<?php echo esc_url( home_url( '/' ) ); ?>#contact">
            <li><span class="menu-icon align"></span>Contact VR</li>
            </a>
          </ul>
      </div>
      <div class="popout-menu-wrapper"> <a class="popout-menu-title" href="<?php echo esc_url( home_url( '/' ) ); ?>media">
        <li>Media</li>
        </a>
        <ul class="sub-menu media-menu" style="display:none">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>media#news">
          <li><span class="menu-icon icon-text-left"></span>Recent News</li>
          </a> <a href="<?php echo esc_url( home_url( '/' ) ); ?>media#video">
          <li><span class="menu-icon play"></span>Commercial/Video Stream</li>
          </a> <a href="<?php echo esc_url( home_url( '/' ) ); ?>media#press">
          <li><span class="menu-icon pad"></span>Press Releases</li>
          </a> <a href="<?php echo esc_url( home_url( '/' ) ); ?>media#contact">
          <li><span class="menu-icon align"></span>Contact VR</li>
          </a>
        </ul>
      </div>
      <div class="popout-menu-wrapper"> <a class="popout-menu-title" href="<?php echo esc_url( home_url( '/' ) ); ?>recruit">
        <li>Recruit</li>
        </a>
        <ul class="sub-menu recruit-menu" style="display:none">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>recruit#values">
          <li><span class="menu-icon star"></span>Our Values</li>
          </a> <a href="<?php echo esc_url( home_url( '/' ) ); ?>recruit#team">
          <li><span class="menu-icon users"></span>Meet the Team</li>
          </a> <a href="<?php echo esc_url( home_url( '/' ) ); ?>recruit#work_at_vr">
          <li><span class="menu-icon user"></span>Work at VR</li>
          </a>
        </ul>
      </div>
      <div class="popout-menu-wrapper"> <a class="popout-menu-title" href="<?php echo esc_url( home_url( '/' ) ); ?>about">
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
  
   <?php if ( have_posts() ) : ?>
  
  <?php while ( have_posts() ) : the_post(); ?>  
  <!-- Top image -->
  
  <?php if ( has_post_thumbnail() ) {  ?>
  <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') ); ?>
  <div class="row relative">
      <div class="post_background_image"></div>
      <img class="img-responsive" src="<?php echo $url ?>" />
   <?php } else { ?>
  <div class="row relative about-top panel" id="top-image">
  <?php } ?>
  
      
        <div class="logo-top"><img src="<?php bloginfo('template_url'); ?>/img/logo-white.png" /></div>
        <div class="absolute-center-parent">
          <div class="absolute-center col-md-8 col-centered">
            <h1><?php the_title(); ?></h1>
          </div>
        </div>
      </div>
      
  <!-- Grey Stripe 2 -->
      <div class="row date-post">
        <div class="col-md-10 col-md-offset-1">
          <h4><?php the_date(); ?></h4>
        </div>
      </div>
  
 
    <div class="row post-content">
    
      <div class="col-md-10 col-md-offset-1">
        <p><?php the_content(); ?></p>
      </div>
      
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
    
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
