<div class="container-fluid">
    <?= $this->session->flashdata('pesan'); ?>
    <h1 class="h3 mb-4 text-gray-800"><?= $title_dalam ?></h1>
    <a href="<?= base_url('data/add_tanaman') ?>" class="btn btn-sm btn-primary mb-2"><li class="fas fa-plus"></li> Tambah Data</a>
    <table class="table table-striped table-hover">
        <tr>
            <th>No</th>
            <th>Jenis Aglonema</th>
            <th>Ciri Khas</th>
            <th>Action</th>
        </tr>
        <?php
            $no = 1;
            if ($data_tanaman) :
                foreach ($data_tanaman as $a) :
                    ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $a->jenis_aglonema ?></td>
                        <td><?= $a->ciri_khas ?></td>
                        <td>
                            <a href="<?= base_url('data/edit_tanaman/' . $a->id_tanaman) ?>" class="btn btn-sm btn-info" ><li class="fas fa-edit"></li> </a>
                            <a onclick="return confirm('Apakah yakin hapus data ini ?')" href="<?= base_url('data/hapus_tanaman/' . $a->id_tanaman) ?>" class="btn btn-sm btn-danger"><li class="fas fa-trash-alt"></li> </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td class="text-center" colspan="3">Tidak Ada data !</td>
                </tr>
            <?php endif; ?>
    </table>
</div>