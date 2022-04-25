<div class="container-fluid">
    <?= $this->session->flashdata('pesan'); ?>
    <h1 class="h3 mb-4 text-gray-800"><?= $title_dalam ?></h1>
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row pl-3 mb-3 g-0">
            <div class="col-md-4">
                <img src="<?= base_url('assets/img/profile/') . $user['gambar']  ?>" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">
                        <?= $user['name'] ?>
                        <a href="<?= base_url('user/edit_profile/') . $user['id'] ?>"><small class="text-right fs-8">Edit</small></a>
                    </h5>
                    <p class="card-text"><?= $user['email'] ?></p>
                    <p class="card-text"><small class="text-muted">Member Since <i><?= date('d F Y', $user['date_created']); ?></i></small></p>
                </div>
            </div>
        </div>
    </div>
</div>