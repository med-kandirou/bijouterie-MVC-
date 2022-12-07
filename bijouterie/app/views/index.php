<?php require_once APPROOT.'/views/inc/header.php'; ?>
<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
      <?php require_once APPROOT.'/views/inc/navbar.php'; ?>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section position-relative">
      <div class="design-box">
        <img src="<?= URLROOT.'/images/design-1.png'?>" alt="bijoux d'or">
      </div>
      <div class="slider_number-container d-none d-md-block">
        <div class="number-box">
          <span>
            01
          </span>
          <hr>
          <span class="jwel">
            J <br>
            e <br>
            w <br>
            e <br>
            l <br>
            l <br>
            e <br>
            r <br>
            y
          </span>
          <hr>
          <span>
            02
          </span>
        </div>
      </div>
      <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">01</li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1">02</li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2">03</li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail_box">
                    <h2>
                      <span> New Collection</span>
                      <hr>
                    </h2>
                    <h1>
                      Jewellery
                    </h1>
                    <p>
                      Lorem ipsum dolor sit amet consec tetur adipiscing elit elit at felislacinia
                      aptent taciti sociosqu ad litora torquent per conubia nostra
                    </p>
                    <div>
                      <a href="">Shop Now</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="<?= URLROOT.'/images/slider-img.png'?>" alt="les bijoux">
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail_box">
                    <h2>
                      <span> New Collection</span>
                      <hr>
                    </h2>
                    <h1>
                      Jewellery
                    </h1>
                    <p>
                      Lorem ipsum dolor sit amet consec tetur adipiscing elit elit at felislacinia
                      aptent taciti sociosqu ad litora torquent per conubia nostra
                    </p>
                    <div>
                      <a href="">Shop Now</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="<?= URLROOT.'/images/slider-img.png'?>" alt="bijou 1">
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail_box">
                    <h2>
                      <span> New Collection</span>
                      <hr>
                    </h2>
                    <h1>
                      Jewellery
                    </h1>
                    <p>
                      Lorem ipsum dolor sit amet consec tetur adipiscing elit elit at felislacinia
                      aptent taciti sociosqu ad litora torquent per conubia nostra
                    </p>
                    <div>
                      <a href="">Shop Now</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="<?= URLROOT.'/images/slider-img.png'?>" alt="bijou 2">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
    <!-- end slider section -->
  </div>

  <!-- item section -->

  <div class="item_section layout_padding2">
    <div class="container">
      <div class="item_container">
        <div class="box">
          <div class="price">
            <h6>
              Best PRICE
            </h6>
          </div>
          <div class="img-box">
            <img src="<?= URLROOT.'/images/i-1.png'?>" alt="bijoux d'or">
          </div>
          <div class="name">
            <h5>
              Bracelet
            </h5>
          </div>
        </div>
        <div class="box">
          <div class="price">
            <h6>
              Best PRICE
            </h6>
          </div>
          <div class="img-box">
            <img src="<?= URLROOT.'/images/i-2.png'?>" alt="bijoux d'or 2">
          </div>
          <div class="name">
            <h5>
              Ring
            </h5>
          </div>
        </div>
        <div class="box">
          <div class="price">
            <h6>
              Best PRICE
            </h6>
          </div>
          <div class="img-box">
            <img src="<?= URLROOT.'/images/i-3.png'?>" alt="bijoux d'or 3">
          </div>
          <div class="name">
            <h5>
              Earings
            </h5>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- end item section -->

  <!-- about section -->

  <section class="about_section layout_padding2-top layout_padding-bottom">
    <div class="design-box">
      <img src="<?= URLROOT.'/images/design-2.png'?>" alt="photo de bijoux">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About Jewellery Shop
              </h2>
            </div>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua. Ut enim ad minim veniam, quis nostrudLorem ipsum dolor sit amet, consectetur
              adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
              veniam, quis nostrud
            </p>
            <div>
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img-box">
            <img src="<?= URLROOT.'/images/about-img.png'?>" alt="picture about">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="price_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Our Jewellery Price
        </h2>
      </div>
      <div class="price_container">
        <div class="box">
          <div class="name">
            <h6>
              Diamond Ring
            </h6>
          </div>
          <div class="img-box">
            <img src="<?= URLROOT.'/images/p-1.png'?>" alt="prod 1">
          </div>
          <div class="detail-box">
            <h5>
              $<span>1000.00</span>
            </h5>
            <a href="">
              Buy Now
            </a>
          </div>
        </div>
        <div class="box">
          <div class="name">
            <h6>
              Diamond Ring
            </h6>
          </div>
          <div class="img-box">
            <img src="<?= URLROOT.'/images/i-2.png'?>" alt="prod 2">
          </div>
          <div class="detail-box">
            <h5>
              $<span>1000.00</span>
            </h5>
            <a href="">
              Buy Now
            </a>
          </div>
        </div>
        <div class="box">
          <div class="name">
            <h6>
              Diamond Ring
            </h6>
          </div>
          <div class="img-box">
            <img src="<?= URLROOT.'/images/i-3.png'?>" alt="prod 3">
          </div>
          <div class="detail-box">
            <h5>
              $<span>1000.00</span>
            </h5>
            <a href="">
              Buy Now
            </a>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-center">
        <a href="" class="price_btn">
          See More
        </a>
      </div>
    </div>
  </section>

  <!-- end price section -->

  <!-- ring section -->

  <section class="ring_section layout_padding">
    <div class="design-box">
      <img src="<?= URLROOT.'/images/design-1.png'?>" alt="">
    </div>
    <div class="container">
      <div class="ring_container layout_padding2">
        <div class="row">
          <div class="col-md-5">
            <div class="detail-box">
              <h4>
                special
              </h4>
              <h2>
                Wedding Ring
              </h2>
              <a href="">
                Buy Now
              </a>
            </div>
          </div>
          <div class="col-md-7">
            <div class="img-box">
              <img src="<?= URLROOT.'/images/ring-img.jpg'?>" alt="prod 4">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="client_section">
    <div class="container">
      <div class="heading_container">
        <h2>
          Testimonial
        </h2>
      </div>
      <h4 class="secondary_heading">
        What is says our customer
      </h4>
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="client_container">
              <div class="client-id">
                <div class="img-box">
                  <img src="<?= URLROOT.'/images/client.png'?>" alt="client 1">
                </div>
                <div class="name">
                  <h5>
                    Aliqua
                  </h5>
                  <h6>
                    Consectetur adipiscing
                  </h6>
                </div>
              </div>
              <div class="detail-box">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                  dolore magna aliqua. Ut enim ad minim veniam, quis nostrudLorem ipsum
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="client_container">
              <div class="client-id">
                <div class="img-box">
                  <img src="<?= URLROOT.'/images/client.png'?>" alt="client 2">
                </div>
                <div class="name">
                  <h5>
                    Aliqua
                  </h5>
                  <h6>
                    Consectetur adipiscing
                  </h6>
                </div>
              </div>
              <div class="detail-box">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                  dolore magna aliqua. Ut enim ad minim veniam, quis nostrudLorem ipsum
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="client_container">
              <div class="client-id">
                <div class="img-box">
                  <img src="<?= URLROOT.'/images/client.png'?>" alt="client 3">
                </div>
                <div class="name">
                  <h5>
                    Aliqua
                  </h5>
                  <h6>
                    Consectetur adipiscing
                  </h6>
                </div>
              </div>
              <div class="detail-box">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                  dolore magna aliqua. Ut enim ad minim veniam, quis nostrudLorem ipsum
                </p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

    </div>
  </section>

  <!-- end client section -->

  <!-- end about section -->
  <?php require_once APPROOT.'/views/inc/footer.php'; ?>