<div class="container mt-5">
    <div class="col-6">
        <div class="row">
            <div class="col-6">
                <h3>Daftar Pegawai</h3>
                <ul class="list-group">
                    <?php foreach($data['peg'] as $peg) : ?>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <?= $peg['nama'];?>
                            <a href="<?= BASEURL; ?>/pegawai/detail/<?= $peg['nip_baru'];?>" class="badge bg-primary">detail</a>
                        </li>
                    <?php endforeach; ?>
                </ul>
                   
            </div>
        </div>
    </div>
</div>