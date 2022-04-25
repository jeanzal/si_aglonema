<div class="container-fluid">
    <?= $this->session->flashdata('pesan'); ?>
    <h1 class="h3 mb-4 text-gray-800"><?= $title_dalam ?></h1>
    <form action="<?= base_url('user/update_profile') ?>" method="post" enctype="multipart/form-data">
        <div class="mb-3 col-5">
            <div class="form-group">
                <label class="form-label">Nama</label>
                <input type="text" name="name" value="<?= $user['name'] ?>" id="name" class="form-control" placeholder="Nama User" value="<?= set_value('name'); ?>">
                <?= form_error('name', '<small class="text-danger pl-3">', '</small>') ?>
                <input type="hidden" name="id" value="<?= $user['id'] ?>">
            </div>
            <div class="form-group">
                <label class="form-label">Email</label>
                <input type="email" name="email" value="<?= $user['email'] ?>" id="email" class="form-control" placeholder="Email" value="<?= set_value('email'); ?>" readonly>
                <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
            </div>
            <div class=" form-group">
                <a class="btn btn-sm btn-info" href="<?= base_url('user') ?>">
                    <li class="fas fa-fw fa-angle-left"></li> Kembali
                </a>
                <button type="submit" class="btn btn-sm btn-warning">
                    <li class="fas fa-fw fa-save"></li> Edit
                </button>
            </div>
        </div>
    </form>
</div>