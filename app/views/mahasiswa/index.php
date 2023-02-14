<div class="container mt-4">
    <div class="row">
        <div class="col-6">
            <h3>Daftar Mahasiswa</h3>
            <ul class="list-group">
                <?php foreach($data['mhs'] as $mah) : ?>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <?= $mah['nama']; ?>
                        <a href="<?=BASEURL;?>/mahasiswa/detail/<?= $mah['id'];?>" class="badge text-bg-primary text-decoration-none">Detail</a>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</div>