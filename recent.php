<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html>
    <?php
        $page_title = "Vision Dynamics";
      $page_description = "Description of this page";
      $page_name = "Home";
          include("header.php");

                      ?>
  <body>
    <!--Header-->

    <!--/Header-->
    <!--Body content-->
    <div class="full-width-wrapper">
      <div class="fixed-width-wrapper" id="body-content">
        <!--Content-->
        <div id="content" class="float-left content-left">
          <div class="header-text">
            <ul id="breadcrumbs">
              <li>
                <a href="index.php" title="">Home</a>
              </li>
              <li class="current">
                <a href="#" title="">Recent News</a>
              </li>
            </ul>
            <h1 class="first-word double-color sp">Recent news</h1>
            <ul id="view-switcher">
              <li>
                <a href="#display-list-alternate" class="display-list-alternate" title="">List ALternate</a>
              </li>
              <li>
                <a href="#display-list" class="display-list" title="">List view</a>
              </li>
              <li>
                <a href="#display-short" class="display-short" title="">Double column</a>
              </li>
            </ul>
          </div>
          <div class="entry-content">
            <ul class="display-list list-blog-entry" id="list-blog-entry">
              <li>
                <a href="#" class="preloading-light img-border" title="">
                  <img src="images/pix/slide2.jpg" alt="" />
                </a>
                <div class="blog-entry-content">
                  <h2>
                    <a href="news.php" class="first-word">First Announcement of Plasma & Microstructures 2015</a>
                  </h2>
                  <div class="posts-info">
                    <span class="date" title="">JUN 23, 2015</span>
                    <span class="user">
                      <a href="#">Hugo de Haan</a>
                    </span>
                    <span class="category">
                      <a href="#">in Conference</a>
                    </span>
                  </div>
                  <p>The 2nd international workshop on applied science & entrepreneurship will be hold on NOV 26-27,2015 at Ghent University,Belgium</p>
                  <a class="read-more" href="news.php" title="Read more">Read more</a>
                </div>
              </li>


            </ul>
            <!--Pagination-->
            <div class="clear"></div>
            <div class="page-pagination clear">
              <a href="#" title="">Prev</a>
              <a href="#" title="" class="current">1</a>
              <a href="#" title="">Next</a>
            </div>
            <!--/Pagination-->
          </div>
        </div>
        <!--/Content-->
        <!--Sidebar-->
        <div id="sidebar" class="float-right">
          <!--box-->
          <div class="box">
            <h1 class="first-word double-color sp">All Categories</h1>
            <ul class="list cat">

              <li>
                <a href="#" title="">Conference (1))</a>
              </li>
            </ul>
          </div>
          <!--/box-->
          <!--box-->
          <div class="box">
            <h1 class="first-word double-color sp">News & Events</h1>
            <ul class="zigzag list">
              <li>
              
              
              
              <a href="news.php" title=""><strong>Fist Announcement of Plasma & Microstructures 2015</strong></a></li>
             
            </ul>
          </div>
          <!--/box-->
          <!--box-->

          <!--/box-->
          <!--box-->

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
