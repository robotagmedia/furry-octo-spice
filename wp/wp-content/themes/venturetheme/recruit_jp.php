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
    <div class="popout-menu" style="display:none;"  >
      <ul>
        <a class="grey-logo" href="#top-image">
        <li><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/logo-venture-grey.jpg" /></li>
        </a>
        <div class="popout-menu-wrapper is_about_page"> <a class="popout-menu-title" href="<?php echo site_url(); ?>">
          <li>ホーム</li>
          </a>
          <ul class="sub-menu home-menu" style="display:none">
            <a href="<?php echo site_url(); ?>#services">
            <li><span class="menu-icon cog"></span>サービス紹介</li>
            </a> <a href="<?php echo site_url(); ?>#statistics">
            <li><span class="menu-icon pie-chart"></span>サイト訪問数推移</li>
            </a> <a href="<?php echo site_url(); ?>#publicity">
            <li><span class="menu-icon eye"></span>メディア掲載</li>
            </a> <a href="<?php echo site_url(); ?>#ceo">
            <li><span class="menu-icon speach_bubble"></span>代表挨拶</li>
            </a> <a href="<?php echo site_url(); ?>#history">
            <li><span class="menu-icon ribbon"></span>沿革</li>
            </a> <a href="<?php echo site_url(); ?>#business-alliances">
            <li><span class="glyphicon glyphicon-globe"></span>ビジネスパートナー</li>
            </a> <a href="<?php echo site_url(); ?>#contact">
            <li><span class="menu-icon align"></span>お問い合わせ</li>
            </a>
          </ul>
        </div>
        <div class="popout-menu-wrapper"> <a class="popout-menu-title" href="media">
          <li>ニュース/メディア関連</li>
          </a>
          <ul class="sub-menu media-menu" style="display:none">
            <a href="#news">
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
          <li>採用情報</li>
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
<div id="skrollr-body">
  <div class="main-content">
    <div class="container-fluid"> 
      
      <!-- Top image -->
      <div class="row relative recruit-top panel" id="top-image">
        <div class="logo-top"><img src="<?php bloginfo('template_url'); ?>/img/logo-white.png" /></div>
        <div class="absolute-center-parent">
          <div class="absolute-center col-md-8 col-centered">
            <h1>Join Venture Republic</h1>
            <h3>どこへ、どうやって、いくらで、そこで何ができるのか、ユーザーのあらゆる疑問や質問に対し、常にベストな回答を目指します。</h3>
          </div>
        </div>
      </div>
      
      <!-- Panel 2 -->
      <div class="row relative panel" id="values">
        <div class="absolute-center-parent">
          <div class="absolute-center col-md-8 col-centered">
            <h1>A “Venture” Spirit</h1>
            <h3>当社のスタッフはそれぞれ得意分野（専門分野）を持ち、かつベンチャースピリット・ビジネスマインドを持った人が多いことが特徴です。
当社の専門性の高いサービスやコンテンツは、スタッフの得意分野へのこだわりとベンチャースピリットから生まれたもので、それこそが当社の最大の強みであり、当社のミッション（会社のミッションが分かるところへリンクを貼る）実現の要素です。</h3>
          </div>
        </div>
      </div>
      <!-- Panel 3 -->
      <div class="row relative panel" id="panel_recruit_3">
        <div class="absolute-center-parent">
          <div class="absolute-center col-md-8 col-centered">
            <h1>Team Player</h1>
            <h3>リパブリックという単語が社名に含まれている通り、当社はひとつのチームであり、
すなわちチームプレーも重視しています。
当社には、ひとつのチームであるからこそ、個々を尊重しながらオープンに議論できる土壌があり、ロジカルに本質論で議論ができる、柔軟な考えを持つ、成功体験にとらわれずゼロベースで思考できる、そういうコミュニケーション力を生かすことで、得意分野とベンチャースピリットそしてチームプレーを追求し「世界でも類を見ないメディア」＝「究極の消費応援メディア」を目指しています。</h3>
          </div>
        </div>
      </div>
      <!-- Panel 4 -->
      <div class="row relative panel" id="panel_recruit_4">
        <div class="absolute-center-parent">
          <div class="absolute-center col-md-8 col-centered">
            <h1>Expertise</h1>
            <h3>当社はこれからも他にない分野の開拓も進めていくつもりです。当然そこにはベンチャースピリットとともに、専門性の追求、得意分野へのこだわりが求められ、当社はそうした資質を持つ人材に期待しています。</h3>
          </div>
        </div>
      </div>
      
      <!-- Stripe 1-->
      <div class="stripe row text-center" id="team">
        <div class="col-md-8 col-md-offset-2">
          <h2> システム開発グループ</h2>
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
                <h3>中国出身の若手有望株！料理とダンスを愛する仲良しコンビです</h3>
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
                <h3>キュートなコンテンツを創り出す癒し系の彼女は誰もが認める山ガール！</h3>
              </div>
            </div>
            <div class="col-md-12 text-center"><a class="btn btn-default blue-btn">Contact Our Department</a></div>
          </div>
      </div>
      
      <!-- Stripe3 -->
      <div class="stripe row text-center">
        <div class="col-md-8 col-md-offset-2">
          <h2> 営業グループ </h2>
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
                <h3>国内外を飛び回るパワフル女子の本来の姿はお花を愛するフローリスト！</h3>
              </div>
            </div>
            <div class="col-md-12 text-center"><a class="btn btn-default blue-btn">Contact Our Department</a></div>
          </div>
      </div>
      
      <!-- Stripe 4 -->
      <div class="stripe row text-center">
        <div class="col-md-8 col-md-offset-2">
          <h2> プロダクトデータグループ </h2>
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
                <h3>サイトの支えとなるデータを操る旅行のエキスパート。フランス大好き！口癖はMerci!</h3>
              </div>
            </div>
            <div class="col-md-12 text-center"><a class="btn btn-default blue-btn">Contact Our Department</a></div>
          </div>
      </div>
      
      <!-- Stripe 5 -->
      <div class="stripe row text-center">
        <div class="col-md-8 col-md-offset-2">
          <h2> マーケティンググループ </h2>
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
                <h3>マーケティング、市場分析、海外案件などマルチにこなす彼は映画愛好家です！</h3>
              </div>
            </div>
            <div class="col-md-12 text-center"><a class="btn btn-default blue-btn">Contact Our Department</a></div>
          </div>
      </div>
      
      <!-- Stripe 6 -->
      <div class="stripe row text-center">
        <div class="col-md-8 col-md-offset-2">
          <h2> 管理部 </h2>
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
                <h3>会社のお財布を司るにふさわしい真面目な彼はたくさんの資格を持つ勉強家！</h3>
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
            <h1>求人一覧</h1>
          </div>
        </div>
      </div>
      
      <!-- Apply -->
      <div id="application" class="row text-center">
        <div class="col-sm-6">
          <p>キャリア採用</p>
          <a class="btn btn-lg btn-default light-blue-btn">詳細</a> </div>
        <div class="col-sm-6">
          <p>在宅ワーク</p>
          <a class="btn btn-lg btn-default apply-btn">詳細</a> </div>
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