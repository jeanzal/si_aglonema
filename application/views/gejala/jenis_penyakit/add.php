<div class="container-fluid">
    <?= $this->session->flashdata('pesan'); ?>
    <h1 class="h3 mb-4 text-gray-800"><?= $title_dalam ?></h1>
    <form action="<?= base_url('gejala/create_penyakit') ?>" method="post" enctype="multipart/form-data">
        <div class="mb-3 col-5">
            <div class="form-group">
                <label class="form-label">Jenis Penyakit</label>
                <input type="text" name="jenis_penyakit" class="form-control" placeholder="Jenis Penyakit" required>
            </div>
            <div class="form-group">
                <a class="btn btn-sm btn-info" href="<?= base_url('gejala/list_penyakit') ?>">
                    <li class="fas fa-fw fa-angle-left"></li> Kembali
                </a>
                <button type="submit" class="btn btn-sm btn-success">
                    <li class="fas fa-fw fa-save"></li> Simpan
                </button>
            </div>
        </div>
    </form>
</div>