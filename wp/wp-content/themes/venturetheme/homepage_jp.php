<?php
/*
Template Name: Home JP
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
    <div class="popout-menu" style="display:none;"  >
      <ul>
        <a class="grey-logo" href="#top-image">
        <li><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/logo-venture-grey.jpg" /></li>
        </a>
        <div class="popout-menu-wrapper"> <a class="popout-menu-title" href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <li>ホーム</li>
          </a>
          <ul class="sub-menu home-menu is_page_menu" style="display:none">
            <a href="#services">
            <li><span class="menu-icon cog"></span>サービス紹介</li>
            </a> <a href="#statistics">
            <li><span class="menu-icon pie-chart"></span>サイト訪問数推移</li>
            </a> <a href="#publicity">
            <li><span class="menu-icon eye"></span>メディア掲載</li>
            </a> <a href="#ceo">
            <li><span class="menu-icon speach_bubble"></span>代表挨拶</li>
            </a> <a href="#history">
            <li><span class="menu-icon ribbon"></span>沿革</li>
            </a> <a href="#business-alliances">
            <li><span class="glyphicon glyphicon-globe"></span>ビジネスパートナー</li>
            </a> <a href="#contact">
            <li><span class="menu-icon align"></span>お問い合わせ</li>
            </a>
          </ul>
        </div>
        <div class="popout-menu-wrapper"> <a class="popout-menu-title" href="media">
          <li>ニュース/メディア関連</li>
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
        <div class="popout-menu-wrapper"> <a class="popout-menu-title" href="recruit">
          <li>採用情報</li>
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
<div id="skrollr-body">
  <div class="main-content">
    <div class="container-fluid">
      <!-- Top image -->
      <div class="row relative home-top" id="top-image">
        <div class="logo-top"><img src="<?php bloginfo('template_url'); ?>/img/logo-white.png" /></div>
        <div class="absolute-center-parent">
          <h1 class="absolute-center">旅行に関するあらゆる疑問や質問に答える<br />オンライントラベルメディア</h1>
        </div>
      </div>
      <!-- Travel & Hotel -->
      <div id="services" class="row domestic-travel"><a class="active-tab" href="#" rel="travel-jp">
        <div class="col-md-6 text-center"><img class="pad2" src="<?php bloginfo('template_url'); ?>/img/travel-jp-logo.png" /></div>
        </a> <a class="tab" href="#" rel="hotel-jp">
        <div class="col-md-6 text-center"><img class="pad2" src="<?php bloginfo('template_url'); ?>/img/hotel-jp-logo.png" /></div>
        </a> </div>
      <div class="domestic-travel-wrapper relative"> 
        <!-- Tab  1 -->
        <div class="row" id="travel-jp">
          <div class="right-social-networks"><a href="#" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/white-fb.png" /></a><a href="#" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/white-twitter.png" /></a></div>
          <div class="col-md-10 col-md-offset-1 text-center">
            <h3>日本最大級の旅行情報サイト</h3>
            <div class="row">
              <div class="col-md-4 col-md-offset-2 col-sm-6 text-right center-on-mobile visible"> <a class="btn btn-lg btn-default turquoise-btn">Visit Travel.jp</a> </div>
              <div class="col-md-4 col-sm-6 text-left center-on-mobile visible"> <a class="btn btn-lg btn-default light-blue-btn">App Store</a> </div>
            </div>
            <div class="row tabiness-wrapper">
              <div class="col-sm-3 col-sm-offset-2 col-xs-12 center-on-mobile text-right"><img class="tabiness" src="<?php bloginfo('template_url'); ?>/img/travel-jp-tabiness.png" /></div>
              <div class="col-sm-5 col-xs-12 text-left center-on-mobile">
                <p>日本最大級のオンライン旅行メディア</p>
              </div>
              </div>
              <div class="row">
                <div class="col-md-4 col-md-offset-2 col-sm-6 text-right center-on-mobile visible"> <a class="btn btn-lg btn-default dark-yellow-btn">Visit Tabiness<span>(日本語)</span></a> </div>
                <div class="col-md-4 col-sm-6 text-left center-on-mobile visible"> <a class="btn btn-lg btn-default dark-yellow-btn">Visit Tabiness<span>(英語) </span></a> </div>
              </div>
            </div>
          </div>
      
      <!-- Tab  2 -->
        <div id="hotel-jp" class="row" style="display:none;">
          <div class="right-social-networks"><a href="" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/white-fb.png" /></a><a href="" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/white-twitter.png" /></a></div>
          <div class="col-md-6 col-md-offset-3 text-center">
            <h3>日本最大級のホテル・宿のクチコミ検索サイト</h3>
          </div>
          <div class="col-md-4 col-md-offset-2 col-sm-6 text-right visible center-on-mobile"> <a class="btn btn-default turquoise-btn" style="width:275px">Hotel.jp (国内)</a> </div>
          <div class="col-md-4 col-sm-6 text-left center-on-mobile visible"> <a class="btn btn-default turquoise-btn" style="width:275px">Hotel.jp (グローバル)</a> </div>
          <div class="col-md-3 col-md-offset-3 col-sm-6 text-right visible center-on-mobile"> <a class="btn btn-lg btn-default light-blue-btn">App Store</a> </div>
          <div class="col-md-3 col-sm-6 text-left center-on-mobile visible"> <a class="btn btn-lg btn-default light-blue-btn">Google Play</a> </div>
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
        <div class="col-lg-4 col-md-4 text-center"><img class="pad10" src="<?php bloginfo('template_url'); ?>/img/the-list-logo.png" /></div>
        </a> <a class="tab" rel="flocations" href="#">
        <div class="col-lg-4 col-md-4 text-center"><img class="pad10" src="<?php bloginfo('template_url'); ?>/img/flocations-logo.png" /></div>
        </a> <a class="tab" rel="telunjuk" href="#">
        <div class="col-lg-4 col-md-4 text-center"><img class="pad10" src="<?php bloginfo('template_url'); ?>/img/telunjuk-logo.png" /></div>
        </a> </div>
      <div class="investment-wrapper"> 
        <!-- Tab 1 -->
        <div id="the-list" class="row visible text-center">
          <div class="col-md-12 visible">
            <h3>ホテルのエキスパートが厳選する<br />
            ”とっておき”のホテルサイト</h3>
          </div>
          <div class="col-md-12 visible"> <a class="btn btn-lg btn-default light-blue-btn">Visit THE LIST</a> </div>
        </div>
        <!-- Tab  2 -->
        <div id="flocations" class="row text-center" style="display:none">
          <div class="col-md-12 visible">
            <h3>関連会社：<br />東南アジアを拠点とする旅行検索サイト</h3>
          </div>
          <div class="col-md-3 col-md-offset-3 col-sm-6 text-right visible center-on-mobile"> <a class="btn btn-lg btn-default turquoise-btn">Visit Flocations</a> </div>
          <div class="col-md-3 col-sm-6 text-left visible center-on-mobile"> <a class="btn btn-lg btn-default light-blue-btn">App Store</a> </div>
        </div>
        <!-- Tab  3 -->
        <div id="telunjuk" class="row text-center" style="display:none">
          <div class="col-md-12 visible">
            <h3>関連会社：<br />
              インドネシアを拠点とするショッピング検索比較サイト</h3>
          </div>
          <div class="col-md-3 col-md-offset-3 col-sm-6 text-right center-on-mobile visible"> <a class="btn btn-lg btn-default turquoise-btn">Visit Telunjuk</a> </div>
          <div class="col-md-3 col-sm-6 text-left center-on-mobile visible"> <a class="btn btn-lg btn-default light-blue-btn">Google Play</a> </div>
        </div>
      </div>
      <!-- Map 2 / World -->
      <div class="row relative map" data-bottom-top="background-position:0% 0%" data-center="background-position:50% 0%" data-top-bottom="background-position:100% 0%">
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
          <h1 class="yellow">月間利用者数　100万人</h1>
          <h3 class="white">全サイト合計約100万（月間）セッションに到達しました</h3>
        </div>
        <div class="col-md-12 graph-wrapper" data-bottom-top="opacity:0;" data-center="opacity:1">
          <div class="graph col-centered">
            <div class="graph-years"> <span class="first-year">2010<span class="year-point"></span>
              <hr data-bottom-top="height:0px;" data-center="height:360px;" width="0">
              </span> <span class="second-year">2011<span class="year-point"></span>
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
var myStackedBar = new Chart(document.getElementById("canvas_StackedBar2").getContext("2d")).StackedBar(mydata1,opt2);
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
      <div class="row cta text-center">
        <div class="col-md-12">
          <h1 class="yellow">提携に関して</h1>
          <h3 class="white">広告出稿や提携に関してのお問い合わせはこちらから。</h3>
          <a class="btn btn-default yellow-btn">問い合わせ</a> </div>
      </div>
      <!-- Transition -->
      <div id="plane" class="row relative text-center">
        <div class="plane" data-bottom-top="background-position:0% 0%" data-top-bottom="background-position:100% 0%"></div>
        <div class="absolute-center-parent">
          <h1 class="absolute-center"><i>旅先を決めるところから、予約、現地でのアクティビティ、<br />思い出を振り返る楽しみまで、これまでにない旅行の楽しみ方を提案します。</i></h1>
        </div>
      </div>
      <!-- CEO -->
      <div id="ceo" class="row transition relative text-center"> <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/ceo.jpg" />
        <div class="col-md-6 col-sm-6 ceo-mission text-left">
          <h1>柴田　啓 <span class="ceo-font">CEO</span></h1>
          <h2>Our mission</h2>
          <p>どこへ、どうやって、いくらで、そこで何ができるのか、ユーザーのあらゆる疑問や質問に対し、常にベストな回答を目指します。</p>
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
                  <p>インターネット上での販売促進支援事業を目的とした、株式会社ベンチャーリパブリックを設立。</p>
                </div>
                <div class="col-md-8"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/construction.jpg" /></div>
              </div>
              <div class="item">
                <div class="col-md-3 col-md-offset-1">
                  <h2>June 2001 </h2>
                  <p>旅行比較サイト『Travel.jp』（旧：『Travel.co.jp』）　サービス提供開始。</p>
                  <br />
                  <img src="<?php bloginfo('template_url'); ?>/img/travel-jp-logo.png" /> </div>
                <div class="col-md-8"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/construction-2.jpg" /></div>
              </div>
              <div class="item">
                <div class="col-md-3 col-md-offset-1">
                  <h2>August 2008</h2>
                  <p>大阪証券取引所ヘラクレス（現JASDAQ）に上場。</p>
                </div>
                <div class="col-md-8"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/construction-3.jpg" /></div>
              </div>
              <div class="item">
                <div class="col-md-3 col-md-offset-1">
                  <h2> March 2009 </h2>
                  <p>ホテル・宿選びのクチコミサイト『Hotel.jp』　サービス提供開始。</p>
                </div>
                <div class="col-md-8"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/construction-4.jpg" /></div>
              </div>
              <div class="item">
                <div class="col-md-3 col-md-offset-1">
                  <h2> August 2012 </h2>
                  <p>MBO実施により、大阪証券取引所JASDAQ（グロース）上場廃止</p>
                </div>
                <div class="col-md-8"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/construction-5.jpg" /></div>
              </div>
              <div class="item">
                <div class="col-md-3 col-md-offset-1">
                  <h2> September 2012 </h2>
                  <p>国内・海外の旅行・観光ガイド『Travel.jp たびねす』　サービス提供開始。</p>
                </div>
                <div class="col-md-8"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/construction-6.jpg" /></div>
              </div>
              <div class="item">
                <div class="col-md-3 col-md-offset-1">
                  <h2> March 2014 </h2>
                  <p>国内・海外の旅行・観光ガイド『Travel.jp たびねす』　英語版のサービス提供開始。</p>
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
          <p>ビジネスパートナーにとって有益な価値を提供し続けます</p>
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
              <p><i><?php the_sub_field('text_jp'); ?></i></p>
            </div>
          </div>
          <?php endwhile; ?>
        </div>
        
        <?php endif; ?>
      </div>
      
      <!-- CTA 2 -->
      <div class="row cta2 text-center">
        <div class="col-md-10 col-md-offset-1">
          <h1 class="blue">ビジネスパートナーに関して</h1>
          <h3 class="white">ビジネスパートナーや提携に関してのお問い合わせはこちらから。</h3>
          <a class="btn btn-default blue-btn">問い合わせ</a> </div>
      </div>
      
      <!-- Contact -->
      <div id="contact" class="row">
        <div class="col-md-12">
          <h2>お問い合わせ</h2>
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
          <li><a href="<?php echo site_url(); ?>">ホーム</a></li>
          <li><a href="media">ニュース/メディア関連</a></li>
          <li><a href="recruit">採用情報</a></li>
          <li><a href="about">About</a></li>
          <li class="menu-blue"><a href="#">プライバシーポリシー</a></li>
          <li class="menu-blue"><a href="#">利用規約</a></li>
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