<div class="container-fluid">
    <?= $this->session->flashdata('pesan'); ?>
    <h1 class="h3 mb-4 text-gray-800"><?= $title_dalam ?></h1>
    <?php foreach ($edit_penyakit as $e) : ?>
        <form action="<?= base_url('gejala/update_penyakit') ?>" method="post" enctype="multipart/form-data">
            <div class="mb-3 col-5">
                <div class="form-group">
                    <label class="form-label">Jenis Penyakit</label>
                    <input type="text" name="jenis_penyakit" value="<?= $e->jenis_penyakit ?>" class="form-control" placeholder="Jenis Penyakit" required>
                    <input type="hidden" name="id" value="<?= $e->id_penyakit ?>">
                </div>
                <div class="form-group">
                    <a class="btn btn-sm btn-info" href="<?= base_url('gejala/list_penyakit') ?>">
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