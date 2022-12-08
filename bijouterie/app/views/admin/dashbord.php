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
    <div class="container">
      <div class="addprod">
        <h1 class="title">Dashbord</h1>
        <a href="../Products/addProd"><button id="add" class="btn btn-success btn_update">Add product</button></a>
      </div>
    </div>
        <div class="container">
          <div class="row">
            <?php foreach($data as $prod) :?>
            <div class="col-md-4">
              <div class="info">
                <p><?= $prod['nom']; ?></p>
                <img src="<?= URLROOT.'/images/'.$prod['image'].''?>" alt="Diamond Ring"><br>
                <p>$<span class="price"><?= $prod['prix']; ?></span></p>
                <p class="qt">Quantité :<?= $prod['quantite']; ?></p>
                <a href="<?= '../Products/delete/'.$prod['id_p']; ?>" class="btn btn-danger btn_delete">Delete</a><br>
                <a href="<?= '../Products/show/'.$prod['id_p']; ?>" class="btn btn-info btn_update">Update</a>
              </div><br>
            </div>
            <?php endforeach;?>
          </div>
  </div><br>

          


  <!-- end about section -->
  <?php require_once APPROOT.'/views/inc/footer.php'; ?>