<div class="container mt-3">

  <div class="row">
    <div class="col-lg-6">
      <?php Flasher::flash() ?>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-6">
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary mb-2 tampilModalTambah" data-bs-toggle="modal" data-bs-target="#forModal">
        Tambah data mahasiswa
      </button>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-6">
      <form action="<?= BASEURL; ?>/mahasiswa/cari/" method="post">
        <div class="input-group mb-2">
          <input type="text" class="form-control" placeholder="Cari mahasiswa" name="keyword" id="keyword" autocomplete="off">
          <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
        </div>
      </form>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-6">

      <h3>Daftar Mahasiswa</h3>
      <ul class="list-group">
        <?php foreach ($data['mhs'] as $mhs) : ?>
          <li class="list-group-item">
            <?= $mhs['nama']; ?>
            <a href="<?= BASEURL; ?>/mahasiswa/hapus/ <?= $mhs['id']; ?>" class="mr-5 badge rounded-pill text-bg-danger float-end" onclick="return confirm('Apakah anda ingin menghapus?');">hapus</a>
            <a href="<?= BASEURL; ?>/mahasiswa/ubah/ <?= $mhs['id']; ?>" class="badge rounded-pill text-bg-success float-end tampilModalUbah" data-bs-toggle="modal" data-bs-target="#forModal" data-id="<?= $mhs['id']; ?>">ubah</a>
            <a href="<?= BASEURL; ?>/mahasiswa/detail/ <?= $mhs['id']; ?>" class="badge rounded-pill text-bg-primary float-end">detail</a>
          </li>
        <?php endforeach; ?>
    </div>
  </div>

</div>

<!-- Modal -->
<div class="modal fade" id="forModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah data mahasiswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
          <input type="hidden" name="id" id="id">
          <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
          </div>

          <div class="mb-3">
            <label for="nim" class="form-label">NIM</label>
            <input type="number" class="form-control" id="nim" name="nim">
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">e-Mail</label>
            <input type="email" class="form-control" id="email" name="email">
          </div>

          <div class="mb-3">
            <label for="jurusan" class="form-label">Jurusan</label>
            <select class="form-select" aria-label="Default select example" id="jurusan" name="jurusan">
              <option selected value="Sistem Informasi">Sistem Informasi</option>
              <option value="Teknik Industri">Teknik Industri</option>
              <option value="Administrasi Bisnis">Administrasi Bisnis</option>
              <option value="Teknik Kimia">Teknik Kimia</option>
            </select>
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