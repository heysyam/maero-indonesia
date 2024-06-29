<?php
$id     = $_GET['id'];
$query  = mysqli_query($koneksi, "SELECT * FROM tbl_anggota WHERE id='$id'");
$view   = mysqli_fetch_array($query);
?>
<section class="content">
    <div class="container-fluid">
        <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Edit Data Anggota</h3>
              </div>
              <div class="card-body">
                <form method='post' action='update/update_data.php'>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" placeholder="nama ..." name='nama' value="<?php echo $view['nama'];?>">
                        <input type="hidden" class="form-control" name='id' value="<?php echo $view['id'];?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Jabatan</label>
                        <input type="text" class="form-control" placeholder="Jabatan ..." name='jabatan' value="<?php echo $view['jabatan'];?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Tahun bergabung</label>
                        <input type="text" class="form-control" placeholder="tahun bergabung ..." name='tahun_bergabung' value="<?php echo $view['tahun_bergabung'];?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Status</label>
                        <select class="custom-select" name='status_id'>
                            <option value="<?php echo $view['status_id'];?>" selected><?php echo $view['status_id'];?></option>
                            <option value="1">Aktif</option>
                            <option value="2">Tidak Aktif</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-sm btn-info">Simpan</button>
                </form>
              </div>
        </div>
    </div>
</section>
