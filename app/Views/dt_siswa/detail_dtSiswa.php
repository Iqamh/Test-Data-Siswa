<?= $this->extend('layouts/base_pages'); ?>

<?= $this->section('content'); ?>
<div class="container mt-4">
  <div class="row">

    <div class="col-md-4 text-center">
      <img src="<?= base_url('assets/img/' . $siswa['foto']) ?>" class="img-thumbnail mb-3" width="150" alt="Foto Siswa">
      <p><strong>NIM:</strong> <?= $siswa['nim'] ?></p>
      <a href="<?= base_url('/detailSiswa/edit/' . $siswa['id']) ?>" class="btn btn-primary">Edit</a>
    </div>


    <div class="col-md-8">
      <h3>Detail Siswa</h3>
      <p><strong>Nama:</strong> <?= $siswa['nama'] ?></p>
      <p><strong>No. Telp:</strong> <?= $siswa['notelp'] ?></p>
      <p><strong>Jenis Kelamin:</strong> <?= $siswa['jenis_kelamin'] ?></p>
      <p><strong>Tempat, Tanggal Lahir:</strong> <?= $siswa['tempat_lahir'] ?>, <?= $siswa['tanggal_lahir'] ?></p>
      <p><strong>Alamat:</strong> <?= $siswa['alamat'] ?></p>
      <p><strong>Tanggal Bergabung:</strong> <?= $siswa['join_date'] ?></p>
      <a href="<?= base_url('/') ?>" class="btn btn-secondary mt-3">Kembali</a>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>
