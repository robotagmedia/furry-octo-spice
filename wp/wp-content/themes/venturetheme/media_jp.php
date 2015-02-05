<?php
/*
Template Name: Media JP
*/
?>
<?php get_header(); ?>

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
    <div class="popout-menu jp-menu" style="display:none;"  >
      <ul>
        <a class="grey-logo" href="#top-image">
        <li><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/logo-venture-grey.jpg" /></li>
        </a>
        <div class="popout-menu-wrapper is_about_page"> <a class="popout-menu-title" href="home">
          <li><b>ホーム</b></li>
          </a>
          <ul class="sub-menu home-menu" style="display:none">
            <a href="home#services">
            <li><span class="menu-icon cog"></span>サービス紹介</li>
            </a> <a href="home#statistics">
            <li><span class="menu-icon pie-chart"></span>サイト訪問数推移</li>
            </a> <a href="home#publicity">
            <li><span class="menu-icon eye"></span>メディア掲載</li>
            </a> <a href="home#ceo">
            <li><span class="menu-icon speach_bubble"></span>代表挨拶</li>
            </a> <a href="home#history">
            <li><span class="menu-icon ribbon"></span>沿革</li>
            </a> <a href="home#business-alliances">
            <li><span class="glyphicon glyphicon-globe"></span>ビジネスパートナー</li>
            </a> <a href="home#contact">
            <li><span class="menu-icon align"></span>お問い合わせ</li>
            </a>
          </ul>
        </div>
        <div class="popout-menu-wrapper is_page_menu"> <a class="popout-menu-title" href="media">
          <li><b>ニュース/メディア関連</b></li>
          </a>
          <ul class="sub-menu media-menu" style="display:none">
            <a href="#news">
            <li><span class="menu-icon icon-text-left"></span>お知らせ</li>
            </a> <a href="#video">
            <li><span class="menu-icon play"></span>TVCM/動画ギャラリー</li>
            </a> <a href="#press">
            <li><span class="menu-icon pad"></span>プレスリリース</li>
            </a> <a href="#contact">
            <li><span class="menu-icon align"></span>お問い合わせ</li>
            </a>
          </ul>
        </div>
        <div class="popout-menu-wrapper"> <a class="popout-menu-title" href="recruit">
          <li><b>採用情報</b></li>
          </a>
          <ul class="sub-menu recruit-menu" style="display:none">
            <a href="recruit#values">
            <li><span class="menu-icon star"></span>メッセージ</li>
            </a> <a href="recruit#team">
            <li><span class="menu-icon users"></span>チーム紹介</li>
            </a> <a href="recruit#work_at_vr">
            <li><span class="menu-icon user"></span>求人一覧</li>
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
<div id="skrollr-body" class="jp">
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
        <div class="row" style="margin:0">
        <div class="col-md-12">
              <?php query_posts('cat=2');  if(have_posts()):   ?>
			<?php while(have_posts()): the_post(); ?>
          <div class="col-md-4 col-sm-6 news-bloc"><a href="<?php the_permalink(); ?>">
          <div class="news-img-overlay"></div>
          <div class="press-thumbnail">
            <?php
  if ( has_post_thumbnail() ) {
	the_post_thumbnail();
} ?></div>
            <p><span class="date">
              <?php the_date(); ?>
              </span><?php the_title(); ?> - <?php echo get_excerpt(); ?> </p>
            <span class="read-more meiryo">もっと詳しく</span></a> </div>
          <?php endwhile; ?>
          <?php endif; wp_reset_query(); ?>
        </div>
        </div>
        <div class="col-md-12 text-center more-news"> <a class="load-news meiryo" href="#"><img src="<?php bloginfo('template_url'); ?>/img/more-news.png"> 過去のニュース
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
            <div class="video_thumb_hover"><img src="<?php bloginfo('template_url'); ?>/img/play-blue.png"><span class="thumbnail-title meiryo"><?php the_field('video_1_title_jp'); ?></span> </div>
            <img height="295" class="img-responsive" src="<?php the_field('video_1_thumbnail'); ?>"> </a> </div>
          <div class="col-sm-3"> <a href="#video" rel="video_2">
            <div class="video_thumb_hover"><img src="<?php bloginfo('template_url'); ?>/img/play-blue.png"><span class="thumbnail-title meiryo"><?php the_field('video_2_title_jp'); ?></span></div>
            <img class="img-responsive" src="<?php the_field('video_2_thumbnail'); ?>"></a> <a href="#video" rel="video_3">
            <div class="video_thumb_hover"><img src="<?php bloginfo('template_url'); ?>/img/play-blue.png"><span class="thumbnail-title meiryo"><?php the_field('video_3_title_jp'); ?></span></div>
            <img class="img-responsive" src="<?php the_field('video_3_thumbnail'); ?>"></a> </div>
          <div class="col-sm-3"> <a href="#video" rel="video_4">
            <div class="video_thumb_hover"><img src="<?php bloginfo('template_url'); ?>/img/play-blue.png"><span class="thumbnail-title meiryo"><?php the_field('video_4_title_jp'); ?></span></div>
            <img class="img-responsive" src="<?php the_field('video_4_thumbnail'); ?>"></a> <a href="#video" rel="video_5">
            <div class="video_thumb_hover"><img src="<?php bloginfo('template_url'); ?>/img/play-blue.png"><span class="thumbnail-title meiryo"><?php the_field('video_5_title_jp'); ?></span></div>
            <img class="img-responsive" src="<?php the_field('video_5_thumbnail'); ?>"></a> </div>
        </div>
      </div>
      
      <!--Blue Stripe-->
      <div class="row text-center" id="press">
        <div class="col-md-12">
          <h2> プレスリリース</h2>
        </div>
      </div>
      
      <!--Timeline-->
      <div class="row relative" id="slide-press">
