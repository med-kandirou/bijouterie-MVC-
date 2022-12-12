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

  <h1 class="title">Details product</h1>

  <div class="container">
    <div class="row">
        <div class="col-md-6">
            <img class="pic_prod" src="<?= URLROOT.'/images/'.$data['image'].'' ?>">
        </div>
        <div class="col-md-6">
            <p class="labels">Nom :</p>
            <p><?= $data['nom']; ?></p>
            <p class="labels">Description :</p>
            <P><?= $data['description']; ?></P>
            <p class="labels">Price :</p>
            <p><?= $data['prix']; ?></p>
            <p class="labels">Quantité :</p>
            <P><?= $data['quantite']; ?></P>
        </div>
    </div>
  </div><br><br><br>




  
  <?php require_once APPROOT.'/views/inc/footer.php'; ?>