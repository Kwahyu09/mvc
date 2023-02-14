<div class="container mt-4">
    <div class="row">
        <div class="col-6">
            <h3>Daftar Mahasiswa</h3>
                <?php foreach($data['mhs'] as $mah) : ?>
                    <ul>
                        <li><?= $mah['nama'] ?></li>
                        <li><?= $mah['npm'] ?></li>
                        <li><?= $mah['email'] ?></li>
                        <li><?= $mah['jurusan'] ?></li>
                    </ul>
                <?php endforeach ?>
        </div>
    </div>
</div>