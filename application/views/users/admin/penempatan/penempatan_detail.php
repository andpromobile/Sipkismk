<?php
error_reporting(0);
$sub_menu3 = strtolower($this->uri->segment(3));
$user = $query;
$nama_siswa = $this->db->get_where('tbl_siswa', "nis='$user->nis'")->row()->nama_lengkap;
if ($nama_siswa == '') {
    $nama_siswa = '-';
}
$nama_pembimbing = $this->db->get_where('tbl_pemb', "kdpemb='$user->kdpemb'")->row()->nama_lengkap;
if ($nama_pembimbing == '') {
    $nama_pembimbing = '-';
}
$nama_industri = $this->db->get_where('tbl_industri', "kdind='$user->kdind'")->row()->nama_industri;
if ($nama_industri == '') {
    $nama_industri = '-';
}
?>
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
                <legend class="text-bold"><i class="icon-link2"></i> Detail Penempatan <?php echo ucwords($nama_siswa); ?></legend>

                  <table width="100%" border=0>
                      <tr>
                        <th width="30%"><b>NIS</b></th>
                        <td width="2%"><b>:</b>&nbsp; </td>
                        <td> <b><?php echo $user->nis; ?></b></td>
                      </tr>
                      <tr>
                        <th><b>Nama Siswa</b></th>
                        <td><b>:</b>&nbsp; </td>
                        <td> <?php echo ucwords($nama_siswa); ?></td>
                      </tr>
                      <tr>
                        <th><b>Nama Pembimbing</b></th>
                        <td><b>:</b>&nbsp; </td>
                        <td> <?php echo ucwords($nama_pembimbing); ?></td>
                      </tr>
                      <tr>
                        <th><b>Nama Industri</b></th>
                        <td><b>:</b>&nbsp; </td>
                        <td> <?php echo ucwords($nama_industri); ?></td>
                      </tr>
                      <tr>
                        <th><b>Tanggal</b></th>
                        <td><b>:</b>&nbsp; </td>
                        <td> <?php echo ucwords($user->tanggal); ?></td>
                      </tr>
                      <tr>
                        <th><b>Wilayah</b></th>
                        <td><b>:</b>&nbsp; </td>
                        <td> <?php echo ucwords($user->wilayah); ?></td>
                      </tr>
                      <tr>
                        <th><b>Tahun</b></th>
                        <td><b>:</b>&nbsp; </td>
                        <td> <?php echo ucwords($user->tahun); ?></td>
                      </tr>
                      <tr>
                        <th><b>Status</b></th>
                        <td><b>:</b>&nbsp; </td>
                        <td>
                          <?php
                          if ($user->status == 'proses') {?>
                              <label class="label label-warning">Proses</label>
                          <?php
                        }elseif ($user->status == 'ditolak') {?>
                                <label class="label label-danger">Ditolak</label>
                            <?php
                          }elseif ($user->status == 'diterima') {?>
                              <label class="label label-success">Diterima</label>
                          <?php
                          }else{
                              echo "-";
                          }
                          ?>
                        </td>
                      </tr>

                      <tr>
                        <th><b>Surat</b></th>
                        <td><b>:</b>&nbsp; </td>
                        <td>
                          <?php if ($user->surat == '' or $user->surat == '-'){ ?>
                                  -
                          <?php }else{ ?>
                                  <a href="lampiran/surat/<?php echo $user->surat; ?>" target="_blank"><?php echo $user->surat; ?></a>
                          <?php } ?>
                        </td>
                      </tr>
                  </table>

                <hr>
                  <a href="javascript:history.back()" class="btn btn-default"><< Kembali</a>

              </fieldset>


            </div>

        </div>
      </div>
    </div>
    <!-- /dashboard content -->
