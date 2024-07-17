<?php
$site_title = 'Ayansh Colours Homes - Patna';
include 'include/header.php';
?>

<section class="service-area">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="wow zoomIn" data-wow-delay="0.5s">Our Gallery</h1>
      </div>
    </div>
  </div>
</section>

<section class="our-portfolio mt-5">
  <div class="container">
    <div class="row my-shuffle-container">
      <div class="col-md-4 single-portfolio">
        <div class="aspect__inner">
          <img src="assets/images/gall-img/gal-1.png" alt="Gallery Image 1">
          <div class="overlay-text">
            <p>Sheet Size: 24x36 inch</p>
            <p>Design Size: 19.5x33 inch</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 single-portfolio">
        <div class="aspect__inner">
          <img src="assets/images/gall-img/gal-2.png" alt="Gallery Image 2">
          <div class="overlay-text">
            <p>Sheet Size: 24x34 inch</p>
            <p>Sheet Size: 24x36 inch</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 single-portfolio">
        <div class="aspect__inner">
          <img src="assets/images/gall-img/gal-3.png" alt="Gallery Image 3">
          <div class="overlay-text">
            <p>Sheet Size: 24x36 inch</p>
            <p>Design Size: 19.5x32.5 inch</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 single-portfolio">
        <div class="aspect__inner">
          <img src="assets/images/gall-img/gal-4.png" alt="Gallery Image 4">
          <div class="overlay-text">
            <p>Sheet Size: 24x34 inch</p>
            <p>Sheet Size: 24x36 inch</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 single-portfolio">
        <div class="aspect__inner">
          <img src="assets/images/gall-img/gal-5.png" alt="Gallery Image 5">
          <div class="overlay-text">
            <p>Sheet Size: 24x30 inch & 36x40 inch</p>
            <p>Design Size: 19.5x21 inch & 30x32.5 inch</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 single-portfolio">
        <div class="aspect__inner">
          <img src="assets/images/gall-img/gal-6.png" alt="Gallery Image 6">
          <div class="overlay-text">
            <p>Sheet Size: 24x30 inch & 36x40 inch</p>
            <p>Design Size: 34x40 inch & 22x27 inch</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 single-portfolio">
        <div class="aspect__inner">
          <img src="assets/images/gall-img/gal-7.png" alt="Gallery Image 7">
          <div class="overlay-text">
            <p>Sheet Size: 16x24 inch & 24x36 inch</p>
            <p>Design Size: 13x22.5 inch & 19x34.5 inch</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 single-portfolio">
        <div class="aspect__inner">
          <img src="assets/images/gall-img/gal-8.png" alt="Gallery Image 8">
          <div class="overlay-text">
            <p>Sheet Size: 24x36 inch</p>
            <p>Design Size: 22x33 inch</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 single-portfolio">
        <div class="aspect__inner">
          <img src="assets/images/gall-img/gal-9.png" alt="Gallery Image 9">
          <div class="overlay-text">
            <p>Sheet Size: 24x30 inch & 36x40 inch</p>
            <p>Design Size: 34x40 inch & 22x27 inch</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>






<style>
    .single-portfolio {
    position: relative;
}

.aspect__inner img {
    width: 100%;
    height: auto;
    display: block;
}

.overlay-text {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    background: rgba(0, 0, 0, 0.7); 
    color: #fff; 
    text-align: center;
    padding: 10px; 
}

.overlay-text p {
    margin: 0;
}
.aspect__inner::before {
    background-color: rgba(0, 0, 0, 0.2);
    width: calc(100% - 0px);
    height: calc(100% - 0px);
    top: 0px;
   
}
        

</style>







<?php
include __DIR__ . '/include/footer.php';
?>
