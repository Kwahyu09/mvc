<div class="container mt-4">
            <div class="card" style="width: 25rem;">
                <div class="card-body">
                    <h5 class="card-title">Detail Mahasiswa</h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $data['mhs']['nama']; ?></h6>
                    <p class="card-text"> Npm : <?=$data['mhs']['npm'];?></br>
                        Email : <?= $data['mhs']['email'];?></br>
                        Jurusan : <?= $data['mhs']['jurusan'];?></br>
                    </p>
                    <a href="<?= BASEURL; ?>/mahasiswa" class="card-link">Kembali</a>
                </div>
            </div>

</div>