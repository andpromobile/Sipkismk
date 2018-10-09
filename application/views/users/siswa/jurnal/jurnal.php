<?php
$sub_menu3 = strtolower($this->uri->segment(3)); ?>
<!-- Main content -->
<div class="content-wrapper">
  <!-- Content area -->
  <div class="content">
    <!-- Dashboard content -->
    <div class="row">
      <!-- Basic datatable -->
      <div class="panel panel-flat">
        <div class="panel-heading">
          <h6 class="panel-title"><i class="icon-book3"></i> Data Jurnal Harian <b><?php echo ucwords($user->row()->nama_lengkap); ?></b> <a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
          <div class="heading-elements">
            <ul class="icons-list">
                <li><a data-action="collapse"></a></li>
                <li><a data-action="close"></a></li>
            </ul>
           </div>
        </div>

        <div class="panel-body">
                <?php
                echo $this->session->flashdata('msg');
                ?>
                <a href="users/jurnal_harian/t" class="btn btn-primary"><i class="icon-plus22"></i> Jurnal Harian</a>

                <a href="users/jurnal_harian/all" class="btn btn-default"><i class="glyphicon glyphicon-print"></i> Semua Jurnal</a>

                <table class="table datatable-basic" width="100%">
                  <thead>
                    <tr>
                      <th width="30px;">No.</th>
                      <th>NIS</th>
                      <th>Kelas</th>
                      <th>Kompotensi</th>
                      <th>Tanggal</th>
                      <th class="text-center" width="170">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php
                      $no = 1;
                      foreach ($v_jurnal->result() as $baris) {
                        $cek_status = $this->db->get_where('tbl_penempatan', "kdpenempatan='$baris->kdpenempatan'")->row()->status;
                        if ($cek_status == 'diterima') {
                          $cek_kelas = $this->db->get_where('tbl_kelas', "kdkelas='$baris->kdkelas'")->row();
                          if ($cek_kelas->kdkelas == '') {
                              $kelas = '-';
                          }else{
                              $kelas =$cek_kelas->nama;
                          }
                          $cek_jurusan = $this->db->get_where('tbl_jurusan', "kdjurusan='$cek_kelas->kdjurusan'")->row();
                          if ($cek_jurusan->kdjurusan == '') {
                              $jurusan = '-';
                          }else{
                              $jurusan =$cek_jurusan->nama;
                          }
                          $cek_pemb = $this->db->get_where('tbl_pemb', "kdpemb='$baris->kdpemb'")->row();
                          if ($cek_pemb == '') {
                              $nama_pemb = '-';
                          }else{
                              $nama_pemb =$cek_pemb->nama_lengkap;
                          }
                      ?>
                          <tr>
                            <td><?php echo $no.'.'; ?></td>
                            <td><?php echo $baris->nis; ?></td>
                            <td><?php echo $kelas; ?> <?php echo $jurusan; ?></td>
                            <td><?php echo $baris->kompotensi; ?></td>
                            <td><?php echo $baris->tanggal; ?></td>
                            <td>
                              <a href="users/jurnal_harian/d/<?php echo $baris->kdjurnal; ?>" class="btn btn-info btn-xs"><i class="icon-eye"></i></a>
                              <a href="users/jurnal_harian/h/<?php echo $baris->kdjurnal; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Anda yakin?')"><i class="icon-trash"></i></a>
                              <a href="users/jurnal_harian/c/<?php echo $baris->kdjurnal; ?>" class="btn btn-success"><i class="glyphicon glyphicon-print"></i></a>
                            </td>
                          </tr>
                      <?php
                      $no++;
                        }
                      } ?>
                  </tbody>
                </table>


          </div>
        </div>
      </div>

      <!-- /basic datatable -->
    </div>
    <!-- /dashboard content -->
