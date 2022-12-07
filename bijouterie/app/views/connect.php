
<?php require_once APPROOT.'/views/inc/header.php';extract($data);?>
<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
      <?php require_once APPROOT.'/views/inc/navbar.php'; ?>
      </div>
    </header>
    <!-- end header section -->
    <!-- end header section -->
  </div>
  <section class="vh-90" style="background-color: withe;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">   
              <div class="card-body p-4 p-lg-5 text-black">
                <form action="../Users/login" method="POST">
                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">Se connecter</span>
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label email_login" for="email_login">Email address</label>
                    <input type="email" name="email" class="form-control form-control-lg" value="<?php if(!empty($data['email'])) echo $data['email'];?>"/>
                    <p class="inavlid"><?php if(!empty($email_err)) echo $email_err;?></p>
                  </div>
                  <div class="form-outline mb-4">
                    <label class="form-label pass_login" for="pass_login">Password</label>
                    <input type="password" name="password" class="form-control form-control-lg" value="<?php if(!empty($password)) echo $password ;?>" >
                    <p class="inavlid"><?php if(!empty($password_err)) echo $password_err ;?></p>
                  </div>
                    <?php if(!empty($isTrue)) :?>
                        <div class="alert alert-danger" role="alert">
                        Email or password invalid
                        </div>
                    <?php  endif ;?>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block" type="submit">Connecter</button>
                  </div>
                </form>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  <!-- info section -->

<?php require_once APPROOT.'/views/inc/footer.php'; ?>
