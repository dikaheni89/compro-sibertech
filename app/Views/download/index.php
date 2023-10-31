<div class="theme-inner-banner">
  <div class="container">
    <h2 class="intro-title text-center"><?= $title ?></h2>
    <ul class="page-breadcrumb style-none d-flex justify-content-center">
      <li><a href="<?= base_url() ?>">Home</a></li>
      <li class="current-page"><?= $title ?></li>
    </ul>
  </div>
</div>

<div class="fancy-feature-twentyFour">
  <div class="container">
    <div class="row gx-xxl-5">
    <?php $no = 1;
      foreach ($download as $download) { ?>
        <div class="col-lg-4 col-sm-6 mb-40 xs-mb-30 d-flex" data-aos="fade-up">
          <div class="block-style-four">
            <div class="icon d-flex align-items-end justify-content-center"><img src="<?= base_url() ?>/assets/frontend/images/icon/icon_11.svg" alt=""></div>
            <a href="service-details-V1.html"><h5><?= $download['judul_download'] ?></h5></a>
            <p><?= $download['isi'] ?></p>
            <?php if ($download['gambar'] === '') {
                  echo '-';
              } else { ?>
            <a href="<?= base_url('download/unduh/' . $download['id_download']) ?>" class="more-btn"><img src="<?= base_url() ?>/assets/frontend/images/icon/icon_13.svg" alt="" class="tran3s"></a>
            <?php } ?>
          </div> <!-- /.block-style-four -->
        </div>
      <?php $no++; } ?>
    </div>
  </div>
</div>