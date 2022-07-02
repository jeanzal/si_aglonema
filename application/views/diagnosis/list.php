<div class="container-fluid">
    <?= $this->session->flashdata('pesan'); ?>
    <h1 class="h3 mb-4 text-gray-800"><?= $title_dalam ?></h1>
    <form action="<?= base_url('diagnosis/list_pilih_gejala') ?>" method="post" enctype="multipart/form-data">
        <div class="d-flex justify-content-center">
            <div class="mb-3 col-5 mt-4 text-center">
                <label for="">Pilih Data Tanaman</label>
                <div class="input-group mb-3">
                    <select name="pilihan" class="form-control">
                        <option value="" disabled>--Pilih--</option>
                        <?php foreach ($data_tanaman as $a) : ?>
                            <option value="<?php echo $a->id_tanaman ?>"><?= $a->jenis_aglonema; ?> </option>
                        <?php endforeach; ?>
                    </select>
                    <button class="btn btn-sm btn-success" type="submit" id="button-addon2">Proses</button>
                </div>
            </div>
        </div>
    </form>
</div>