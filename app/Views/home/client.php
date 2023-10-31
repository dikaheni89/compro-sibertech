<div class="partner-section-two mt-110" style="margin-bottom: 100px;">
  <div class="container">
    <div class="title-style-one text-center" data-aos="fade-up">
      <div class="sc-title-three">Konsumen Kami</div>
      <h2 class="main-title md">Client kami </h2>
    </div> <!-- /.title-style-one -->

    <div class="row">
      <div class="col-12 m-auto">
        <ul class="style-none text-center">
        <?php foreach ($client as $client) { ?>
          <li class="partner-logo-block-one d-inline-block" data-aos="fade-up"><a href="#" class="d-flex align-items-center justify-content-center"><img src="<?= base_url('assets/upload/client/thumbs/' . $client['gambar']) ?>" alt=""></a></li>
        <?php } ?>
        </ul>
      </div>
    </div>
  </div> <!-- /.container -->
</div>