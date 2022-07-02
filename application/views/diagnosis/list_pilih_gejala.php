<div class="container-fluid">
    <?= $this->session->flashdata('pesan'); ?>
    <h1 class="h3 mb-4 text-gray-800"><?= $title_dalam ?></h1>
    <form action="<?= base_url('') ?>" method="post" enctype="multipart/form-data">
        <?php foreach ($data_tanaman as $e) : ?>
            Tanaman Yang Dipilih : <b><?= $e->jenis_aglonema ?></b>
            <input type="hidden" name="pilihan_tanaman" value="$e->jenis_aglonema">
        <?php endforeach ?>
        <div class="mb-3 col-5 mt-4">
            <label for="">Pilih Gejala</label>
            <div class="input-group mb-3">
                <select name="pilihan_g1" class="form-control">
                    <option value="" disabled>--Pilih--</option>
                    <?php foreach ($data_gejala as $a) : ?>
                        <option value="<?php echo $a->id_gejala ?>"><?= $a->karakteristik_gejala; ?> </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="input-group mb-3">
                <select name="pilihan_g2" class="form-control">
                    <option value="" disabled>--Pilih--</option>
                    <?php foreach ($data_gejala as $a) : ?>
                        <option value="<?php echo $a->id_gejala ?>"><?= $a->karakteristik_gejala; ?> </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="input-group mb-3">
                <select name="pilihan_g3" class="form-control">
                    <option value="" disabled>--Pilih--</option>
                    <?php foreach ($data_gejala as $a) : ?>
                        <option value="<?php echo $a->id_gejala ?>"><?= $a->karakteristik_gejala; ?> </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="input-group mb-3">
                <select name="pilihan_g4" class="form-control">
                    <option value="" disabled>--Pilih--</option>
                    <?php foreach ($data_gejala as $a) : ?>
                        <option value="<?php echo $a->id_gejala ?>"><?= $a->karakteristik_gejala; ?> </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="input-group mb-3">
                <select name="pilihan_g5" class="form-control">
                    <option value="" disabled>--Pilih--</option>
                    <?php foreach ($data_gejala as $a) : ?>
                        <option value="<?php echo $a->id_gejala ?>"><?= $a->karakteristik_gejala; ?> </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <a class="btn btn-sm btn-info" href="<?= base_url('diagnosis/list') ?>">
                    <li class="fas fa-fw fa-angle-left"></li> Kembali
                </a>
                <button class="btn btn-sm btn-success" type="submit">Proses</button>
            </div>
        </div>
    </form>

</div>