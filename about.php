<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html>
  <?php
  $page_title = "Vision Dynamics";
$page_description = "Description of this page";
$page_name = "Home";
    include("header.php"); ?>
  <body>
   
    <!--Body content-->
    <div class="full-width-wrapper">
      <div class="fixed-width-wrapper" id="body-content">
        <!--Content-->
        <div id="content" class="float-left content-left">
          <div class="header-text">
            <ul id="breadcrumbs">
              <li>
                <a href="#" title="">Home</a>
              </li>
              <li class="current">
                <a href="#" title="">About us</a>
              </li>
            </ul>
            <h1 class="first-word double-color sp">About us</h1>
          </div>
          <div class="post entry-content">
            <h3 class="first-word">About Our Website !</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nibh mi, commodo eu, pellentesque ut, blandit
            rutrum, ligula. Praesent ultricies urna a urna. Quisque massa. Cras ipsum diam, hendrerit id, accumsan sit amet,
            fermentum vel, dui.</p>
            <a href="images/pix/about-1.jpg" class="preloading-light img-border clear" rel="prettyPhoto" title="">
              <img src="images/pix/about-1.jpg" alt="Lorem ipsum dolor si amet" />
            </a>
            <p>Nulla sagittis convallis arcu. Sed sed nunc. Curabitur consequat. Quisque metus enim, venenatis fermentum, mollis
            in, porta et, nibh. 
            <a href="#" title="">Duis vulputate elit in elit</a>. Mauris dictum libero id justo. 
            <strong>Fusce in est</strong>. Sed nec diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames
            ac turpis egestas. Quisque semper nibh eget nibh. Sed tempor. 
            <strong>Fusce erat</strong>. porta et, nibh. Duis vulputate elit in elit. Mauris dictum libero id justo. Fusce in est.
            Sed nec diam.</p>
            <p>�</p>
            <h3 class="first-word">Who we are ?</h3>
            <div class="img-border preloading-light align-right">
              <img src="images/pix/slide1.jpg" width="300" alt="" />
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nibh mi, commodo eu, pellentesque ut, blandit
            rutrum, ligula. Praesent ultricies urna a urna.</p>
            <p>Quisque massa. Cras ipsum diam, hendrerit id, accumsan sit amet, fermentum vel, dui.. 
            <a href="#" title="">Duis vulputate elit in elit</a>. Mauris dictum libero id justo. Fusce in est. 
            <strong>Sed nec diam.</strong> Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
            egestas.</p>
            <ul class="list point">
              <li>
                <a href="#" title="">
                <em>1.</em>Lorem ipsum dolor sit amet, consectetur</a>
              </li>
              <li>
                <a href="#" title="">
                <em>2.</em>Donec ligula mauris</a>
              </li>
              <li>
                <a href="#" title="">
                <em>3.</em>Aenean sed</a>
              </li>
              <li>
                <a href="#" title="">
                <em>4.</em>Nullam ven tincidunt dolor</a>
              </li>
              <li>
                <a href="#" title="">
                <em>5.</em>Lorem ipsum dolor</a>
              </li>
            </ul>
          </div>
        </div>
        <!--/Content-->
        <!--Sidebar-->
        <div id="sidebar" class="float-right">
          <!--box-->
          <div class="box">
            <h1 class="first-word double-color sp">What they say ?</h1>
            <ul class="list quote">
              <li>
                <p>&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consectetur, nibh ut feugiat placerat, orci
                lacus accumsan erat, eget porttitor arcu velit a lacus.&quot;</p>
                <a href="#">
                <strong>John Doe</strong> - 
                <b>MaxxD Co.,Ltd</b></a>
              </li>
              <li>
                <p>&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consectetur, nibh ut feugiat placerat, orci
                lacus accumsan erat, eget porttitor arcu velit a lacus.&quot;</p>
                <a href="#">
                <strong>John Doe</strong> - 
                <b>MaxxD Co.,Ltd</b></a>
              </li>
            </ul>
          </div>
          <!--/box-->
          <!--box-->
          <div class="box">
            <h1 class="first-word double-color sp">More About Us</h1>
            <ul class="list cat">
              <li>
                <a href="#" title="">Lorem ipsum dolor sit amet consectetur</a>
              </li>
              <li class="current">
                <a href="#" title="">Praesent ultricies urna a urna</a>
              </li>
              <li>
                <a href="#" title="">Quisque metus enim, venenatis</a>
              </li>
              <li>
                <a href="#" title="">Nullam ven tincidunt dolor consectetur</a>
              </li>
              <li>
                <a href="#" title="">Lorem ipsum dolor sit amet consectetur</a>
              </li>
            </ul>
          </div>
          <!--/box-->
        </div>
        <!--/Sidebar-->
        <!--Get in touch-->
        <?php include("touch.html"); ?>
        <!--/Get in touch-->
      </div>
    </div>
    <?php include("footer.html"); ?>
  </body>
</html>
