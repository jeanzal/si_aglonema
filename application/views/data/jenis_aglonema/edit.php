<div class="container-fluid">
    <?= $this->session->flashdata('pesan'); ?>
    <h1 class="h3 mb-4 text-gray-800"><?= $title_dalam ?></h1>
    <?php foreach ($edit_jenis as $e) : ?>
        <form action="<?= base_url('data/update_jenis') ?>" method="post" enctype="multipart/form-data">
            <div class="mb-3 col-5">
                <div class="form-group">
                    <label class="form-label">Jenis Aglonema</label>
                    <input type="text" name="jenis_aglonema" value="<?= $e->jenis_aglonema ?>" class="form-control" placeholder="Jenis Aglonema" required>
                    <input type="hidden" name="id" value="<?= $e->id_jenis ?>">
                </div>
                <div class="form-group">
                    <a class="btn btn-sm btn-info" href="<?= base_url('data/list_jenis') ?>">
                        <li class="fas fa-fw fa-angle-left"></li> Kembali
                    </a>
                    <button type="submit" class="btn btn-sm btn-warning">
                        <li class="fas fa-fw fa-save"></li> Edit
                    </button>
                </div>
            </div>
        </form>
    <?php endforeach ?>
</div>