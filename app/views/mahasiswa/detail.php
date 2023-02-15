<div class="container mt-4">
    <h3>Detail Mahasiswa</h3>
            <div class="card" style="width: 25rem;">
                <div class="card-body">
                    <h5 class="card-title"><?= $data['mhs']['nama']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $data['mhs']['npm']; ?></h6>
                    <p class="card-text">
                        Email : <?= $data['mhs']['email'];?></br>
                        Jurusan : <?= $data['mhs']['jurusan'];?></br>
                    </p>
                    <a href="<?= BASEURL; ?>/mahasiswa" class="card-link">Kembali</a>
                </div>
            </div>

</div>