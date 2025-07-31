<?= $this->extend('layouts/base_pages'); ?>
<?= $this->section('content'); ?>
<div class="container">
  <div class="row">
    <div class="col">
      <h2 class="mt-3">Edit Siswa</h2>
      <div class="col-md-8 offset-md-2">
        <form
          action="<?= base_url('/detailSiswa/update/' . $siswa['id']) ?>"
          method="post"
          enctype="multipart/form-data">

          <?= csrf_field() ?>

          <!-- Nama -->
          <div class="row mb-3 align-items-center">
            <label for="nama" class="col-sm-3 col-form-label">Nama</label>
            <div class="col-sm-9">
              <input type="text" name="nama" id="nama" class="form-control" placeholder="<?= esc($siswa['nama']) ?>">
            </div>
          </div>

          <!-- NIM -->
          <div class="row mb-3 align-items-center">
            <label for="nim" class="col-sm-3 col-form-label">NIM</label>
            <div class="col-sm-9">
              <input type="text" name="nim" id="nim" class="form-control" placeholder="<?= esc($siswa['nim']) ?>">
            </div>
          </div>

          <!-- No. Telp -->
          <div class="row mb-3 align-items-center">
            <label for="notelp" class="col-sm-3 col-form-label">No. Telp</label>
            <div class="col-sm-9">
              <input type="text" name="notelp" id="notelp" class="form-control" placeholder="<?= esc($siswa['notelp']) ?>">
            </div>
          </div>

          <!-- Jenis Kelamin -->
          <div class="row mb-3 align-items-center">
            <label for="jenis_kelamin" class="col-sm-3 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-9">
              <select name="jenis_kelamin" id="jenis_kelamin" class="form-select">
                <option value="">-- Pilih --</option>
                <option value="Laki-laki" <?= ($siswa['jenis_kelamin'] == 'Laki-laki') ? 'selected' : '' ?>>Laki-laki</option>
                <option value="Perempuan" <?= ($siswa['jenis_kelamin'] == 'Perempuan') ? 'selected' : '' ?>>Perempuan</option>
              </select>
            </div>
          </div>

          <!-- Tempat Lahir -->
          <div class="row mb-3 align-items-center">
            <label for="tempat_lahir" class="col-sm-3 col-form-label">Tempat Lahir</label>
            <div class="col-sm-9">
              <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" placeholder="<?= esc($siswa['tempat_lahir']) ?>">
            </div>
          </div>

          <!-- Tanggal Lahir -->
          <div class="row mb-3 align-items-center">
            <label for="tanggal_lahir" class="col-sm-3 col-form-label">Tanggal Lahir</label>
            <div class="col-sm-9">
              <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" value="<?= $siswa['tanggal_lahir'] ?>">
            </div>
          </div>

          <!-- Alamat -->
          <div class="row mb-3 align-items-start">
            <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
            <div class="col-sm-9">
              <textarea name="alamat" id="alamat" class="form-control" style="resize: none;" rows="3" placeholder="<?= esc($siswa['alamat']) ?>"></textarea>
            </div>
          </div>

          <!-- Foto -->
          <div class="row mb-3 align-items-center">
            <label for="foto" class="col-sm-3 col-form-label">Foto</label>
            <div class="col-sm-9">
              <input type="file" name="foto" id="foto" class="form-control">
              <small class="text-muted">Biarkan kosong jika tidak ingin mengubah foto</small>
            </div>
          </div>

          <div class="row">
            <div class="offset-sm-3 col-sm-9">
              <button type="submit" class="btn btn-success">Simpan Perubahan</button>
              <a href="<?= base_url('/detailSiswa/' . $siswa['id']) ?>" class="btn btn-secondary">Batal</a>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>
