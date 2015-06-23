<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html>
  <?php
        $page_title = "Vision Dynamics";
      $page_description = "Description of this page";
      $page_name = "Home";
          include("header.php"); 
                      ?>
  
  <body class="home">
    <!--Slider-->
    <div class="clear" id="slider-bg">
      <div class="full-width-wrapper" id="slider-frame">
        <div class="fixed-width-wrapper maxx-theme" id="slider-wrapper">
          <div id="slider" class="nivoSlider">
          <a href="#">
            <img src="images/pix/slide1.jpg" alt="" title="#htmlcaption" />
          </a> 
          <a href="news.php">
            <img src="images/pix/slide2.jpg" alt="" title="" />
          </a> 
          <a href="#">
          <img src="images/pix/slide3.jpg" alt="" title="" /> 
          <!--</a>
            <a href="#">
              <img src="images/pix/slide4.jpg" alt="" title="" />
            </a>
            <a href="#">
              <img src="images/pix/slide5.jpg" alt="" title="#htmlcaption3" />
            </a> --></a></div>
          <div id="htmlcaption" class="nivo-html-caption">
            <h1>Aim to help Startups/OEMs/SMEs in scientific field</h1>
          </div>
          <div id="htmlcaption2" class="nivo-html-caption">
            <h1>Visit &amp; Join our forum</h1>
          </div>
          <div id="htmlcaption3" class="nivo-html-caption">
          <h1>Click to read more detail</h1>
          <strong>This</strong> Test 
          <em>HTML</em> caption with 
          <a href="#">a link</a>.</div>
        </div>
      </div>
    </div>
    <!--/Slider-->
    <!--Body content-->
    <div class="full-width-wrapper">
      <div class="fixed-width-wrapper body-divider" id="body-content">
        <!--Entry-->
        <div class="entry three-column fixed-width-wrapper">
          <!--block-->
          <div class="block type1">
            <h1 class="first-word double-color">Who we are ?</h1>
            <div class="content">
              <a href="#" title="" class="preloading-light img-border align-none">
                <img src="images/pix/slide1.jpg" width="280" alt="" />
              </a>
              <div class="clear"></div>
              <p>This project is aimed at create an European applied science community for startups/OEMs/SMEs and scientific
              researchers. The project is to develop customize forum for them with the objective to increase exposure and sales
              (1), find cross-border R&amp;D partners (2), and discover additional market application opportunities (3). Focus is
              on start-yps and applied science with multiple applications, not with single applications.</p>
            </div>
            <a class="read-more" href="#" title="Read more">Read more</a>
          </div>
          <!--/block-->
          <!--block-->
          <div class="block type2">
            <h1 class="first-word double-color">What we do ?</h1>
            <div class="content">
              <ul class="zigzag list">
                <li>
                <img src="images/icons/clipboard_48.png" alt="" class="align-right" /> 
                <strong>Set up conferences</strong> 
                <span>Set up conferences for Startups/OEMs/SMEs in scientific field twice a year. ...</span> 
                <a href="#" title="">more</a></li>
                <li>
                <img src="images/icons/bug_48.png" alt="" class="align-left" /> 
                <strong>Providing platform</strong> 
                <span>We provide a forum that our members are able to exchange information and grow together.</span> 
                <a href="#" title="">more</a></li>
                <li>
                <img src="images/icons/help_48.png" alt="" class="align-right" /> 
                <strong>Helping Startups</strong> 
                <span>Our main purpose is to helping startups in scientific field. ...</span> 
                <a href="#" title="">more</a></li>
              </ul>
            </div>
            <a class="read-more" href="#" title="Read more">Read more</a>
          </div>
          <!--/block-->
          <!--block-->
          <div class="block type3">
            <h1 class="first-word double-color">Conference Program 2015</h1>
            <div class="content">
              <p>Entrepreneurs &amp; Scientist Europe 2015, Europe&#39;s premier sciences customer development and applied R&amp;D
              conference organized by Vision Dynamics is delighted to announce the conference programme for its xxxth consecutive
              event on Thursday …..Noveber 2015.</p>
              <ul class="list point">
                <li>
                  <h2>Easy ways to register</h2>
                </li>
                <li>
                <em>1.</em>Complete online registration form</li>
                <li>
                <em>2.</em>Email Josefien at Josefien.vdlaar@visiondynamics.nl</li>
              </ul>
            </div>
            <a class="read-more" href="#" title="Read more">Read more</a>
          </div>
          <!--/block-->
        </div>
        <!--/Entry-->
        <!--Get in touch-->
        <?php include("touch.html"); ?>
        <!--/Get in touch-->
      </div>
    </div>
    <!--/Body content-->
    <?php include("footer.html"); ?>
  </body>
</html>
