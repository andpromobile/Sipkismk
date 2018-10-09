<?php
$sub_menu3 = strtolower($this->uri->segment(3)); ?>
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
                <legend class="text-bold"><i class="icon-office"></i> Tambah Industri <?php if ($sub_menu3 == 't') {echo "Industri";}else{echo "Pembimbing Industri";} ?></legend>
                <?php
                echo $this->session->flashdata('msg');

                if ($sub_menu3 == 't') {?>
                  <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label class="control-label col-lg-3">Nama Industri</label>
                      <div class="col-lg-9">
                        <input type="text" name="nama_industri" class="form-control" value="" placeholder="Nama Industri" maxlength="50" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-lg-3">Bidang Kerja</label>
                      <div class="col-lg-9">
                        <input type="text" name="bidang_kerja" class="form-control" value="" placeholder="Bidang Kerja" maxlength="50" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-lg-3">Deskripsi</label>
                      <div class="col-lg-9">
                        <textarea name="deskripsi" rows="4" cols="80" class="form-control" placeholder="Deskripsi" required></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-lg-3">Alamat Industri</label>
                      <div class="col-lg-9">
                        <textarea name="alamat_industri" rows="4" cols="80" class="form-control" placeholder="Alamat Industri" required></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-lg-3">Wilayah</label>
                      <div class="col-lg-9">
                        <input type="text" name="wilayah" class="form-control" value="" placeholder="Wilayah" maxlength="50" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-lg-3">Telepon</label>
                      <div class="col-lg-9">
                        <input type="number" name="telepon" class="form-control" value="" placeholder="Telepon" maxlength="20" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-lg-3">Website</label>
                      <div class="col-lg-9">
                        <input type="text" name="website" class="form-control" value="" placeholder="Website" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-lg-3">Email</label>
                      <div class="col-lg-9">
                        <input type="email" name="email" class="form-control" value="" placeholder="Email" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-lg-3">Syarat</label>
                      <div class="col-lg-9">
                        <textarea name="syarat" rows="4" cols="80" class="form-control" placeholder="Syarat" required></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-lg-3">Kuota</label>
                      <div class="col-lg-9">
                        <input type="number" name="kuota" class="form-control" value="" placeholder="Kuota" maxlength="20" required>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-lg-3">Foto</label>
                      <div class="col-lg-9">
                        <input type="file" name="file" class="form-control" value="" placeholder="Foto" required>
                        <b style="color:red;font-size:10px;">*Max Size: 5 MB</b>
                      </div>
                    </div>

                    <a href="javascript:history.back()" class="btn btn-default"><< Kembali</a>
                    <button type="submit" name="btnsimpan" class="btn btn-primary" style="float:right;">Simpan</button>
                  </form>

               <?php
                }else{ ?>
                <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label class="control-label col-lg-3">Nama Industri</label>
                      <div class="col-lg-9">
                        <select class="form-control cari_industri" name="kdind" required style="width:100%;">
                          <option value="">-- Pilih Industri --</option>
                          <?php foreach ($v_industri->result() as $baris){ ?>
                            <option value="<?php echo $baris->kdind; ?>"><?php echo $baris->nama_industri; ?></option>
                          <?php }; ?>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-lg-3">Username & Password</label>
                      <div class="col-lg-9">
                        <input type="text" name="username" class="form-control" value="" placeholder="Username & Password" maxlength="32" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-lg-3">Nama Lengkap</label>
                      <div class="col-lg-9">
                        <input type="text" name="nama_lengkap" class="form-control" value="" placeholder="Nama Lengkap" maxlength="50" required>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-lg-3">Wilayah</label>
                      <div class="col-lg-9">
                        <input type="text" name="wilayahind" class="form-control" value="" placeholder="Wilayah" maxlength="50" required>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-lg-3">Foto</label>
                      <div class="col-lg-9">
                        <input type="file" name="file" class="form-control" value="" placeholder="Foto" required>
                        <b style="color:red;font-size:10px;">*Max Size: 5 MB</b>
                      </div>
                    </div>

                    <a href="javascript:history.back()" class="btn btn-default"><< Kembali</a>
                    <button type="submit" name="btnsimpan2" class="btn btn-primary" style="float:right;">Simpan</button>
                  </form>
                <?php
                } ?>   
              </fieldset>


            </div>

        </div>
      </div>
    </div>
    <!-- /dashboard content -->
