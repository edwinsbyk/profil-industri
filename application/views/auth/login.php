<!-- Main Content -->
<main class="main-content">

    <div class="bg-white rounded shadow-7 w-400 mw-100 p-6">
        <h5 class="mb-7">Masuk ke akun anda</h5>
        <?= $this->session->flashdata('message'); ?>

        <form method="post" action="<?= base_url('auth'); ?>">
            <div class="form-group">
                <input type="text" class="form-control" name="email" placeholder="Username" value="<?= set_value('email'); ?>">
                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>

            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password">
                <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>

            <div class="form-group flexbox py-3">
                <a class="text-muted small-2" href="<?= base_url('auth/forgotpassword') ?>">Lupa password?</a>
            </div>

            <div class="form-group">
                <button class="btn btn-block btn-primary" type="submit">Masuk</button>
            </div>
        </form>


        <hr class="w-30">

        <p class="text-center text-muted small-2">Don't have an account? <a href="<?= base_url('auth/registration') ?>">Register here</a></p>
        <a class="text-center" href="<?= base_url('auth/registration') ?>">Kembali ke beranda</a></p>
    </div>

</main><!-- /.main-content -->