<?php 
 $current_year = date('Y', current_time('timestamp'));
 $current_month = date('m', current_time('timestamp'));
 query_posts("cat=3&year=$current_year&monthnum=$current_month");
 if(have_posts()) : 
?>
        <div id="carousel-press" class="carousel slide" data-ride="carousel"> 
          <!-- Indicators -->
          <ol class="carousel-indicators">
          <?php $number = 0; while(have_posts()): the_post(); ?>
            <li data-target="#carousel-press" data-slide-to="<?php echo $number++; ?>"></li>
            <?php endwhile; ?>
          </ol>
          
          <div class="carousel-inner" role="listbox">
		  
          <!-- Wrapper for slides -->
          <?php while(have_posts()): the_post(); ?>

          
            <div class="item">
					<div class="overlay-press-img"></div>
                    <?php if ( has_post_thumbnail() ) {  ?>
                    <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') ); ?>
                    <div class="overlay-press-img"></div>
					<img class="press-slide-background-image" src="<?php echo $url ?>" />
                    <?php } else { ?>
					<div class="overlay-press-img"></div>
					<img class="press-slide-background-image" src="<?php bloginfo('template_url'); ?>/img/media_top_image.jpg" />
				<?php } ?>

				<div class="col-md-6 col-md-offset-6">
					<div class="press-slider-content-wrapper">
						<h2><?php echo short_title(); ?> </h2>
						<p><?php echo get_excerpt(); ?></p>
					</div>
					<a class="btn btn-lg btn-default light-blue-btn" href="<?php the_permalink(); ?>">Read full article</a> 
				</div>
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
          <h2><b>お問い合わせ</b></h2>
          <?php echo do_shortcode( '[contact-form-7 id="16" title="無題"]' ); ?>
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
          <li><a href="home">ホーム</a></li>
          <li><a href="media">ニュース/メディア関連</a></li>
          <li><a href="recruit">採用情報</a></li>
          <li><a href="about">About</a></li>
          <li class="menu-blue"><a href="privacy">プライバシーポリシー</a></li>
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