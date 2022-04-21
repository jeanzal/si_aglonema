<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title_dalam ?></h1>
    <a href="" class="btn btn-sm btn-primary mb-2"><li class="fas fa-plus"></li> Tambah Data</a>
    <table class="table table-striped table-hover">
        <tr>
            <th>No</th>
            <th>Jenis Aglonema</th>
            <th>Action</th>
        </tr>
        <?php
            $no = 1;
            if ($data_jenis) :
                foreach ($data_jenis as $a) :
                    ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $a['jenis_aglonema']; ?></td>
                        <td>
                            <a href="" class="btn btn-sm btn-info" ><li class="fas fa-edit"></li> </a>
                            <a href="" class="btn btn-sm btn-danger"><li class="fas fa-trash-alt"></li> </a>
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