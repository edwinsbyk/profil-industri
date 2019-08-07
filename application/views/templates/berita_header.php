<!-- Header -->
<header class="header pb-9 pt-10" style="background-image: url(<?= base_url('assets/') ?>/img/thumb/1.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="fw-200 mb-6">Berita terbaru</h1>
                <p class="lead-2"></p>

                <hr class="w-50px ml-0">

                <a class="text-dark opacity-50 small" action="action" onclick="goBack()">Kembali ke halaman sebelumnya</a>
                <!-- <button onclick="goBack()">Go Back</button> -->
                <script>
                    function goBack() {
                        window.history.back();
                    }
                </script>
            </div>
        </div>
    </div>
</header><!-- /.header -->