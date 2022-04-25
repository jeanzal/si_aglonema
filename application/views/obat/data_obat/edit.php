<div class="container-fluid">
    <?= $this->session->flashdata('pesan'); ?>
    <h1 class="h3 mb-4 text-gray-800"><?= $title_dalam ?></h1>
    <?php foreach ($edit_obat as $e) : ?>
        <form action="<?= base_url('obat/update_obat') ?>" method="post" enctype="multipart/form-data">
            <div class="mb-3 col-5">
                <div class="form-group">
                    <label class="form-label">Jenis Obat</label>
                    <select name="id_jenis_obat" class="form-control">
                        <option value="<?= $e->id_jenis_obat ?>"><?= $e->jenis_obat ?></option>
                        <?php foreach ($data_jenis_obat as $a) : ?>
                            <option value="<?php echo $a->id_jenis_obat ?>"><?= $a->jenis_obat; ?> </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label">Kegunaan</label>
                    <textarea name="kegunaan" class="form-control" rows="3" placeholder="Kegunaan Obat" required><?= $e->kegunaan ?></textarea>
                    <input type="hidden" name="id" value="<?= $e->id_obat ?>">
                </div>
                <div class="form-group">
                    <a class="btn btn-sm btn-info" href="<?= base_url('obat/list_data_obat') ?>">
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