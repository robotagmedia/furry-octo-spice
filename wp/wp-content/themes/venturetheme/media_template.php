<?php
/*
Template Name: Media Template
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
      <div class="popout-menu-wrapper is_about_page"> <a class="popout-menu-title" href="index">
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
      <div class="popout-menu-wrapper is_page_menu"> <a class="popout-menu-title" href="media">
        <li>Media</li>
        </a>
        <ul class="sub-menu media-menu" style="display:none">
          <a href="#video">
          <li><span class="menu-icon icon-text-left"></span>Recent News</li>
          </a> <a href="#news">
          <li><span class="menu-icon play"></span>Commercial/Video Stream</li>
          </a> <a href="#press">
          <li><span class="menu-icon pad"></span>Press Releases</li>
          </a> <a href="#contact">
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
      <div class="row relative media-top panel" id="top-image">
        <div class="logo-top"><img src="<?php bloginfo('template_url'); ?>/img/logo-white.png" /></div>
        <div class="absolute-center-parent">
          <div class="absolute-center col-md-8 col-centered">
            <h1>What's New at Venture Republic</h1>
          </div>
        </div>
      </div>
      

          
      <!-- Lists -->
      <div class="row text-center" id="news">
        <div class="col-md-12">
          <h2>Venture Republic News</h2>
        </div>
        <div class="col-md-12">
              <?php query_posts('cat=2');  if(have_posts()):   ?>
			<?php while(have_posts()): the_post(); ?>
          <div class="col-md-4 news-bloc"><a href="<?php the_permalink(); ?>">
            <?php
  if ( has_post_thumbnail() ) {
	the_post_thumbnail( array('class' => ' img-responsive') );
} ?>
            <p><span class="date">
              <?php the_date(); ?>
              </span> <?php echo get_excerpt(); ?> </p>
            <span class="read-more" href="<?php the_permalink(); ?>">Read More</span></a> </div>
          <?php endwhile; ?>
          <?php endif; wp_reset_query(); ?>
        </div>
        <div class="col-md-12 text-center more-news"> <a class="load-news" href="#"><img src="<?php bloginfo('template_url'); ?>/img/more-news.png"> Load more news
          </h3>
          </a> </div>
      </div>
      
      <!-- Panel 2 -->
      <div class="row relative" id="video">
        <div id="video_1"> <a href="#video">
          <div class="video-desc">
            <div class="video-desc-content"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/play-blue.png">
              <p><?php the_field('video_1_description'); ?></p>
            </div>
          </div>
          <iframe src="<?php the_field('video_1_link'); ?>?api=1" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
        <div id="video_2"> <a href="#video">
          <div class="video-desc">
            <div class="video-desc-content"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/play-blue.png">
              <p><?php the_field('video_2_description'); ?></p>
            </div>
          </div>
          </a>
          <iframe src="<?php the_field('video_2_link'); ?>?api=1" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
        <div id="video_3"> <a href="#video">
          <div class="video-desc">
            <div class="video-desc-content"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/play-blue.png">
              <p><?php the_field('video_3_description'); ?></p>
            </div>
          </div>
          </a>
          <iframe src="<?php the_field('video_3_link'); ?>?api=1" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
        <div id="video_4"> <a href="#video">
          <div class="video-desc">
            <div class="video-desc-content"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/play-blue.png">
              <p><?php the_field('video_4_description'); ?></p>
            </div>
          </div>
          </a>
          <iframe src="<?php the_field('video_4_link'); ?>?api=1" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
        <div id="video_5"> <a href="#video">
          <div class="video-desc">
            <div class="video-desc-content"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/play-blue.png">
              <p><?php the_field('video_5_description'); ?></p>
            </div>
          </div>
          </a>
          <iframe src="<?php the_field('video_5_link'); ?>?api=1" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
      </div>
      
      <!-- Grey Stripe 1 -->
      <div class="row grey-stripe video-feed">
        <div class="col-md-12">
          <div class="col-sm-6"> <a href="#video" rel="video_1">
            <div class="video_thumb_hover"><img src="<?php bloginfo('template_url'); ?>/img/play-blue.png"><span class="thumbnail-title"><?php the_field('video_1_title'); ?></span> </div>
            <img height="295" class="img-responsive" src="<?php the_field('video_1_thumbnail'); ?>"> </a> </div>
          <div class="col-sm-3"> <a href="#video" rel="video_2">
            <div class="video_thumb_hover"><img src="<?php bloginfo('template_url'); ?>/img/play-blue.png"><span class="thumbnail-title"><?php the_field('video_2_title'); ?></span></div>
            <img class="img-responsive" src="<?php the_field('video_2_thumbnail'); ?>"></a> <a href="#video" rel="video_3">
            <div class="video_thumb_hover"><img src="<?php bloginfo('template_url'); ?>/img/play-blue.png"><span class="thumbnail-title"><?php the_field('video_3_title'); ?></span></div>
            <img class="img-responsive" src="<?php the_field('video_3_thumbnail'); ?>"></a> </div>
          <div class="col-sm-3"> <a href="#video" rel="video_4">
            <div class="video_thumb_hover"><img src="<?php bloginfo('template_url'); ?>/img/play-blue.png"><span class="thumbnail-title"><?php the_field('video_4_title'); ?></span></div>
            <img class="img-responsive" src="<?php the_field('video_4_thumbnail'); ?>"></a> <a href="#video" rel="video_5">
            <div class="video_thumb_hover"><img src="<?php bloginfo('template_url'); ?>/img/play-blue.png"><span class="thumbnail-title"><?php the_field('video_5_title'); ?></span></div>
            <img class="img-responsive" src="<?php the_field('video_5_thumbnail'); ?>"></a> </div>
        </div>
      </div>
      
      <!--Blue Stripe-->
      <div class="row text-center" id="press">
        <div class="col-md-12">
          <h2> Press Release </h2>
        </div>
      </div>

      <!--Timeline-->
      <div class="row panel relative" id="slide-press">
      <?php 
 $number = 0;
 $monthnum = date('n');
 query_posts("monthnum=$monthnum");
 if(have_posts()):  
?>
        <div id="carousel-press" class="carousel slide" data-ride="carousel"> 
          <!-- Indicators -->
          <ol class="carousel-indicators">
          <?php while(have_posts()): the_post(); ?>
            <li data-target="#carousel-press" data-slide-to="<?php echo $number++; ?>"></li>
            <?php endwhile; ?>
          </ol>
          
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox" id="november">
          <?php while(have_posts()): the_post(); ?>
            <div class="item">
              <div class="col-md-6 col-md-offset-6">
                <h2><?php the_title(); ?> </h2>
                <p><?php echo $post->post_excerpt; ?></p>
                <a class="btn btn-lg btn-default light-blue-btn" href="<?php the_permalink(); ?>">Read full article</a> </div>
            </div>
            
            <?php endwhile; ?>
          </div>
          
        </div>
        <?php endif; wp_reset_query(); ?>
      </div>
      
      <!-- Timeline -->
      
      <div id="timeline" class="row">
        <div class="col-md-12">
        
        <?php if ( !function_exists('vr_widgets_init') || !dynamic_sidebar(2) ) : endif; ?>
        
          <!-- <div class="table-responsive text-center">
            <table class="table">
              <tr>
                <td class="arrow"><a class="arrow-slide-left" href="#"></a></td>
                <td class="year">2014</td>
                <td><a href="#">Jan</a></td>
                <td><a href="#">Feb</a></td>
                <td><a href="#">Mar</a></td>
                <td><a href="#">Apr</a></td>
                <td><a href="#">May</a></td>
                <td><a href="#">Jun</a></td>
                <td><a href="#">Jul</a></td>
                <td><a href="#">Aug</a></td>
                <td><a href="#">Sep</a></td>
                <td><a href="#">Oct</a></td>
                <td class="active"><a href="#">Nov</a></td>
                <td><a href="#">Dec</a></td>
                <td class="arrow"><a class="arrow-slide-right" href="#"></a></td>
              </tr>
            </table>
          </div>
          -->
        </div>
      </div>
      
      <!-- Contact -->
      <div id="contact" class="row">
        <div class="col-md-12">
          <h2>Contact us</h2>
          <?php echo do_shortcode( '[contact-form-7 id="15" title="Contact Form Eng"]' ); ?> </div>
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
          <li><a href="<?php echo site_url(); ?>">Home</a></li>
          <li><a href="media">Media</a></li>
          <li><a href="recruit">Recruit</a></li>
          <li><a href="about">About</a></li>
          <li class="menu-blue"><a href="#">Privacy</a></li>
          <li class="menu-blue"><a href="#">Terms</a></li>
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
<?php get_template_part( 'media_jp' ); ?>
<?php endif ?>
