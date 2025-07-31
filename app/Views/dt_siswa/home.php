<?= $this->extend('layouts/base_pages'); ?>

<?= $this->section('content'); ?>
<div class="container">
  <div class="row">
    <div class="col">
      <h1 class="mt-2">Daftar Siswa</h1>
      <a href="<?= base_url('/create') ?>" class="btn btn-success mb-3">+ Tambah Siswa</a>

      <table class="table table-bordered ">
        <thead class="table-light">
          <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nama</th>
            <th>Nomor</th>
            <th>Jenis Kelamin</th>
            <th>Tempat dan Tanggal Lahir</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
            if (empty($siswa)): ?>
            <tr>
              <td>
                Tidak ada Data
              </td>
            </tr>
          <?php else: ?>
          <?php $i = 1 ?>
          <?php foreach ($siswa as $s): ?>
            <tr>
              <th><?= $i++ ?></th>
              <td><img src="<?= base_url('assets/img/' . $s['foto']) ?>" alt="foto" width="50"></td>
              <td>
                <a href="<?= base_url('/detailSiswa/' . $s['id']) ?>" class="siswa-link">
                  <?= $s['nama'] ?>
                </a>
              </td>
              <td><?= $s['notelp'] ?></td>
              <td><?= $s['jenis_kelamin'] ?></td>
              <td><?= $s['tempat_lahir'] ?>, <?= $s['tanggal_lahir'] ?></td>
              <td>
                <a href="<?= base_url('delete/' . $s['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus siswa ini?')">Delete</a>
              </td>
            </tr>
          <?php endforeach ?>
          <?php endif ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>
