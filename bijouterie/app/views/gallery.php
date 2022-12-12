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
              <li><a href="<?= URLROOT.'/pages/gallery'?>">ALL</a></li>
              <?php foreach($data as $cat) :?>
                <li><a href="<?= URLROOT.'/Products/filter/'.$cat['id_c'] ?>"><?= $cat['libelle'] ?></a></li>
            <?php endforeach;?>
            </ul>
          </div>
        </div>
      </div>

      
      <div class="col-md-9">
        <div class="container" id="prod">
          <div class="row">
            <?php foreach($data2 as $prod) :?>
              <div class="col-md-3">
                <div class="info">
                  <p><?= $prod['nom']; ?></p>
                  <img src="<?= URLROOT.'/images/'.$prod['image'].''?>" alt="Diamond Ring"><br>
                  <p>$<span class="price"><?= $prod['prix']; ?></span></p>
                  <p class="qt">Quantité :<?= $prod['quantite']; ?></p>
                  <a href="<?= '../Products/delete/'.$prod['id_p']; ?>" class="buy">Details</a><br>
                </div><br>
              </div>
            <?php endforeach;?>
          </div>
          <!-- row 3 -->
        </div>
      </div>
    </div>
  </div>

  
  <?php require_once APPROOT.'/views/inc/footer.php'; ?>