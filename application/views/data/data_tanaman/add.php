<div class="container-fluid">
    <?= $this->session->flashdata('pesan'); ?>
    <h1 class="h3 mb-4 text-gray-800"><?= $title_dalam ?></h1>
    <form action="<?= base_url('data/create_tanaman') ?>" method="post" enctype="multipart/form-data">
        <div class="mb-3 col-5">
            <div class="form-group">
                <label class="form-label">Jenis Aglonema</label>
                <select name="id_jenis" class="form-control">
                    <option value="" disabled>--Pilih--</option>
                    <?php foreach ($data_jenis as $a) : ?>
                        <option value="<?php echo $a->id_jenis ?>"><?= $a->jenis_aglonema; ?> </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label class="form-label">Ciri Khas</label>
                <textarea name="ciri_khas" class="form-control" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <a class="btn btn-sm btn-info" href="<?= base_url('data/list_tanaman') ?>">
                    <li class="fas fa-fw fa-angle-left"></li> Kembali
                </a>
                <button type="submit" class="btn btn-sm btn-success">
                    <li class="fas fa-fw fa-save"></li> Simpan
                </button>
            </div>
        </div>
    </form>
</div>