<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Daftar Anggota Maero</h3>
          </div>
          <div class="card-body">
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">
              Tambah Data
            </button>
            <br><br>
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Jabatan</th>
                  <th>Tahun Bergabung</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 0;
                $query = mysqli_query($koneksi, "SELECT * FROM tbl_anggota");
                while ($mhs = mysqli_fetch_array($query)) {
                  $no++;
                ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $mhs['nama']; ?></td>
                    <td><?php echo $mhs['jabatan']; ?></td>
                    <td><?php echo $mhs['tahun_bergabung']; ?></td>
                    <td><?php echo $mhs['status_id']; ?></td>
                    <td>
                      <a onclick="hapus_data(<?php echo $mhs['id']; ?>)" class="btn btn-sm btn-danger">HAPUS</a>
                      <a href="index.php?page=edit-data&id=<?php echo $mhs['id']; ?>" class="btn btn-sm btn-success">Edit</a>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Modal -->
<div class="modal fade" id="modal-lg">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Anggota</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="add/tambah_data.php">
        <div class="modal-body">
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
          </div>
          <div class="form-group">
            <label for="jabatan">Jabatan</label>
            <input type="text" class="form-control" id="jabatan" name="jabatan" required>
          </div>
          <div class="form-group">
            <label for="tahun_bergabung">Tahun Bergabung</label>
            <input type="text" class="form-control" id="tahun_bergabung" name="tahun_bergabung" required>
          </div>
          <div class="form-group">
            <label for="status">Status</label>
            <select class="custom-select" id="status_id" name="status_id" required>
              <option value="1">Aktif</option>
              <option value="2">Tidak Aktif</option>
            </select>
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
  function hapus_data(id) {
    Swal.fire({
      title: "Data Akan Dihapus?",
      showCancelButton: true,
      confirmButtonText: "Hapus Data",
      confirmButtonColor: 'red',
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = "delete/hapus_data.php?id=" + id;
      }
    });
  }
</script>
