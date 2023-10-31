<div class="theme-inner-banner">
  <div class="container">
    <h2 class="intro-title text-center"><?= $title ?></h2>
    <ul class="page-breadcrumb style-none d-flex justify-content-center">
      <li><a href="<?= base_url() ?>">Home</a></li>
      <li class="current-page"><?= $title ?></li>
    </ul>
  </div>
</div>

<div class="fancy-feature-two position-relative mt-140 lg-mt-100" style="margin-bottom: 100px">
  <div class="container">
    <div class="row">
      <div class="col-xxl-5 col-lg-6 col-md-7 ms-auto">
        <div class="block-style-two" data-aos="fade-left">
          <div class="title-style-one">
            <div class="sc-title-four">Layanan</div>
            <h2 class="main-title"><?= $title ?>. </h2>
          </div> <!-- /.title-style-one -->
          <p class="pt-10 pb-20 lg-pb-10"><?= $berita['isi'] ?></p>
        </div> <!-- /.block-style-two -->
      </div>
    </div>
  </div> <!-- /.container -->
  <div class="illustration-holder-two sm-mt-40">
    <img src="<?= base_url() ?>/assets/frontend/images/assets/ils_05.svg" alt="" class="main-illustration w-100">
    <img src="<?= base_url() ?>/assets/frontend/images/assets/ils_05_1.svg" alt="" class="shapes shape-one">
    <img src="<?= base_url() ?>/assets/frontend/images/assets/ils_05_2.svg" alt="" class="shapes shape-two" data-aos="fade-up" data-aos-anchor=".fancy-feature-two" data-aos-delay="100" data-aos-duration="2000">
    <img src="<?= base_url() ?>/assets/frontend/images/assets/ils_05_3.svg" alt="" class="shapes shape-three" data-aos="fade-up" data-aos-anchor=".fancy-feature-two" data-aos-delay="150" data-aos-duration="2000">
    <img src="<?= base_url() ?>/assets/frontend/images/assets/ils_05_4.svg" alt="" class="shapes shape-four">
    <img src="<?= base_url() ?>/assets/frontend/images/assets/ils_05_5.svg" alt="" class="shapes shape-five">
  </div> <!-- /.illustration-holder-two -->
</div>