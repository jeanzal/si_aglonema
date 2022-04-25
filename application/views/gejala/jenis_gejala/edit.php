<div class="container-fluid">
    <?= $this->session->flashdata('pesan'); ?>
    <h1 class="h3 mb-4 text-gray-800"><?= $title_dalam ?></h1>
    <?php foreach ($edit_gejala as $e) : ?>
        <form action="<?= base_url('gejala/update_gejala') ?>" method="post" enctype="multipart/form-data">
            <div class="mb-3 col-5">
                <div class="form-group">
                    <label class="form-label">Jenis Aglonema</label>
                    <select name="id_penyakit" class="form-control">
                        <option value="<?= $e->id_penyakit ?>"><?= $e->jenis_penyakit ?></option>
                        <?php foreach ($data_penyakit as $a) : ?>
                            <option value="<?php echo $a->id_penyakit ?>"><?= $a->jenis_penyakit; ?> </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label">Karakteristik Gejala</label>
                    <textarea name="karakteristik_gejala" class="form-control" rows="3" required><?= $e->karakteristik_gejala ?></textarea>
                    <input type="hidden" name="id" value="<?= $e->id_gejala ?>">
                </div>
                <div class="form-group">
                    <a class="btn btn-sm btn-info" href="<?= base_url('gejala/list_gejala') ?>">
                        <li class="fas fa-fw fa-angle-left"></li> Kembali
                    </a>
                    <button type="submit" class="btn btn-sm btn-success">
                        <li class="fas fa-fw fa-save"></li> Simpan
                    </button>
                </div>
            </div>
        </form>
    <?php endforeach ?>
</div>