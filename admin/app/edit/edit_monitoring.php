<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM tbl_agenda WHERE id='$id'");
$view = mysqli_fetch_array($query);
?>
<section class="content">
    <div class="container-fluid">
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Edit Data Monitoring</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form method='get' action='update/update_monitoring.php'>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" placeholder="nama ..." name='nama' value="<?php echo $view['nama']; ?>">
                                <input type="text" class="form-control" name='id' value="<?php echo $view['id']; ?>" hidden>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Tanggal</label>
                                <input type="text" class="form-control" placeholder="tanggal ..." name='tanggal' value="<?php echo $view['tanggal']; ?>">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <textarea class="form-control" placeholder="deskripsi ..." name='deskripsi'><?php echo $view['deskripsi']; ?></textarea>
                            </div>
                        </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Waktu</label>
                                <input type="text" class="form-control" placeholder="waktu ..." name='waktu' value="<?php echo $view['waktu']; ?>">
                            </div>
                        </div>
                        <div class="col-sm-6">
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Author</label>
                                <input type="text" class="form-control" placeholder="author ..." name='author' value="<?php echo $view['author']; ?>">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-sm btn-info">Simpan</button>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</section>
