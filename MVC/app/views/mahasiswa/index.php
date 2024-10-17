<div class="container">

  <div class="row">
    <div class="col-lg-6">
      <?php Flasher::flash() ?>
    </div>
  </div>


  <div class="row">
    <div class="col-lg-6">
      <button type="button" class="btn btn-dark mb-5 mt-5 tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
        Tambah Mahasiswa
      </button>
      <br>

      <h3>Daftar Mahasiswa</h3>


      <ul>
        <?php foreach ($data['mhs'] as $mhs) : ?>
          <ul class="list-group">
            <li class="list-group-item ">
              <?= $mhs['nama']; ?>
              <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?> " class="badge text-bg-danger float-end" onclick="return confirm('yakin?')"> hapus</a>
              <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?> " class="badge text-bg-warning float-end tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mhs['id'] ?>"> ubah</a>
              <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?> " class="badge text-bg-dark float-end"> detail</a>
            </li>
          <?php endforeach; ?>
          </ul>



    </div>
  </div>

</div>


<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="formModalLabel">Tambah data mahasiswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
          <input type="hidden" name="id" id="id">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="masukan nama..">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nrp</label>
            <input type="number" class="form-control" id="nrp" name="nrp" placeholder="masukan nrp..">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="masukan email..">
          </div>

          <div class="form-group">
            <label class="form-control" id="jurusan" name="jurusan">Jurusan</label>
            <select type="text" class="form-control" id="jurusan" name="jurusan">
              <option value="Teknik Informatika"> teknik informatika</option>
              <option value="Teknik Mesin"> teknik mesin</option>
              <option value="Teknik "> teknik lingkungan</option>
              <option value="Teknik "> teknik industri</option>
              <option value="Teknik "> teknik planologi</option>
              <option value="Teknik "> teknik pangan</option>
            </select>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Tambah data</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>