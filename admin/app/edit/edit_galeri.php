<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM tbl_galeri WHERE id='$id'");
$view = mysqli_fetch_array($query);
?>
<section class="content">
    <div class="container-fluid">
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Edit Galeri</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form method='get' action='update/update_galeri.php'>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Judul</label>
                                <input type="text" class="form-control" placeholder="Judul ..." name='judul' value="<?php echo $view['judul']; ?>">
                                <input type="text" class="form-control" name='id' value="<?php echo $view['id']; ?>" hidden>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Tanggal</label>
                                <input type="text" class="form-control" placeholder="Tanggal ..." name='tanggal' value="<?php echo $view['tanggal']; ?>">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Gambar</label>
                                <input type="text" class="form-control" placeholder="Gambar ..." name='gambar' value="<?php echo $view['gambar']; ?>">
                            </div>
                        </div>
                        <div class="col-sm-6">
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Author</label>
                                <input type="text" class="form-control" placeholder="Author ..." name='author' value="<?php echo $view['author']; ?>">
                            </div>
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
