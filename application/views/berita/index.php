<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <?= $this->session->flashdata('message'); ?>


    <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target=".tambahModal">Tambah Berita Baru</a>
    <table class="table table-hover">

        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Judul</th>
                <th scope="col">Ringkasan</th>
                <th scope="col">Status</th>
                <th scope="col">Author</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($listBerita as $ul) : ?>
                <tr>
                    <th scope="row"><?= $i; ?></th>
                    <td>
                        <a href="<?php echo base_url('home/baca/') ?><?php echo $ul['slug'] ?>" target=”_blank”><?php echo $ul['judul']; ?></a></td>
                    <td><?= $ul['ringkasan']; ?></td>
                    <td><?php
                        if ($ul['status_berita'] == 1) {
                            $status = 'Published';
                        } else {
                            $status = ' Not Published';
                        }
                        echo $status;

                        ?></td>
                    <td><?= $ul['author']; ?></td>
                    <td><?= $ul['tanggal']; ?></td>
                    <td>
                        <a href="" class="badge badge-success" data-toggle="modal" data-target=".bd-example-modal-xl<?= $ul['id'] ?>">Edit</a>
                        <a href="" class="badge badge-danger" data-toggle="modal" data-target="#modal_delete<?= $ul['id']; ?>">Hapus</a>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php
    foreach ($listBerita as $ul) : ?>
        <div class="modal fade bd-example-modal-xl<?= $ul['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="newSubMenuModalLabel">Edit</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url('berita/edit') ?>">
                        <div class="modal-body">

                            <div class="form-group">

                                <div class="col-xs-8">
                                    <input name="judul" class="form-control" type="text" placeholder="Judul" value="<?= $ul['judul'] ?>" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-8">
                                    <input name="ringkasan" class="form-control" type="text" placeholder="Ringkasan" value="<?= $ul['ringkasan'] ?>" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-8">
                                    <label for="message-text" class="col-form-label">Author</label>
                                    <input name="author" class="form-control" type="text" placeholder="Author" value="<?= $user['name'] ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Isi:</label>
                                <textarea class="form-control" id="textarea" name="isi"><?= $ul['isi'] ?></textarea>
                            </div>

                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active" checked>
                                    <label class="form-check-label" for="is_active">
                                        Publish?
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <input type="hidden" name="id" value="<?= $ul['id']; ?>">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                            <button class="btn btn-info">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<!-- /.container-fluid -->
<?php
foreach ($listBerita as $ul) : ?>
    <div class="modal fade" id="modal_delete<?= $ul['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newSubMenuModalLabel">Hapus Berita</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form-horizontal" method="post" action="<?= base_url('berita/hapusberita') ?>">
                    <p>Apakah anda yakin menghapus berita <?= $ul['judul'] ?></p>

                    <div class="modal-footer">
                        <input type="hidden" name="id" value="<?= $ul['id']; ?>">
                        <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php endforeach; ?>


<div class="modal fade tambahModal" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newSubMenuModalLabel">Tambah Berita Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url('berita/tambah') ?>">
                <div class="modal-body">

                    <div class="form-group">

                        <div class="col-xs-8">
                            <input name="judul" class="form-control" type="text" placeholder="Judul" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-8">
                            <input name="ringkasan" class="form-control" type="text" placeholder="Ringkasan" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-8">
                            <label for="message-text" class="col-form-label">Author</label>
                            <input name="author" class="form-control" type="text" value="<?= $user['name']; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Isi:</label>
                        <textarea class="form-control" id="textarea" name="isi"></textarea>
                    </div>

                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active" checked>
                            <label class="form-check-label" for="is_active">
                                Active?
                            </label>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <input type="hidden" name="id" value="<?= $ul['id']; ?>">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>