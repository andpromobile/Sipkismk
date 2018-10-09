<?php
$user = $user->row();
?>
<script src="assets/css/fileinput.min.css"></script>

<style>
    .kv-avatar .krajee-default.file-preview-frame,.kv-avatar .krajee-default.file-preview-frame:hover {
      margin: 0;
      padding: 0;
      border: none;
      box-shadow: none;
      text-align: center;
    }
    .kv-avatar {
      display: inline-block;
    }
    .kv-avatar .file-input {
      display: table-cell;
      width: 213px;
    }
    .kv-reqd {
      color: red;
      font-family: monospace;
      font-weight: normal;
    }
    .fileinput-remove-button{
      margin-top: -20px;
    }
    .text-muted{
      cursor: pointer;
    }
</style>

<!-- Main content -->
<div class="content-wrapper">

  <!-- Content area -->
  <div class="content">

    <!-- Dashboard content -->
    <!-- <div class="row">
      <div class="col-md-12">
        <div class="panel panel-flat">
            <div class="panel-body">
                <center>
                  <img src="foto/<?php if($user->foto == ''){echo 'default.png';}else{echo $user->foto;} ?>" alt="<?php echo $user->nama_lengkap; ?>" class="img-circle" width="176" height="176">
                </center>
            </div>
        </div>
      </div>
    </div> -->
    <div class="row">

      <div class="col-md-6">
      <div class="panel panel-flat">
          <div class="panel-body">
            <fieldset class="content-group">
              <legend class="text-bold"><i class="icon-user"></i> Ubah Profil</legend>
              <?php
              echo $this->session->flashdata('msg');
              ?>
              <div id="kv-avatar-errors-1" class="center-block" style="width:100%;display:none"></div>
              <form class="form form-vertical" action="" method="post" enctype="multipart/form-data">             
                <center>
                  <div class="kv-avatar">
                      <input id="avatar-1" name="avatar-1" type="file" class="file-loading">
                  </div>
                  <div class="kv-avatar-hint"><small><b>Select file < 3 MB</b></small></div>
                </center>
                <hr>
                <div class="form-group">
                  <label class="control-label col-lg-3"><?php if($level == 'Siswa'){echo "NIS";}else{ echo "Username";}?></label>
                  <div class="col-lg-9">
                    <input type="text" name="username" class="form-control" value="<?php if($level == 'Siswa'){echo $user->nis;}else{ echo $user->username;} ?>" <?php if($level == 'Siswa'){echo "readonly";}?> placeholder="Username" required>
                  </div>
                </div>
                <!-- <div class="form-group">
                  <label class="control-label col-lg-3">NIK</label>
                  <div class="col-lg-9">
                    <input type="text" name="nik" class="form-control" value="<?php echo $user->nik; ?>" placeholder="N I K" required>
                  </div>
                </div> -->
                <div class="form-group">
                  <label class="control-label col-lg-3">Nama Lengkap</label>
                  <div class="col-lg-9">
                    <input type="text" name="nama_lengkap" class="form-control" value="<?php echo $user->nama_lengkap; ?>" placeholder="Nama Lengkap" maxlength="50" required>
                  </div>
                </div>
      <?php if ($level == 'Admin') {?>
                <div class="form-group">
                  <label class="control-label col-lg-3">Identitas</label>
                  <div class="col-lg-9">
                    <input type="text" name="identitas" class="form-control" value="<?php echo $user->identitas; ?>" placeholder="Identitas" maxlength="32">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-3">Status</label>
                  <div class="col-lg-9">
                    <input type="text" name="status" class="form-control" value="<?php echo $user->status; ?>" placeholder="Status" maxlength="11">
                  </div>
                </div>
      <?php }elseif ($level == 'Pembimbing') { ?>
                <div class="form-group">
                  <label class="control-label col-lg-3">NIP</label>
                  <div class="col-lg-9">
                    <input type="text" name="nip" class="form-control" value="<?php echo $user->nip; ?>" placeholder="NIP" maxlength="21">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-3">Jurusan</label>
                  <div class="col-lg-9">
                    <select class="form-control cari_jurusan" name="jurusan" required style="width:100%;">
                      <option value="">-- Pilih Jurusan --</option>
                      <?php foreach ($v_jurusan->result() as $baris){ ?>
                        <option value="<?php echo $baris->kdjurusan; ?>" <?php if($baris->kdjurusan == $user->kdjurusan){echo "selected";} ?>><?php echo $baris->nama; ?></option>
                      <?php }; ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-3">Wilayah</label>
                  <div class="col-lg-9">
                    <input type="text" name="wilayah" class="form-control" value="<?php echo $user->wilayah; ?>" placeholder="Wilayah" maxlength="50">
                  </div>
                </div>

      <?php }elseif ($level == 'Pembind') { ?>
                <div class="form-group">
                  <label class="control-label col-lg-3">Industri</label>
                  <div class="col-lg-9">
                    <select class="form-control cari_industri" name="industri" required style="width:100%;">
                      <option value="">-- Pilih Industri --</option>
                      <?php foreach ($v_industri->result() as $baris){ ?>
                        <option value="<?php echo $baris->kdind; ?>" <?php if($baris->kdind == $user->kdind){echo "selected";} ?>><?php echo $baris->nama_industri; ?></option>
                      <?php }; ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-3">Wilayah</label>
                  <div class="col-lg-9">
                    <input type="text" name="wilayahind" class="form-control" value="<?php echo $user->wilayahind; ?>" placeholder="Wilayah" maxlength="50">
                  </div>
                </div>




      <?php }elseif ($level == 'Siswa') { ?>
                <div class="form-group">
                  <label class="control-label col-lg-3">Nama Kelas</label>
                  <div class="col-lg-9">
                    <select class="form-control cari_kelas" name="kelas" required style="width:100%;">
                      <option value="">-- Pilih Kelas --</option>
                      <?php foreach ($v_kelas->result() as $baris){ ?>
                        <option value="<?php echo $baris->kdkelas; ?>" <?php if($baris->kdkelas == $user->kdkelas){echo "selected";} ?>><?php echo $baris->nama; ?></option>
                      <?php }; ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-3">Telp</label>
                  <div class="col-lg-9">
                    <input type="text" name="telp" class="form-control" value="<?php echo $user->telp; ?>" placeholder="Telp" maxlength="14" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-3">Nama Pembimbing</label>
                  <div class="col-lg-9">
                    <input type="text" name="pemb" class="form-control" value="<?php echo $nama_pemb = $this->db->get_where('tbl_pemb', "kdpemb='$user->kdpemb'")->row()->nama_lengkap; ?>" placeholder="Nama Pembimbing"readonly>
                  </div>
                </div>
      <?php } ?>
            </fieldset>
            <div class="col-md-12">
              <button type="submit" name="btnupdate" class="btn btn-primary" style="float:right;">Simpan</button>
            </div>
          </form>
          </div>
      </div>
      </div>

      <div class="col-md-6">
      <div class="panel panel-flat">
          <div class="panel-body">
            <fieldset class="content-group">
              <legend class="text-bold"><i class="icon-key"></i> Ubah Password</legend>
              <?php
              echo $this->session->flashdata('msg2');
              ?>
              <form class="form-horizontal" action="" method="post">
                <div class="form-group">
                  <label class="control-label col-lg-3">Password</label>
                  <div class="col-lg-9">
                    <input type="password" name="password" class="form-control" value="" placeholder="Password" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-3">Ulangi Password</label>
                  <div class="col-lg-9">
                    <input type="password" name="password2" class="form-control" value="" placeholder="Ulangi Password" required>
                  </div>
                </div>

            </fieldset>
            <div class="col-md-12">
              <button type="submit" name="btnupdate2" class="btn btn-primary" style="float:right;">Simpan</button>
            </div>
          </form>
          </div>
      </div>
      </div>

    </div>
    <!-- /dashboard content -->


