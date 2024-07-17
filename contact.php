<?php
$site_title = 'Ayansh Colours Homes - Patna';
include 'include/header.php';
?>


<style>
    .map {
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 20px 0;
    }
    @media (max-width: 768px) {
      #googleMap iframe {
        width: 100%;
        height: 300px;
      }
    }
  </style>




<section class="service-area">
<div class="container">
<div class="row">
<h1 class="wow zoomIn" data-wow-delay=".5s">Contact Us</h1>
</div>
</div>
</section>


<section class="contact-us">
<div class="container">
<div class="row">
<div class="col-md-4">
<div class="single-contact scp-2">
<span class="flaticon-envelope bg-envelope"></span>
<div class="sc-icon-inner">
<span class="flaticon-envelope"></span>
</div>
<h5>Send Email Us:</h5>
<p><a href="https://demo.voidcoders.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d9b4b8b0b5acaa99aaaca9a9b6abadf7bab6b4">[info@ayanshcolours.com]</a></p>
</div>
<div class="single-contact scp-2">
<span class="flaticon-phone bg-phone"></span>
<div class="sc-icon-inner">
<span class="flaticon-phone"></span>
</div>
<h5>Call Use</h5>
<p>+91 96937 20515</p>
</div>
<div class="single-contact scp-2">
<span class="flaticon-placeholder bg-placeholder"></span>
<div class="sc-icon-inner">
<span class="flaticon-placeholder"></span>
</div>
<h5>Our Location</h5>
<p>Saguna Khagaul Rd, Lekha nagar,<br> Balaji Nagar, Patna, Bihar 801503</p>
</div>
</div>
<div class="col-md-8">
<div class="message-box meb-2">
<form class="cf" method="post" action="https://demo.voidcoders.com/htmldemo/we-paintV2/wepaint-yellow/assets/php/mail.php" id="cf">
<div class="row">
<div class="form-group col-md-6">
<label>Your Name*</label>
<input type="text" class="form-control" id="firstName" name="firstName" placeholder="Your Name Here">
</div>
<div class="form-group col-md-6">
<label>Email Address*</label>
<input type="email" id="email" name="email" class="form-control" placeholder="Email Address Here">
</div>
<div class="form-group col-md-12">
<label>Your Message</label>
<input type="hidden" class="form-control" id="subjectName" name="subjectName" value="0">
<input type="hidden" id="phone" name="phone" class="form-control" value="0">
<textarea rows="6" class="form-control" id="msg" name="msg" placeholder="Write Your Message"></textarea>
</div>
<div class="form-group">
<div class="col-md-4">
<button type="submit" id="submit" name="submit" class="cf-btn btn btn-dark">Send Now</button>
</div>
</div>
<div class="col-md-12 text-center">
<div class="cf-msg"></div>
</div>
</div>
</form>
</div>
<div class="map">
<div id="googleMap">
<iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3597.951121513095!2d85.0419541!3d25.606540400000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjXCsDM2JzIzLjYiTiA4NcKwMDInMzEuMCJF!5e0!3m2!1sen!2sin!4v1719559269425!5m2!1sen!2sin" width="800" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
</div>
</div>
</div>
</div>
</section>








<?php
include __DIR__ . '/include/footer.php';
?>