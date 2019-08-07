<!-- <div class="content">
    <div class="poting">
        <h3><?= $detail['judul'] ?></h3>
        <div class="ringkasan"><?= $detail['ringkasan'] ?></div>
    </div>
    <div class="anggota"></div>
    <h3><?= $detail['isi'] ?></h3>
</div> -->


<!-- 
<section class="section text-white p-0" style="background-color: #33323a;">
    <div class="container-wide">
        <div class="row no-gutters"> -->

<!-- <div class="col-md-4 bg-img" style="background-image: url(<?= base_url('assets/image') ?>img/thumb/12.jpeg); min-height: 300px;"> -->
<!-- </div> -->
<!-- 
        <div class="col-md-8 p-6 p-md-8">
            <h4><?= $detail['ringkasan'] ?></h4>
            <p class="lead"><?= $detail['isi']; ?>
        </div>

    </div>
    </div> -->
<!-- </section> -->







<!-- Main Content -->
<main class="main-content">


    <!--
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      | Blog content
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      !-->
    <div class="section">
        <div class="container">

            <div class="text-center mt-8">
                <h2><?= $detail['judul'] ?></h2>
                <p><?= $detail['tanggal'] ?></p>
            </div>





            <div class="row">
                <?= $detail['isi']; ?>
            </div>










        </div>
    </div>