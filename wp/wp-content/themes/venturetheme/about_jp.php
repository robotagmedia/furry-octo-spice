<?php
/*
Template Name: About JP
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
        <div class="popout-menu-wrapper is_about_page"> <a class="popout-menu-title" href="<?php echo site_url(); ?>">
          <li><b>ホーム</b></li>
          </a>
          <ul class="sub-menu home-menu" style="display:none">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>#services">
            <li><span class="menu-icon cog"></span>サービス紹介</li>
            </a> <a href="<?php echo esc_url( home_url( '/' ) ); ?>#statistics">
            <li><span class="menu-icon pie-chart"></span>サイト訪問数推移</li>
            </a> <a href="<?php echo esc_url( home_url( '/' ) ); ?>#publicity">
            <li><span class="menu-icon eye"></span>メディア掲載</li>
            </a> <a href="<?php echo esc_url( home_url( '/' ) ); ?>#ceo">
            <li><span class="menu-icon speach_bubble"></span>代表挨拶</li>
            </a> <a href="<?php echo esc_url( home_url( '/' ) ); ?>#history">
            <li><span class="menu-icon ribbon"></span>沿革</li>
            </a> <a href="<?php echo esc_url( home_url( '/' ) ); ?>#business-alliances">
            <li><span class="glyphicon glyphicon-globe"></span>ビジネスパートナー</li>
            </a> <a href="<?php echo esc_url( home_url( '/' ) ); ?>#contact">
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
        <div class="popout-menu-wrapper is_page_menu"> <a class="popout-menu-title" href="about">
          <li>About</li>
          </a> </div>
      </ul>
    </div>
  </nav>
</header>
<!-- Content -->
<div id="skrollr-body" class="jp">
  <div class="main-content">
    <div class="container-fluid about"> 
      
      <!-- Top image -->
      <div class="row relative about-top panel" id="top-image">
        <div class="logo-top"><img src="<?php bloginfo('template_url'); ?>/img/logo-white.png" /></div>
        <div class="absolute-center-parent">
          <div class="absolute-center col-md-8 col-centered">
            <h1>ベンチャーリパブリック</br>
              会社情報</h1>
          </div>
        </div>
      </div>
      
      <!-- Grey Logo -->
      <div class="row grey-red-logo"> <img src="<?php bloginfo('template_url'); ?>/img/grey-logo.png"> </div>
      <!-- Columns -->
      <div class="row two-columns">
        <div class="col-md-10 col-md-offset-1">
          <div class="row">
            <div class="col-md-4">社名</div>
            <div class="col-md-8">株式会社ベンチャーリパブリック</div>
          </div>
          <div class="row">
            <div class="col-md-4">本社：</div>
            <div class="col-md-8">〒106-0031東京都港区西麻布4-3-11泉西麻布ビル</div>
          </div>
          <div class="row">
            <div class="col-md-4">電話番号:</div>
            <div class="col-md-8">03-6419-2901</div>
          </div>
          <div class="row">
            <div class="col-md-4">FAX番号:</div>
            <div class="col-md-8">03-6419-2904</div>
          </div>
          <div class="row">
            <div class="col-md-4">代表者:</div>
            <div class="col-md-8">柴田　啓</div>
          </div>
          <div class="row">
            <div class="col-md-4">設立：</div>
            <div class="col-md-8">2013年8月1日（2001年1月4日設立の(旧)株式会社ベンチャーリパブリックが、トラベル事業及び管理部門を承継させる会社分割により、(新)株式会社ベンチャーリパブリックを設立）</div>
          </div>
          <div class="row">
            <div class="col-md-4">資本金：</div>
            <div class="col-md-8">1,000万円</div>
          </div>
          <div class="row">
            <div class="col-md-4">従業員数：</br>
              （2014年11月1日現在）</div>
            <div class="col-md-8">41名</div>
          </div>
          <div class="row">
            <div class="col-md-4">事業内容：</div>
            <div class="col-md-8">旅行など消費者による購買活動の支援を目的としたメディア運営事業等</div>
          </div>
        </div>
      </div>
      
      <!-- Stripe 1-->
      <div class="stripe row text-center"> </div>
      
      <!-- Grey Stripe 2 -->
      <div class="row grey-stripe">
        <div class="col-md-10 col-md-offset-1">
          <h1><b>役員紹介（2014年11月1日現在）</b></h1>
        </div>
      </div>
      
      <!-- Columns-->
      <div class="row two-columns">
        <div class="col-md-10 col-md-offset-1">
          <div class="row">
            <div class="col-md-6">
              <h4>代表取締役社長</h4>
              <div class="names">柴田　啓</div></div>
          </div>
          <div class="row">
            <div class="col-md-4">1988年4月</div>
            <div class="col-md-8">三菱商事株式会社入社</div>
          </div>
          <div class="row">
            <div class="col-md-4">2001年1月</div>
            <div class="col-md-8">（旧）株式会社ベンチャーリパブリック設立　代表取締役社長就任</div>
          </div>
          <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-8"><b>Twitter:</b><a href="https://twitter.com/keishibata" target="_blank"><span class="i_blue">@keishibata</span> https://twitter.com/keishibata</a></div>
          </div>
          <span class="border-line"></span>
        </div>
        <div class="col-md-10 col-md-offset-1">
          <div class="row">
            <div class="col-md-6">
              <h4>取締役</h4>
              <div class="names">柴田　健一</div></div>
          </div>
          <div class="row">
            <div class="col-md-4">1995年4月</div>
            <div class="col-md-8">日本生命保険相互会社入社</div>
          </div>
          <div class="row">
            <div class="col-md-4">2001年1月　</div>
            <div class="col-md-8">（旧）株式会社ベンチャーリパブリック設立　取締役副社長就任</div>
          </div>
          <div class="row">
            <div class="col-md-4">2013年8月</div>
            <div class="col-md-8">当社設立　取締役就任（現任）</div>
          </div>
          <span class="border-line"></span>
        </div>
        <div class="col-md-10 col-md-offset-1">
          <div class="row">
            <div class="col-md-6">
              <h4>取締役</h4>
              <div class="names">西村　博行</div></div>
          </div>
          <div class="row">
            <div class="col-md-4">1984年4月</div>
            <div class="col-md-8">アイ・ディー・ビー株式会社設立　取締役就任</div>
          </div>
          <div class="row">
            <div class="col-md-4">1997年6月</div>
            <div class="col-md-8">アイ・ディー・ビー株式会社　代表取締役就任</div>
          </div>
          <div class="row">
            <div class="col-md-4">2001年1月</div>
            <div class="col-md-8">（旧）株式会社ベンチャーリパブリック設立　取締役就任</div>
          </div>
          <div class="row">
            <div class="col-md-4">2013年8月</div>
            <div class="col-md-8">当社設立　取締役就任（現任）</div>
          </div>
          <span class="border-line"></span>
        </div>
        <div class="col-md-10 col-md-offset-1">
          <div class="row">
            <div class="col-md-6">
              <h4>取締役<span class="i_blue">*</span></h4>
              <div class="names">石坂　信也</div></div>
          </div>
        </div>
      </div>
      
      <!-- Grey Stripe 3 -->
      <div class="row grey-stripe">
        <div class="col-md-10 col-md-offset-1">
          <h1>監査役</h1>
        </div>
      </div>
      
      <!-- Columns -->
      <div class="row two-columns">
        <div class="col-md-10 col-md-offset-1">
          <div class="row">
            <div class="col-md-6">
              <h4>常勤監査役 **</h4>
              <div class="names">小山　康弘</div></div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <h4>監査役 **</h4>
              <div class="names">加茂　正治</div></div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <p class="top-border">* 社外取締役</br>
                ** 社外監査役</p>
            </div>
          </div>
        </div>
      </div>
      
      <!-- textbloc -->
      <div class="row grey-stripe">
        <div class="col-md-10 col-md-offset-1">
          <h1>Lorem Ipsum</h1>
          <h4>Proin gravida nibh vel velit</h4>
          <h3>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</h3>
          <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>
          <a href="#" class="i_blue">Read more</a> </div>
      </div>
      
      <!-- Blockquote -->
      <div class="row blockquote">
        <div class="col-md-10 col-md-offset-1">
          <div class="row">
            <div class="col-md-6">
              <h1>Blockquote</h1>
              <h4>Proin gravida nibh vel velit </h4>
              <p><i>“Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.”</i></p>
              <p>-<span class="i_blue">Yasuhiro Koyama</span> Senior Corporate Auditor</p>
            </div>
            <div class="col-md-6">
              <h1>Blockquote</h1>
              <h4>Proin gravida nibh vel velit </h4>
              <p><b><i>“Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.”</i></b>
              <p>-<span class="i_blue">Yasuhiro Koyama</span> Senior Corporate Auditor</p>
              </p>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Lists -->
      <div class="row grey-stripe lists">
        <div class="col-md-10 col-md-offset-1">
          <div class="row">
            <div class="col-md-6">
              <h1>Bullet List</h1>
              <h4>Proin gravida nibh vel velit </h4>
              <ul>
                <li>General Meeting Of Shareholders</li>
                <li>Corporate Auditors</li>
                <li>Board of Directors </li>
                <li>Compliance Committee</li>
                <li>President and Chief Executive Officer</li>
                <li>Travel Division </li>
                <li>Administrative Division</li>
              </ul>
            </div>
            <div class="col-md-6">
              <h1>Numbered List </h1>
              <h4>Proin gravida nibh vel velit </h4>
              <ol>
                <li>General Meeting Of Shareholders</li>
                <li>Corporate Auditors</li>
                <li>Board of Directors </li>
                <li>Compliance Committee</li>
                <li>President and Chief Executive Officer</li>
                <li>Travel Division </li>
                <li>Administrative Division</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Lists -->
      <div class="row table-wrapper">
        <div class="col-md-10 col-md-offset-1">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th class="blue-tb-bg"><h1>Table</h1>
                    <h4>Proin gravida nibh</h4></th>
                  <th class="i-blue-bg"><h1>Table</h1>
                    <h4>Proin gravida nibh</h4></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="grey-bg">General Meeting Of Shareholders</td>
                  <td class="light-grey-bg">Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.</td>
                </tr>
                <tr>
                  <td class="grey-bg">Corporate Auditors</td>
                  <td class="light-grey-bg">Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.</td>
                </tr>
                <tr>
                  <td class="grey-bg">General Meeting Of Shareholders</td>
                  <td class="light-grey-bg">Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.</td>
                </tr>
                <tr>
                  <td class="grey-bg">Board of Directors </td>
                  <td class="light-grey-bg">Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.</td>
                </tr>
                <tr>
                  <td class="grey-bg">President and Chief Executive Officer</td>
                  <td class="light-grey-bg">Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.</td>
                </tr>
                <tr>
                  <td class="grey-bg">Travel Division</td>
                  <td class="light-grey-bg">Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.</td>
                </tr>
                <tr>
                  <td class="grey-bg">Administrative Division</td>
                  <td class="light-grey-bg">Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.</td>
                </tr>
              </tbody>
            </table>
          </div>
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