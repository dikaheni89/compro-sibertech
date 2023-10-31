<?php use App\Models\Menu_model;

$menu    = new Menu_model();
$berita  = $menu->berita();
$profil  = $menu->profil();
$layanan = $menu->layanan();
?>

<!-- ======= Hero Section ======= -->
  <div class="hero-banner-five">
    <div class="container">
      <div class="row">
        <div class="col-xxl-6 col-md-7">
          <h1 class="hero-heading">Get Unlimited Internet Access, <span>100% NO FUP!</span></h1>
          <p class="text-lg mb-50 pt-40 pe-xl-5 md-pt-30 md-mb-40">Kecepatan Stabil, Harga Terjangkau, Tim Support 24/7, dan Tanpa FUP. Segera Berlangganan Sekarang Juga!</p>
          <ul class="style-none button-group d-flex align-items-center">
            <li class="me-4"><a href="contact-us.html" class="demo-btn ripple-btn tran3s">Subcription</a></li>
            <li><a class="fancybox video-icon tran3s" data-fancybox="" href="#"><i class="fas fa-play"></i></a></li>
          </ul>
        </div>
      </div>
    </div> <!-- /.container -->
    <div class="illustration-holder">
      <img src="<?= base_url() ?>/assets/frontend/images/assets/ils_13.svg" alt="" class="main-illustration ms-auto">
      <img src="<?= base_url() ?>/assets/frontend/images/assets/ils_13_1.svg" alt="" class="shapes shape-one">
      <img src="<?= base_url() ?>/assets/frontend/images/assets/ils_13_2.svg" alt="" class="shapes shape-two" data-aos="fade-down">
      <img src="<?= base_url() ?>/assets/frontend/images/assets/ils_13_2.svg" alt="" class="shapes shape-three" data-aos="fade-down">
    </div> <!-- /.illustration-holder -->
    <div class="shapes oval-one"></div>
  </div>

  <div class="fancy-feature-seventeen position-relative mt-160 xl-mt-50">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-xl-6 col-lg-5" data-aos="fade-right">
          <div class="title-style-three text-center text-lg-start">
            <h2 class="main-title"><span>Selamat datang di</span> <?= $konfigurasi['namaweb'] ?></h2>
          </div> <!-- /.title-style-three -->
        </div>
        <div class="col-xl-6 col-lg-7" data-aos="fade-left">
          <p class="m0 text-center text-lg-start md-pt-30"><?= $konfigurasi['tentang'] ?></p>
        </div>
      </div>

      <div class="row justify-content-center pt-30">
        <?php $pr = 1;
          foreach ($profil as $profil) { ?>
          <div class="col-lg-4 col-md-6" data-aos="fade-right">
            <div class="block-style-twelve mt-30 ps-lg-0 pe-xl-5 me-xl-2">
              <div class="icon d-flex align-items-end"><img src="<?= base_url() ?>/assets/frontend/images/icon/icon_31.svg" alt=""></div>
              <h5><a href="<?= base_url('berita/profil/' . $profil['slug_berita']) ?>"><?= $profil['judul_berita'] ?></a></h5>
              <p><?= $profil['ringkasan'] ?></p>
              <a href="<?= base_url('berita/profil/' . $profil['slug_berita']) ?>" class="tran3s more-btn"><img src="<?= base_url() ?>/assets/frontend/images/icon/icon_20.svg" alt=""></a>
            </div> <!-- /.block-style-twelve -->
          </div>
        <?php $pr++; } ?>
      </div>
    </div> <!-- /.container -->
  </div>

  <div class="fancy-feature-nineteen position-relative pt-130 lg-pt-80">
    <div class="container">
      <div class="row">
        <div class="col-xxl-5 col-lg-6 col-md-7">
          <div class="block-style-thirteen" data-aos="fade-right">
            <div class="title-style-three pb-15">
              <div class="sc-title">Layanan Kami</div>
              <h6 class="main-title" style="font-size: 20px"></h6>Yuk gunakan layanan yang ada di <span><?= namaweb() ?></span> <?= tagline() ?>.</h6>
            </div> <!-- /.title-style-three -->
            <ul class="style-none list-item">
            <?php $ml = 1;
              foreach ($layanan as $layanan) { 
              ?>
                <li data-aos="fade-up">
                  <div class="numb tran3s"><?= $ml; ?></div>
                  <a href="<?= base_url('berita/layanan/' . $layanan['slug_berita']) ?>"><h6><?= $layanan['judul_berita'] ?></h6></a>
                  <span><?= $layanan['ringkasan'] ?></span>
                </li>
              <?php $ml++; } ?>
            </ul>
          </div> <!-- /.block-style-thirteen -->
        </div>
      </div>
    </div> <!-- /.container -->
    <div class="illustration-holder" data-aos="fade-left">
      <img src="<?= base_url() ?>/assets/frontend/images/assets/ils_15.svg" alt="" class="w-100 main-illustration">
      <img src="<?= base_url() ?>/assets/frontend/images/assets/ils_15_1.svg" alt="" class="shapes shape-one">
      <img src="<?= base_url() ?>/assets/frontend/images/assets/ils_15_2.svg" alt="" class="shapes shape-two">
      <img src="<?= base_url() ?>/assets/frontend/images/assets/ils_15_3.svg" alt="" class="shapes shape-three">
      <img src="<?= base_url() ?>/assets/frontend/images/assets/ils_15_4.svg" alt="" class="shapes shape-four">
      <img src="<?= base_url() ?>/assets/frontend/images/assets/ils_15_5.svg" alt="" class="shapes shape-five" data-aos="fade-down" data-aos-delay="200" data-aos-duration="2000">
      <img src="<?= base_url() ?>/assets/frontend/images/assets/ils_15_6.svg" alt="" class="shapes shape-six" data-aos="fade-down" data-aos-delay="100" data-aos-duration="2000">
      <img src="<?= base_url() ?>/assets/frontend/images/assets/ils_15_7.svg" alt="" class="shapes shape-seven" data-aos="fade-down" data-aos-duration="2000">
    </div> <!-- /.illustration-holder -->
    <div class="shapes oval-one"></div>
    <div class="shapes oval-two"></div>
    <img src="<?= base_url() ?>/assets/frontend/images/shape/shape_35.svg" alt="" class="shapes bg-shape">
  </div>

  <?php include 'berita.php'; ?>
  <?php include 'client.php'; ?>

