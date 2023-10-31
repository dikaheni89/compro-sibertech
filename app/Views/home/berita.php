<div class="blog-section-three position-relative pt-70 lg-pt-40">
  <div class="container">
    <div class="title-style-three text-center mb-50 lg-mb-20" data-aos="fade-up">
      <div class="sc-title">RECENT NEWS</div>
      <h2 class="main-title">Berita <span>Terbaru</span></h2>
    </div> <!-- /.title-style-three -->

    <div class="row gx-xxl-5">
      <?php foreach ($berita2 as $berita2) { ?>
        <div class="col-lg-4 col-sm-6 d-flex" data-aos="fade-up">
          <article class="blog-meta-one color-two tran3s mt-30">
            <figure class="post-img m0"><a href="<?= base_url('berita/read/' . $berita2['slug_berita']) ?>" class="w-100 d-block"><img src="<?= base_url('assets/upload/image/' . $berita2['gambar']) ?>" alt="" class="w-100 tran4s"></a></figure>
            <div class="post-data">
              <div class="post-tag"><a href="<?= base_url('berita/read/' . $berita2['slug_berita']) ?>"><?= $berita2['judul_berita'] ?></a></div>
              <a href="blog-details.html" class="blog-title"><h5><?= $berita2['ringkasan'] ?></h5></a>
            </div> <!-- /.post-data -->
          </article>
        </div>
      <?php } ?>
    </div>
  </div>
</div>