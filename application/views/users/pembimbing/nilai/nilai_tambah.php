<script src="assets/js/jquery-ui.js"></script>
<script>
$( function() {
  $( "#datepicker" ).datepicker();
} );
</script>
<div class="content-wrapper">
  <!-- Content area -->
  <div class="content">

    <!-- Dashboard content -->

  <div class="row">
            <!-- Basic datatable -->
    <div class="col-md-3"></div>
    <div class="panel panel-flat col-md-6">
      <div class="panel-heading">
        <h5 class="panel-title">Isi Nilai</h5>
        <div class="heading-elements">
          <ul class="icons-list">
            <li><a data-action="collapse"></a></li>
          </ul>
        </div>

        </div>
        <hr style="margin:0px;">
        <div class="panel-body">
          <?php
          echo $this->session->flashdata('msg');
          ?>
          <form action="" method="post" enctype="multipart/form-data">
            <div class="col-sm-12 pull-left" style="margin-top: 10px;">
              <label for="nama"><b>Nama Siswa</b></label>
              <select class="form-control cari_siswa" name="nis" required>
                <option value="">-- Pilih Siswa --</option>
                <?php foreach ($v_siswa->result() as $baris):
                if ($user->row()->kdpemb == $baris->kdpemb){
                ?>
                  <option value="<?php echo $baris->nis; ?>"><?php echo "$baris->nama_lengkap [NIS: $baris->nis]"; ?></option>
                <?php } endforeach; ?>
              </select>
            </div>
            <div class="col-sm-12 pull-left" style="margin-top: 10px;">
              <label for="nilai"><b>Nilai</b></label>
              <input type="number" class="form-control" id="nilai" name="nilai" value="" placeholder="Nilai" required>
            </div>
            <div class="col-sm-12 pull-left" style="margin-top: 10px;">
              <label for="keterangan"><b>Periode</b></label>
              <!-- <textarea class="form-control" id="keterangan" name="keterangan" rows="4" cols="80" placeholder="Keterangan" required></textarea> -->
              <select class="form-control" name="keterangan">
                <option value="">-- Pilih Periode --</option>
                <option value="Januari">Januari</option>
                <option value="Februari">Februari</option>
                <option value="Maret">Maret</option>
                <option value="April">April</option>
                <option value="Mei">Mei</option>
                <option value="Juni">Juni</option>
                <option value="Juli">Juli</option>
                <option value="Agustus">Agustus</option>
                <option value="September">September</option>
                <option value="Oktober">Oktober</option>
                <option value="November">November</option>
                <option value="Desember">Desember</option>
              </select>
            </div>
            <div class="col-sm-12 pull-left" style="margin-top: 10px;">
              <hr>
              <a href="javascript:history.back()" class="btn btn-default">Kembali</a>
              <button type="submit" name="btnsimpan" class="btn btn-primary" style="float:right;">Simpan</button>
              <button type="reset" class="btn btn-default" style="float:right;margin-right:10px;">Reset</button>
            </div>
        </form>

      </div>
    </div>
    <!-- /basic datatable -->
  </div>
  <!-- /dashboard content -->
