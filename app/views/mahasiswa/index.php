<div class="container mt-3">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
            Tambah Data Mahasiswa
            </button>
                </br>
                </br>
            <h3>Daftar Mahasiswa</h3>
            <ul class="list-group">
                <?php foreach($data['mhs'] as $mah) : ?>
                    <li class="list-group-item">
                        <?= $mah['nama']; ?>
                        <div class="float-end">
                            <a href="<?=BASEURL;?>/mahasiswa/detail/<?= $mah['id'];?>" class="badge text-bg-primary text-decoration-none">Detail</a>
                            <a href="<?=BASEURL;?>/mahasiswa/hapus/<?= $mah['id'];?>" class="badge text-bg-danger text-decoration-none" onclick="return confirm('Yakin Dihapus')">Hapus</a>
                        </div>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="judulModal">Tambah Data Mahasiswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="mb-3">
                <label for="npm" class="form-label">Npm</label>
                <input type="text" class="form-control" id="npm" name="npm">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan</label>
                <select id="jurusan" name="jurusan" class="form-select">
                    <option value="Informatika">Informatika</option>
                    <option value="Teknik Sipil">Tekni Sipil</option>
                    <option value="Teknik Mesin">Teknik Mesin</option>
                    <option value="Teknik Elektro">Teknik Elektro</option>
                    <option value="Arsitektur">Arsitektur</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
      </div>
        </form>
    </div>
  </div>
</div>