<script src="assets/js/fileinput.min.js"></script>

    <!-- the fileinput plugin initialization -->
    <script>
    var btnCust = '';
    $("#avatar-1").fileinput({
        overwriteInitial: true,
        maxFileSize: 3074,
        showClose: false,
    		showCaption: false,
    		showBrowse: false,
    		browseOnZoneClick: true,
    		removeLabel: '',
    		removeIcon: 'Reset Image &nbsp;<i class="glyphicon glyphicon-refresh"></i>',
    		removeTitle: 'Cancel or reset changes',
    		elErrorContainer: '#kv-avatar-errors-1',
    		msgErrorClass: 'alert alert-block alert-danger',
        defaultPreviewContent: '<br><img src="foto/<?php if($level == 'Siswa'){echo"siswa/";} if($level == 'Pembimbing'){echo"pembimbing/";} if($level == 'Pembind'){echo"pembind/";} if($user->foto == ''){echo 'default.png';}else{echo $user->foto;} ?>" alt="<?php echo $user->nama_lengkap; ?>" width="176" height="176" class="text-muted"><h6 class="text-muted">Click to select</h6>',
        layoutTemplates: {main2: '{preview} ' +  btnCust + ' {remove} {browse}'},
        allowedFileExtensions: ["jpg", "jpeg", "png", "gif", "bmp"]
    });
    </script>
