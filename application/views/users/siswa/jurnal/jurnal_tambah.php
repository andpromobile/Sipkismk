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
        <h5 class="panel-title">+ Jurnal Harian</h5>
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
            <?php foreach ($v_siswa->result() as $baris):
              $cek_pemb = $this->db->get_where('tbl_pemb', "kdpemb='$baris->kdpemb'")->row();
                          if ($cek_pemb->kdpemb == '') {
                              $pemb = '-';
                          }else{
                              $pemb =$cek_pemb->nip;
                          }
              ?>
            <div class="col-sm-6 pull-left" style="margin-top: 10px;">
              <label for="nis"><b>NIS</b></label>
              <input type="text" class="form-control" name="nis" id="nis" value="<?php echo $baris->nis; ?>" readonly="readonly" />
            </div>
            <div class="col-sm-6 pull-left" style="margin-top: 10px;">
              <label for="nip"><b>NIP Pembimbing</b></label>
              <input type="text" class="form-control" name="nip" id="nip" value="<?php echo $pemb; ?>" readonly="readonly" />
            </div>
           
            <div class="col-sm-12 pull-left" style="margin-top: 10px;">
              <label for="datepicker"><b>Tanggal</b></label>
              <input type="text" class="form-control daterange-single" id="datepicker" name="tanggal" value="<?php echo date('d-m-Y'); ?>" placeholder="Tanggal-Bulan-Tahun, Contoh: <?php echo date('d-m-Y'); ?>" maxlength="10" required>
            </div>
            <div class="col-sm-12 pull-left" style="margin-top: 10px;">
              <label for="kompotensi"><b>Kompotensi</b></label>
              <input type="text" class="form-control" id="kompotensi" name="kompotensi" value="" placeholder="Kompotensi" maxlength="50" required>
            </div>
            <div class="col-sm-12 pull-left" style="margin-top: 10px;">
              <label for="uraian"><b>Uraian</b></label>
              <textarea class="form-control" id="uraian" name="uraian" rows="4" cols="80" placeholder="Uraian Kegiatan" required></textarea>
            </div>
            <div class="col-sm-12 pull-left" style="margin-top: 10px;">
              <label for="file"><b>Foto</b></label>
              <input type="file" name="file" class="form-control" value="" placeholder="Foto" required>
              <b style="color:red;font-size:10px;">*Max Size: 5 MB</b>
            </div>
            <div class="col-sm-12 pull-left" style="margin-top: 10px;">
              <hr>
              <a href="javascript:history.back()" class="btn btn-default">Kembali</a>
              <button type="submit" name="btnsimpan" class="btn btn-primary" style="float:right;">Simpan</button>
              <button type="reset" class="btn btn-default" style="float:right;margin-right:10px;">Reset</button>
            </div>
             <?php endforeach; ?>
        </form>

      </div>
    </div>
    <!-- /basic datatable -->
  </div>
  <!-- /dashboard content -->
