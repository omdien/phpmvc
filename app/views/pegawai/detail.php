<div class = "container mt-5">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['peg']['nama']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $data['peg']['nip']; ?></h6>
            <p class="card-text"><?= $data['peg']['jabatan']; ?></p>
            <p class="card-text"><?= $data['peg']['alamat']; ?></p>
            <a href="<?= BASEURL ?>/pegawai" class="card-link">Kembali</a>
        </div>
    </div>
</div>