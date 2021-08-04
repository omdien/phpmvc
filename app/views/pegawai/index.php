<div class="container mt-3">
    <div class="row">
        <div class="col-6">
            <h3>Daftar Pegawai</h3>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
                Tambah Data Pegawai
            </button>
            <br><br>
            <ul>
                <?php foreach($data['peg'] as $peg) : ?>
                    <li class = "list-group-item d-flex justify-content-between align-items-center"><?= $peg['nama']; ?> 
                        <a href="<?= BASEURL; ?>/pegawai/detail/<?= $peg['id'] ?>" class="badge bg-primary">detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah Data Pegawai</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL;?>/pegawai/tambah" method="post">
            <div class="form-group">
                <label for="nip_baru">NIP</label>
                <input type="text" class="form-control" id="nip" name="nip">
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="form-group">
                <label for="jabatan">Jabatan</label>
                <input type="text" class="form-control" id="jabatan"0 name="jabatan">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat">
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>