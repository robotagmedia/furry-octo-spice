<?php
/*
Template Name: Recruit JP
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
        <div class="popout-menu-wrapper"> <a class="popout-menu-title" href="media">
          <li><b>ニュース/メディア関連</b></li>
          </a>
          <ul class="sub-menu media-menu" style="display:none">
            <a href="media#news">
            <li><span class="menu-icon icon-text-left"></span>お知らせ</li>
            </a> <a href="media#video">
            <li><span class="menu-icon play"></span>TVCM/動画ギャラリー</li>
            </a> <a href="media#press">
            <li><span class="menu-icon pad"></span>プレスリリース</li>
            </a> <a href="media#contact">
            <li><span class="menu-icon align"></span>お問い合わせ</li>
            </a>
          </ul>
        </div>
        <div class="popout-menu-wrapper is_page_menu"> <a class="popout-menu-title" href="recruit">
          <li><b>採用情報</b></li>
          </a>
          <ul class="sub-menu recruit-menu" style="display:none">
            <a href="#values">
            <li><span class="menu-icon star"></span>メッセージ</li>
            </a> <a href="#team">
            <li><span class="menu-icon users"></span>チーム紹介</li>
            </a> <a href="#work_at_vr">
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
      <div class="row relative recruit-top panel" id="top-image">
        <div class="logo-top"><img src="<?php bloginfo('template_url'); ?>/img/logo-white.png" /></div>
        <div class="absolute-center-parent">
          <div class="absolute-center col-md-8 col-centered">
            <h1><?php the_field('title_1'); ?></h1>
            <h3 class="meiryo"><?php the_field('text_1_jp'); ?></h3>
          </div>
        </div>
      </div>
      
      <!-- Panel 2 -->
      <div class="row relative panel" id="values">
        <div class="absolute-center-parent">
          <div class="absolute-center col-md-8 col-centered">
            <h1><?php the_field('title_2'); ?></h1>
            <h3 class="meiryo"><?php the_field('text_2_jp'); ?></h3>
          </div>
        </div>
      </div>
      <!-- Panel 3 -->
      <div class="row relative panel" id="panel_recruit_3">
        <div class="absolute-center-parent">
          <div class="absolute-center col-md-8 col-centered">
            <h1><?php the_field('title_3'); ?></h1>
            <h3 class="meiryo"><?php the_field('text_3_jp'); ?></h3>
          </div>
        </div>
      </div>
      <!-- Panel 4 -->
      <div class="row relative panel" id="panel_recruit_4">
        <div class="absolute-center-parent">
          <div class="absolute-center col-md-8 col-centered">
            <h1><?php the_field('title_4'); ?></h1>
            <h3 class="meiryo"><?php the_field('text_4_jp'); ?></h3>
          </div>
        </div>
      </div>
      
      <?php if(get_field('team_panel')): ?>
      
      <?php while(has_sub_field('team_panel')): ?>
      <!-- Stripe 1-->
      <div class="stripe row text-center" id="team">
        <div class="col-md-8 col-md-offset-2">
          <h2> <b><?php the_sub_field('team_title_jp'); ?></b> </h2>
        </div>
      </div>
      
      
      <!-- Panel 5 -->
      <div class="row relative team-wrapper" id="<?php the_sub_field('team_id'); ?>">
          <div class="col-md-8 col-md-offset-2">
            <div class="row text-left">
            <?php if(get_sub_field('team_member')): ?>
            <?php while(has_sub_field('team_member')): ?>
              <div class="col-sm-6 team_member <?php the_sub_field('team_additional_class'); ?>"> <img src="<?php the_sub_field('team_member_portrait'); ?>">
                <p><?php the_sub_field('team_member_name'); ?><br>
                  <i><?php the_sub_field('team_member_position'); ?></i></p>
              </div>
			<?php endwhile; ?>
            <?php endif; ?>
              <div class="col-md-12 text-center">
                <h3><?php the_sub_field('team_description_jp'); ?></h3>
              </div>
            </div>
            <div class="col-md-12 text-center"><a class="btn btn-default blue-btn">Contact Our Department</a></div>
          </div>
      </div>
      <?php endwhile; ?>
      <?php endif; ?>
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
      <div class="col-sm-6 text-left center-on-mobile"> <a href="https://www.facebook.com/VentureRepublic" class="fb-icon" target="_blank"></a> <a href="https://twitter.com/VentureRepublic" class="twitter-icon" target="_blank"></a> <a href="http://instagram.com/vkanri" class="insta-icon" target="_blank"></a> </div>
    </div>
      <!-- Panel 11 -->
      <div class="row relative" id="work_at_vr">
        <div class="absolute-center-parent">
          <div class="absolute-center col-md-8 col-centered">
            <h1><b>求人一覧</b></h1>
          </div>
        </div>
      </div>
      
      <!-- Apply -->
      <div id="application" class="row text-center">
        <div class="col-sm-6">
          <p><b>キャリア採用</b></p>
          <a href="https://js01.jposting.net/vrg/u/job.phtml" class="btn btn-lg btn-default light-blue-btn meiryo">詳細</a> </div>
        <div class="col-sm-6">
          <p><b>在宅ワーク</b></p>
          <a href="http://guide.travel.co.jp/info/recruit/" class="btn btn-lg btn-default apply-btn meiryo">詳細</a> </div>
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