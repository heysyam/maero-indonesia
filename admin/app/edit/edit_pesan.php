
<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM tbl_komentar WHERE id='$id'"); 
$view = mysqli_fetch_array($query);
?>
<section class="content">
    <div class="container-fluid">
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Edit Data Pesan</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form method='post' action='update/update_pesan.php'>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" placeholder="Nama ..." name='nama' value="<?php echo $view['nama']; ?>">
                                <input type="hidden" name='id' value="<?php echo $view['id']; ?>"> <!-- Hidden input for id -->
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" placeholder="Email ..." name='email' value="<?php echo $view['email']; ?>">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Message</label>
                                <textarea class="form-control" placeholder="Message ..." name='isi'><?php echo $view['isi']; ?></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" class="form-control" placeholder="Phone ..." name='phone' value="<?php echo $view['phone']; ?>">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-sm btn-info">Simpan</button> <!-- Submit button -->
                </form>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</section>
