<div class="container-fluid">
    <?= $this->session->flashdata('pesan'); ?>
    <h1 class="h3 mb-4 text-gray-800"><?= $title_dalam ?></h1>
    <form action="<?= base_url('obat/create_obat') ?>" method="post" enctype="multipart/form-data">
        <div class="mb-3 col-5">
            <div class="form-group">
                <label class="form-label">Jenis Obat</label>
                <select name="id_jenis_obat" class="form-control">
                    <option value="" disabled>--Pilih--</option>
                    <?php foreach ($data_jenis_obat as $a) : ?>
                        <option value="<?php echo $a->id_jenis_obat ?>"><?= $a->jenis_obat; ?> </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label class="form-label">Kegunaan</label>
                <textarea name="kegunaan" class="form-control" rows="3" placeholder="Kegunaan Obat" required></textarea>
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
</div>