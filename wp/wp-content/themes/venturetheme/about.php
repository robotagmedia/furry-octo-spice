<?php
/*
Template Name: About
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
        <div class="popout-menu-wrapper is_page_menu"> <a class="popout-menu-title" href="about">
          <li>About</li>
          </a> </div>
      </ul>
    </div>
  </nav>
</header>
<!-- Content -->
<div id="skrollr-body">
  <div class="main-content">
    <div class="container-fluid about"> 
      
      <!-- Top image -->
      <div class="row relative about-top panel" id="top-image">
        <div class="logo-top"><img src="<?php bloginfo('template_url'); ?>/img/logo-white.png" /></div>
        <div class="absolute-center-parent">
          <div class="absolute-center col-md-8 col-centered">
            <h1>Venture Republic</br>
              Company Fact Sheet</h1>
          </div>
        </div>
      </div>
      
      <!-- Grey Logo -->
      <div class="row grey-red-logo"> <img src="<?php bloginfo('template_url'); ?>/img/grey-logo.png"> </div>
      <!-- Columns -->
      <div class="row two-columns">
        <div class="col-md-10 col-md-offset-1">
          <div class="row">
            <div class="col-md-4">Company Name:</div>
            <div class="col-md-8">Venture Republic Inc.</div>
          </div>
          <div class="row">
            <div class="col-md-4">Head Office:</div>
            <div class="col-md-8">4-3-11, NishiAzabu, Minato-ku, Tokyo, 106-0031 JAPAN</div>
          </div>
          <div class="row">
            <div class="col-md-4">Phone:</div>
            <div class="col-md-8">+81 (0)3-6419-2901</div>
          </div>
          <div class="row">
            <div class="col-md-4">Fax:</div>
            <div class="col-md-8">+81 (0)3-6419-2904</div>
          </div>
          <div class="row">
            <div class="col-md-4">Representative: </div>
            <div class="col-md-8">Kei Shibata, President and Chief Executive Officer</div>
          </div>
          <div class="row">
            <div class="col-md-4">Established:</div>
            <div class="col-md-8">In operation since January 4, 2001</div>
          </div>
          <div class="row">
            <div class="col-md-4">Capital:</div>
            <div class="col-md-8">10,000,000 yen (JPY)</div>
          </div>
          <div class="row">
            <div class="col-md-4">Number of Employees </br>
              (as of November 1, 2014):</div>
            <div class="col-md-8">41</div>
          </div>
          <div class="row">
            <div class="col-md-4">Main Business Activities: </div>
            <div class="col-md-8">Venture Republic operates vertical search engines and product review services, primarily in the area of travel.</div>
          </div>
        </div>
      </div>
      
      <!-- Stripe 1-->
      <div class="stripe row text-center"> </div>
      
      <!-- Grey Stripe 2 -->
      <div class="row grey-stripe">
        <div class="col-md-10 col-md-offset-1">
          <h1>Directors & Officers</h1>
          <h4>Members of the Board (as of November 1, 2014)</h4>
        </div>
      </div>
      
      <!-- Columns-->
      <div class="row two-columns">
        <div class="col-md-10 col-md-offset-1">
          <div class="row">
            <div class="col-md-6">
              <h4>President & Chief Executive Officer</h4>
              <i>Kei Shibata</i></div>
          </div>
          <div class="row">
            <div class="col-md-4">Apr. 1988</div>
            <div class="col-md-8">Joined Mitsubushi Corporation</div>
          </div>
          <div class="row">
            <div class="col-md-4">Jan. 2001</div>
            <div class="col-md-8">Founded Venture Republic</br>
              Member of the Board, President and CEO (Present Position)</div>
          </div>
          <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-8"><b>Twitter:</b> <span class="i_blue">@keishibata</span> https://twitter.com/keishibata</div>
          </div>
        </div>
        <div class="col-md-10 col-md-offset-1">
          <div class="row">
            <div class="col-md-6">
              <h4>Director</h4>
              <i>Kenichi Shibata</i></div>
          </div>
          <div class="row">
            <div class="col-md-4">Apr. 1995</div>
            <div class="col-md-8">Joined Nippon Life Insurance Company</div>
          </div>
          <div class="row">
            <div class="col-md-4">Jan. 2001</div>
            <div class="col-md-8">Founded Venture Republic</br>
              Member of the Board, Senior Executive Vice President</div>
          </div>
          <div class="row">
            <div class="col-md-4">Aug. 2013</div>
            <div class="col-md-8">Member of the Board (Present Position)</div>
          </div>
        </div>
        <div class="col-md-10 col-md-offset-1">
          <div class="row">
            <div class="col-md-6">
              <h4>Director</h4>
              <i>Hiroyuki Nishimura</i></div>
          </div>
          <div class="row">
            <div class="col-md-4">Apr. 1984</div>
            <div class="col-md-8">Founded IDB Corporation</br>
              Member of the Board</div>
          </div>
          <div class="row">
            <div class="col-md-4">June. 1997</div>
            <div class="col-md-8">Member of the Board, President</div>
          </div>
          <div class="row">
            <div class="col-md-4">Jan. 2001</div>
            <div class="col-md-8">Founded Venture Republic</br>
              Member of the Board</div>
          </div>
          <div class="row">
            <div class="col-md-4">Aug. 2013</div>
            <div class="col-md-8">Member of the Board (Present Position)</div>
          </div>
        </div>
        <div class="col-md-10 col-md-offset-1">
          <div class="row">
            <div class="col-md-6">
              <h4>Director<span class="i_blue">*</span></h4>
              <i>Nobuya Ishizaka</i></div>
          </div>
        </div>
      </div>
      
      <!-- Grey Stripe 3 -->
      <div class="row grey-stripe">
        <div class="col-md-10 col-md-offset-1">
          <h1>Corporate Auditors</h1>
        </div>
      </div>
      
      <!-- Columns -->
      <div class="row two-columns">
        <div class="col-md-10 col-md-offset-1">
          <div class="row">
            <div class="col-md-6">
              <h4>Senior Corporate Auditor **</h4>
              <i>Yasuhiro Koyama</i></div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <h4>Senior Corporate Auditor **</h4>
              <i>Masaharu Kamo</i></div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <p class="top-border">* Indicates an outside director as provided for in Article 2-15 of the Companies Act.</br>
                ** Indicates an external corporate auditor as provided for in Article 2-16 of the Companies Act.</p>
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
          <a href="#" class="i_blue"><i>Read more</i></a> </div>
      </div>
      
      <!-- Blockquote -->
      <div class="row blockquote">
        <div class="col-md-10 col-md-offset-1">
          <div class="row">
            <div class="col-md-6">
              <h1>Blockquote</h1>
              <h4>Proin gravida nibh vel velit </h4>
              <p><i>“Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.”</i></p>
              <p>-<span class="i_blue">Yasuhiro Koyama</span> <i>Senior Corporate Auditor</i></p>
            </div>
            <div class="col-md-6">
              <h1>Blockquote</h1>
              <h4>Proin gravida nibh vel velit </h4>
              <p><b><i>“Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.”</i></b>
              <p>-<span class="i_blue">Yasuhiro Koyama</span> <i>Senior Corporate Auditor</i></p>
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
          <h2>Contact us</h2>
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
          <li><a href="index">Home</a></li>
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

<?php get_template_part( 'about_jp' ); ?>

<?php endif ?>