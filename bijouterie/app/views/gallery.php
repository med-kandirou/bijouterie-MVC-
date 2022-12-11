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
  <h2 id="title">Our products</h2>
  <div id="container">
    <div class="row">
      <div class="col-md-3">
        <div class="categorie">
          <div class="nom_cat">
            <ul>
              <li id="cat"><a href="#" >Catégories :</a></li>
              <li><a href="#">ALL</a></li>
              <li><a href="#">Tous</a></li>
              <li><a href="#">Bagues</a></li>
              <li><a href="#">Bracelets</a></li>
              <li><a href="#">Bijoux de tete</a></li>
              <li><a href="#">Les opportunités</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-9">
        <div class="container" id="prod">
          <!-- <div class="row">
            <div class="col-md-12">
              <div class="d-flex justify-content-end">
                <div id="tri">
                  Sort by : &nbsp &nbsp
                  <select>
                    <option selected="selected">&nbsp&nbsp--select--</option>
                    <option>Top rate</option>
                    <option>Tendance</option>
                    <option>Price</option>
                    <option>Alphabetique</option>
                  </select>&nbsp &nbsp &nbsp
                </div>
              </div>

            </div>
          </div> -->
          
          <!-- row 1 -->
          <div class="row">
            <div class="col-md-3">
              <div class="info">
                <p>BRACELET</p>
                <img src="<?= URLROOT.'/images/i-1.png'?>" alt="bracelet">
                <p>$<span class="price">1300.00</span></p>
                <p class="buy">buy now</p>
              </div>
            </div>
            <div class="col-md-3">
              <div class="info">
                <p>EARINGS</p>
                <img src="<?= URLROOT.'/images/i-2.png'?>" alt="EARINGS">
                <p>$<span class="price">2000.00</span></p>
                <p class="buy">buy now</p>
              </div>
            </div>
            <div class="col-md-3">
              <div class="info">
                <p>EARINGS</p>
                <img src="<?= URLROOT.'/images/i-3.png'?>" alt="EARINGS">
                <p>$<span class="price">100.00</span></p>
                <p class="buy">buy now</p>
              </div>
            </div>
          </div>
         <!-- row 2 -->
          <div class="row">
            <div class="col-md-3">
              <div class="info">
                <p>BRACELET</p>
                <img src="<?= URLROOT.'/images/i-2.png'?>" alt="EARINGS">
                <p>$<span class="price">300.00</span></p>
                <p class="buy">buy now</p>
              </div>
            </div>
            <div class="col-md-3">
              <div class="info">
                <p>RING</p>
                <img src="<?= URLROOT.'/images/i-3.png'?>" alt="RING">
                <p>$<span class="price">100.00</span></p>
                <p class="buy">buy now</p>
              </div>
            </div>
            <div class="col-md-3">
              <div class="info">
                <p>Diamond Ring</p>
                <img src="<?= URLROOT.'/images/i-1.png'?>" alt="Diamond Ring">
                <p>$<span class="price">199.00</span></p>
                <p class="buy">buy now</p>
              </div>
            </div>
          </div>
          <!-- row 3 -->
          <div class="row">
            <div class="col-md-3">
              <div class="info">
                <p>RING</p>
                <img src="<?= URLROOT.'/images/i-3.png'?>" alt="Diamond Ring">
                <p>$<span class="price">899.00</span></p>
                <p class="buy">buy now</p>
              </div>
            </div>
            <div class="col-md-3">
              <div class="info">
                <p>EARINGS</p>
                <img src="<?= URLROOT.'/images/i-2.png'?>" alt="EARINGS">
                <p>$<span class="price">99.00</span></p>
                <p class="buy">buy now</p>
              </div>
            </div>
            <div class="col-md-3">
              <div class="info">
                <p>Diamond Ring</p>
                <img src="<?= URLROOT.'/images/i-1.png'?>" alt="ring">
                <p>$<span class="price">655.00</span></p>
                <p class="buy">buy now</p>
              </div>
            </div>
          </div>
          <div class="navigation">
            <div class="div1">
              <a href="#">1</a>
            </div>
            <div class="div2">
              <a href="#">2</a>
            </div>
            <div class="div3">
              <a href="#">3</a>
            </div>
            <div class="div4">
              <a href="#">4</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  
  <?php require_once APPROOT.'/views/inc/footer.php'; ?>