<?php
$sub_menu3 = strtolower($this->uri->segment(3));
$user = $query;  ?>
<!-- Main content -->
<div class="content-wrapper">
  <!-- Content area -->
  <div class="content">

    <!-- Dashboard content -->
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <div class="panel panel-flat">

            <div class="panel-body">

              <fieldset class="content-group">
                <legend class="text-bold"><i class="icon-office"></i> Edit Industri <?php echo ucwords($user->nama_industri); ?></legend>
                <?php
                echo $this->session->flashdata('msg');?>
                  <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label class="control-label col-lg-3">Nama Industri</label>
                      <div class="col-lg-9">
                        <input type="text" name="nama_industri" class="form-control" value="<?php echo $user->nama_industri; ?>" placeholder="Nama Industri" maxlength="50" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-lg-3">Bidang Kerja</label>
                      <div class="col-lg-9">
                        <input type="text" name="bidang_kerja" class="form-control" value="<?php echo $user->bidang_kerja; ?>" placeholder="Bidang Kerja" maxlength="50" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-lg-3">Deskripsi</label>
                      <div class="col-lg-9">
                        <textarea name="deskripsi" rows="4" cols="80" class="form-control" placeholder="Deskripsi" required><?php echo $user->deskripsi; ?></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-lg-3">ALamat Industri</label>
                      <div class="col-lg-9">
                        <textarea name="alamat_industri" rows="4" cols="80" class="form-control" placeholder="ALamat Industri" required><?php echo $user->alamat_industri; ?></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-lg-3">Wilayah</label>
                      <div class="col-lg-9">
                        <input type="text" name="wilayah" class="form-control" value="<?php echo $user->wilayah; ?>" placeholder="Wilayah" maxlength="50" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-lg-3">Telepon</label>
                      <div class="col-lg-9">
                        <input type="number" name="telepon" class="form-control" value="<?php echo $user->telepon; ?>" placeholder="Telepon" maxlength="20" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-lg-3">Website</label>
                      <div class="col-lg-9">
                        <input type="text" name="website" class="form-control" value="<?php echo $user->website; ?>" placeholder="Website" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-lg-3">Email</label>
                      <div class="col-lg-9">
                        <input type="email" name="email" class="form-control" value="<?php echo $user->email; ?>" placeholder="Email" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-lg-3">Syarat</label>
                      <div class="col-lg-9">
                        <textarea name="syarat" rows="4" cols="80" class="form-control" placeholder="Syarat" required><?php echo $user->syarat; ?></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-lg-3">Kuota</label>
                      <div class="col-lg-9">
                        <input type="number" name="kuota" class="form-control" value="<?php echo $user->kuota; ?>" placeholder="Kuota" maxlength="20" required>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-lg-3">Foto</label>
                      <div class="col-lg-9">
                        <input type="file" name="file" class="form-control" value="" placeholder="Foto">
                        <b style="color:red;font-size:10px;">*Max Size: 5 MB</b>
                      </div>
                    </div>

                    <a href="javascript:history.back()" class="btn btn-default"><< Kembali</a>
                    <button type="submit" name="btnupdate" class="btn btn-primary" style="float:right;">Simpan</button>
                  </form>
              </fieldset>


            </div>

        </div>
      </div>
    </div>
    <!-- /dashboard content -->
