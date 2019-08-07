<title><?= $title;   ?></title>


<!-- <div class="clearfix"></div>
<div class="konten">
    <div class="posting">
        <h3>berita baru</h3>
        <?php foreach ($listBerita as $lb) : ?>

                                                                                                                                                <div class="ringkasan">
                                                                                                                                                    <h3><a href="<?= base_url('home/baca/') ?><?= $lb['slug']; ?>"><?= $lb['judul']; ?></a></h3>
                                                                                                                                                    <?= $lb['ringkasan'] ?>
                                                                                                                                                </div>

        <?php endforeach; ?>

    </div> -->

<!-- <main class="main-content"> -->

<section class="section bg-gray">
    <div class="container">

        <div class="row gap-y">
            <?php foreach ($listBerita as $lb) : ?>
                <div class="col-md-6 col-lg-4">
                    <div class="card d-block border hover-shadow-6 mb-6">
                        <a href="#"><img class="card-img-top" src="<?= base_url('assets/') ?>img/thumb/1.jpg" alt="Card image cap"></a>
                        <div class="p-6 text-center">
                            <p><a class="small-5 text-lighter text-uppercase ls-2 fw-400" href="#">Berita</a></p>
                            <h5 class="mb-0"><a href="<?= base_url('home/baca/') ?><?= $lb['slug']; ?>"><?= $lb['judul']; ?></a></h5>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>


        </div>


        <nav class="flexbox mt-6">
            <a class="btn btn-white disabled"><i class="ti-arrow-left fs-9 mr-2"></i> Newer</a>
            <a class="btn btn-white" href="#">Older <i class="ti-arrow-right fs-9 ml-2"></i></a>
        </nav>

    </div>
</section>

</div>