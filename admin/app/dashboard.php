<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>pesan</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- SweetAlert2 CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.7/dist/sweetalert2.min.css">
</head>
<body>
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- /.card -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Pesan</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <!-- <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">Tambah Data</button> -->
              <br><br>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Telpon</th>
                    <th>Pesan</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $no = 0;
                    $query = mysqli_query($koneksi, "SELECT * FROM tbl_komentar");
                    while ($mhs = mysqli_fetch_array($query)) {
                      $no++;
                  ?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $mhs['nama']; ?></td>
                    <td><?php echo $mhs['email']; ?></td>
                    <td><?php echo $mhs['phone']; ?></td>
                    <td><?php echo $mhs['isi']; ?></td>
                    <td>
                      <a onclick="hapus_data(<?php echo $mhs['id']; ?>)" class="btn btn-sm btn-danger">HAPUS</a>
                      <!-- <a href="index.php?page=edit-monitoring&&id=<?php echo $mhs['id']; ?>" class="btn btn-sm btn-success">Edit</a> -->
                    </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- <div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Tambah Agenda</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="get" action="add/tambah_monitoring.php">
          <div class="modal-body">
            <div class="form-row">
              <div class="col">
                <input type="text" class="form-control" placeholder="Nama" name="nama" required>
              </div>
              <div class="col">
                <input type="text" class="form-control" placeholder="Tanggal" name="tanggal" required>
              </div>
            </div>
            <br>
            <div class="col">
              <input type="textarea" class="form-control" placeholder="Deskripsi" name="deskripsi" required>
            </div>
            <br>
            <div class="form-row">
              <div class="col">
                <input type="text" class="form-control" placeholder="Mulai" name="mulai" required>
              </div>
              <div class="col">
                <input type="text" class="form-control" placeholder="Selesai" name="selesai" required>
              </div>
            </div>
            <br>
            <div class="form-row">
              <div class="col">
                <input type="text" class="form-control" placeholder="Tempat" name="tempat" required>
              </div>
              <div class="col">
                <input type="text" class="form-control" placeholder="Waktu" name="waktu" required>
              </div>
            </div>
            <br>
            <div class="form-row">
              <div class="col">
                <input type="text" class="form-control" placeholder="Keterangan" name="keterangan" required>
              </div>
              <div class="col">
                <input type="text" class="form-control" placeholder="Author" name="author" required>
              </div>
            </div> -->
          <!-- </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div> -->
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
  <!-- SweetAlert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.7/dist/sweetalert2.all.min.js"></script>
  <script>
    function hapus_data(data_id) {
      Swal.fire({
        title: "Data Akan Dihapus?",
        showCancelButton: true,
        confirmButtonText: "Hapus Data",
        confirmButtonColor: 'red',
      }).then((result) => {
        if (result.isConfirmed) {
          window.location = ("delete/hapus_pesan.php?id=" + data_id);
        }
      });
    }
  </script>
</body>
</html>
