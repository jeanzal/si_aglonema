<div class="container-fluid">
    <?= $this->session->flashdata('pesan'); ?>
    <h1 class="h3 mb-4 text-gray-800"><?= $title_dalam ?></h1>
    <form action="<?= base_url('gejala/create_gejala') ?>" method="post" enctype="multipart/form-data">
        <div class="mb-3 col-5">
            <div class="form-group">
                <label class="form-label">Jenis Penyakit</label>
                <select name="id_penyakit" class="form-control">
                    <option value="" disabled>--Pilih--</option>
                    <?php foreach ($data_penyakit as $a) : ?>
                        <option value="<?php echo $a->id_penyakit ?>"><?= $a->jenis_penyakit; ?> </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label class="form-label">Obat</label>
                <select name="id_obat" class="form-control">
                    <option value="" disabled>--Pilih--</option>
                    <?php foreach ($data_obat as $b) : ?>
                        <option value="<?php echo $b->id_obat ?>"><?= $b->jenis_obat; ?> </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label class="form-label">Karakteristik Gejala</label>
                <textarea name="karakteristik_gejala" class="form-control" rows="3" required placeholder="Karakteristik Gejala"></textarea>
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
</div>