<div class="container-fluid">
    <?= $this->session->flashdata('pesan'); ?>
    <h1 class="h3 mb-4 text-gray-800"><?= $title_dalam ?></h1>
    <form action="<?= base_url('obat/create_obat') ?>" method="post" enctype="multipart/form-data">
        <div class="mb-3 col-5">
            <div class="form-group">
                <label class="form-label">Jenis Obat</label>
                <input type="text" name="jenis_obat" class="form-control" placeholder="Jenis Obat" required>
            </div>
            <div class="form-group">
                <label class="form-label">Kegunaan</label>
                <select name="kegunaan" class="form-control">
                    <option value="" disabled>--Pilih--</option>
                    <option value="jamur">Untuk Jamur</option>
                    <option value="hama">Untuk Hama</option>
                </select>
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