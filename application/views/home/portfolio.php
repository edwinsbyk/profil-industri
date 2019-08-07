<header class="header h-fullscreen" style="background-image: url(../assets/img/vector/9.jpg)">
    <div class="overlay opacity-95" style="background-image: linear-gradient( 109.6deg,  rgba(238,164,179,1) 11.2%, rgba(212,153,234,1) 47.3%, rgba(150,121,255,1) 100.2% );">
    </div>
    <div class="container">
        <div class="row align-items-center h-100 pt-8 pt-md-7 pb-md-8">

            <div class="col-md-8">
                <h1 class="text-white">Solusi yang telah di implementasikan</h1>
                <p class="lead mt-5 mb-8 text-white">Global Intermedia telah berpengalaman dalam membangun infrastruktur IT di pemerintahan maupun sektor swasta. <br><br class="lead-1">berbagai dukungan dari vendor maupun SDM yang berpengalaman, Global Intermedia menempatkan diri sebagai salah satu penyedia jasa IT yang menjadi pionir di dunia pemerintahan dalam segi produk dan kualitas layanan.</p>

                <p class="gap-xy">
                    <a class="btn btn-lg btn-round btn-light mw-200" href="<?= base_url('home/kontak'); ?>">Hubungi</a>
                    <a class="btn btn-xl btn-round btn-primary mw-200" href="<?= base_url('home/solusi'); ?>">Pelajari lebih lanjut</a>
                </p>
            </div>

        </div>
    </div>
</header>

<!-- /.header -->


<!-- Main Content -->
<main class="main-content">

    <div class="container">

        <hr>
        <div class="container">

            <form class="row gap-y" action="<?= base_url('auth/kontak') ?>" method="post">
                <div class="col-lg">
                    <h3>Hubungi kami</h3>
                    <?= $this->session->flashdata('message'); ?>
                    <br>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input class="form-control form-control-lg" type="text" name="name" placeholder="Nama">
                            <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="form-group col-md-6">
                            <input class="form-control form-control-lg" type="text" name="email" placeholder="Email">
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <?= form_error('message', '<small class="text-danger pl-3">', '</small>'); ?>

                        <textarea class="form-control form-control-lg" rows="4" placeholder="Pesan Anda" name="message"></textarea>

                    </div>

                    <button class="btn btn-lg btn-primary" type="submit">Kirim Pesan</button>

                </div>

            </form>

        </div>

</main>

<hr>