<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html>
<?php
  $page_title = "Vision Dynamics";
$page_description = "Description of this page";
$page_name = "Subscribe";
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
                <a href="index.jsp" title="">Home</a>
              </li>
              <li class="current">
                <a href="#" title="">Subscribe</a>
              </li>
            </ul>
            <h1 class="first-word double-color sp">Subscribe</h1>
          </div>
          <div class="post entry-content">
            
            
            <div class="clear"></div>
            <h3 class="first-word">Subscribe Form</h3>
            <div class="sp"></div>
            <p>
              <em>Required fields are marked *</em>
            </p>
            <!--Contact form-->
            <form method="post" action="#" id="contact-form" class="maxx-form" name="contact-form">
              <div class="form-row">
                <label class="form-row-label">Your name:
                <span class="star">*</span></label>
                <input class="input-field required" style="width:400px" type="text" name="name" />
              </div>
              <div class="form-row">
                <label class="form-row-label">E-mail:
                <span class="star">*</span></label>
                <input class="input-field required email" style="width:400px" type="text" name="email" />
              </div>
              <div class="form-row">
                <label class="form-row-label">Subject:
                <span class="star">*</span></label>
                <input class="input-field required" style="width:400px" type="text" name="subject" />
              </div>
              	
              <div class="form-row">
                <label class="form-row-label"></label>
                <button type="submit" class="black border-radius-3px bold submit" title="">Subscribe!</button>
              </div>
            </form>
            <!--/Contact form-->
          </div>
        </div>
        <!--/Content-->
       
        
      </div>
    </div>
    <?php include("footer.html"); ?>
  </body>
</html>
