<div class="container">

  <div class="row">
    <div class="col-6">
      <h3>Daftar Mahasiswa</h3>


      <ul>
        <?php foreach ($data['mhs'] as $mhs) : ?>
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-start">
              <?= $mhs['nama']; ?>
              <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?> " class="badge text-bg-dark"> detail</a>
            </li>
          <?php endforeach; ?>
          </ul>



    </div>
  </div>

</div>