<div class="container mt-5">
    <div class="col-6">
        <div class="row">
            <div class="col-6">
                <h3>Daftar Pegawai</h3>
                <?php foreach($data['peg'] as $peg) : ?>
                    <ul>
                        <li><?= $peg['nip_baru']; ?></li>
                        <li><?= $peg['nama']; ?></li>
                        <li><?= $peg['alamat']; ?></li>
                        <li><?= $peg['tplhr']; ?></li>
                    </ul>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>