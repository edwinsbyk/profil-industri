<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?= form_open_multipart('admin/listedituser'); ?>
    <?= $this->session->flashdata('message'); ?>
    <div class="row">
        <div class="col-lg">
            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#userBaru">Add New Menu</a>
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>
            <table class="table table-hover">

                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col" hidden>ID</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Active</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($userList as $ul) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td hidden><?= $ul['id']; ?></td>
                            <td><?= $ul['name']; ?></td>
                            <td><?= $ul['email']; ?></td>

                            <td><?php
                                if ($ul['role_id'] == 1) {
                                    $role = 'Admin';
                                } else {
                                    $role = 'Member';
                                }

                                echo $role; ?></td>
                            <td><?php

                                if ($ul['is_active'] == 1) {
                                    $active = 'Yes';
                                } else {
                                    $active = 'No';
                                }

                                echo $active; ?></td>
                            <td>
                                <a href="" class="badge badge-success" data-toggle="modal" data-target="#modal_edit<?= $ul['id']; ?>">Edit</a>
                                <a href="" class="badge badge-danger" data-toggle="modal" data-target="#modal_delete<?= $ul['id']; ?>">Hapus</a>
                                <a href="" class="badge badge-info" data-toggle="modal" data-target="#modal_changepassword<?= $ul['id']; ?>">Ubah password</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>


    <!-- ============ MODAL EDIT BARANG =============== -->
    <?php
    foreach ($userList as $ul) : ?>
        <div class="modal fade" id="modal_edit<?= $ul['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="newSubMenuModalLabel">Edit User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form class="form-horizontal" method="post" action="<?= base_url('admin/listedituser') ?>">
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Nama" value="<?= $ul['name'] ?>" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?= $ul['email'] ?>" readonly>
                            </div>
                            <div class="form-group">
                                <select name="role_id" id="role_id" class="form-control">
                                    <option value="" hidden><?php
                                                            if ($ul['role_id'] == 1) {
                                                                $role = "Admin";
                                                            } else {
                                                                $role = "Member";
                                                            }
                                                            echo $role; ?></option>
                                    <option value="Admin">Admin</option>
                                    <option value="Member">Member</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active" <?php

                                                                                                                                if ($ul['is_active'] == 1) {
                                                                                                                                    $active = 'checked';
                                                                                                                                } else {
                                                                                                                                    $active = '';
                                                                                                                                }

                                                                                                                                echo $active; ?>>
                                    <label class="form-check-label" for="is_active">
                                        Active?
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                            <button type="submit" class="btn btn-info">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    <?php endforeach; ?>
    <!--END MODAL ADD BARANG-->

    <!-- ============ MODAL delete BARANG =============== -->
    <?php
    foreach ($userList as $ul) : ?>
        <div class="modal fade" id="modal_delete<?= $ul['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="newSubMenuModalLabel">Delete</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form class="form-horizontal" method="post" action="<?= base_url('admin/listDeleteUser') ?>">


                        <div class="modal-body">
                            <div style="text-align:center">

                                <h5 text-align="center"> Apakah anda yakin menghapus user <?= $ul['email'] ?> ?</h5>
                                <hr>
                                <input type="hidden" name="id" value="<?= $ul['id']; ?>">
                                <button type="submit" class="btn btn-danger  btn-sm btn-block">Delete</button>
                                <button data-dismiss="modal" class="btn btn-info btn-sm btn-block">Cancel</button>

                            </div>
                        </div>
                </div>
            </div>


            </form>
        </div>
    </div>
    </div>
<?php endforeach; ?>

<div class="modal fade" id="userBaru" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newSubMenuModalLabel">Add User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url('admin/tambah_user') ?>">
                <div class="modal-body">

                    <div class="form-group">

                        <div class="col-xs-8">
                            <input name="name" class="form-control" type="text" placeholder="Nama Lengkap" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-8">
                            <input name="email" class="form-control" type="text" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-8">
                            <input name="password" class="form-control" type="password" placeholder="Password" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <select name="role_id" id="role_id" class="form-control">
                            <option value="" selected disabled>Role</option>
                            <option value="Admin">Admin</option>
                            <option value="Member">Member</option>
                        </select>
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
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--END MODAL ADD BARANG-->


<!-- ============ MODAL EDIT BARANG =============== -->
<?php
foreach ($userList as $ul) : ?>
    <div class="modal fade" id="modal_changepassword<?= $ul['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newSubMenuModalLabel">Ubah Password User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form-horizontal" method="post" action="<?= base_url('admin/userchangepassword') ?>">
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" class="form-control" id="password1" name="password1" placeholder="Password Baru" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="password2" name="password2" placeholder="Ulangi Password Baru" required>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <input type="hidden" name="id" value="<?= $ul['id']; ?>">
                        <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                        <button type="submit" class="btn btn-info">Ubah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php endforeach; ?>
<!--END MODAL ADD BARANG-->







</div>


</div>
<!-- End of Main Content -->