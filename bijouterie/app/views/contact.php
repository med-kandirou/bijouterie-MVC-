<?php require_once APPROOT.'/views/inc/header.php'; ?>
<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <?php require_once APPROOT.'/views/inc/navbar.php'; ?>
      </div>
    </header>
    <!-- end header section -->
  </div>

  <section class="about_section layout_padding2-top layout_padding-bottom">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="title_send">
              <h2>
                Send a message
              </h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mb-2 mt-2">
                        <label>Name :</label>
                        <input class="form-control" placeholder="Name">
                    </div>
                    <div class="col-md-6 mb-2 mt-2">
                        <label>Last Name :</label>
                        <input class="form-control" placeholder="Last Name">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-2 mt-2 col-md-12">
                        <label>Email :</label>
                        <input type="email" class="form-control" placeholder="exemple@gmail.com">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-2 mt-2 col-md-12">
                        <label>Phone :</label>
                        <input type="email" class="form-control" placeholder="+121 639872239">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-2 mt-2 col-md-12">
                        <label>Message :</label>
                        <textarea class="form-control col-md-12" rows="3" placeholder="Your message"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-2 mt-2 col-md-12">
                        <a href="" class="d-flex justify-content-center col-md-12">
                            Submit
                          </a>
                    </div>
                </div>  
            </div>
          </div>
        </div>
        <div class="col-md-6" id="map">
          <div class="img-box d-flex justify-content-center">
            <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="700" id="gmap_canvas" src="https://maps.google.com/maps?q=taza&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org">123movies</a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:700px;}</style><a href="https://www.embedgooglemap.net">email google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php require_once APPROOT.'/views/inc/footer.php'; ?>