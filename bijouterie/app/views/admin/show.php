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
  <h1 class="title">Update product </h1>
  <div class="container">
    <form action="" method="post">
        <div class="form-group">
            <label >Name :</label>
            <input type="text" class="form-control" required value="<?= $data['nom']; ?>">
        </div>
        <div class="form-group">
            <label >Description :</label>
            <div>
                <textarea name=""rows="5" class="form-control" required><?= $data['description']; ?></textarea>
            </div>
        </div>
        <div class="form-group">
            <label>Price :</label>
            <input type="number" class="form-control" required value="<?= $data['prix'];?>">
        </div>
        <div class="form-group">
            <label>Quantité :</label>
            <input type="number" class="form-control" required value="<?= $data['quantite']; ?>">
        </div>
        <div class="form-group">
            <label>Picture :</label>
            <input type="file" class="form-control" required value="<?= $data['ic_c']; ?>">
        </div>
        <div class="form-group">
            <label>Categorie :</label>
            <select name="" class="form-control" required>
                <option value="">--Select--</option>
                <?php foreach($data2 as $cat):?> 
                    <option value="<?= $cat['id_c']; ?>"><?= $cat['libelle']; ?></option>
                <?php endforeach;?>
            </select>
        </div><br>
        <div class="form-group">
            <button type="submit" class="form-control btn btn-success">Add product</button>
        </div>
    </form>
  </div>
  
  <!-- end about section -->
  <?php require_once APPROOT.'/views/inc/footer.php'; ?>