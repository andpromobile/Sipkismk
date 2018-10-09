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
          <h6 class="panel-title"><i class="icon-office"></i> Data Industri <a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
          <div class="heading-elements">
            <ul class="icons-list">
                <li><a data-action="collapse"></a></li>
                <li><a data-action="close"></a></li>
            </ul>
           </div>
        </div>

        <div class="panel-body">
            <div class="tabbable">
            <ul class="nav nav-tabs nav-tabs-highlight nav-justified">
              <li class="<?php if($sub_menu3 == ''){echo 'active';} ?>"><a href="#tbl_industri" data-toggle="tab" aria-expanded="true">+ Industri</a></li>
              <li class="<?php if($sub_menu3 == 'tbl_pembind'){echo 'active';} ?>"><a href="#tbl_pembind" data-toggle="tab" aria-expanded="true">+ Pembimbing Industri</a></li>
            </ul>

            <div class="tab-content">
              <div class="tab-pane <?php if($sub_menu3 == ''){echo 'active';} ?>" id="tbl_industri">
                <?php
                echo $this->session->flashdata('msg');
                ?>
                <a href="users/industri/t" class="btn btn-primary"><i class="icon-plus2"></i> Industri Baru</a>

                <table class="table datatable-basic" width="100%">
                  <thead>
                    <tr>
                      <th width="30px;">No.</th>
                      <th width="100">Foto</th>
                      <th>Nama Industri</th>
                      <th>Bidang Kerja</th>
                      <th>Kuota</th>
                      <th class="text-center" width="170">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php
                      $no = 1;
                      foreach ($v_industri->result() as $baris) {
                      ?>
                        <tr>
                          <td><?php echo $no.'.'; ?></td>
                          <td><img src="foto/industri/<?php echo $baris->foto; ?>" alt="industri" width="100" height="100"></td>
                          <td><?php echo $baris->nama_industri; ?></td>
                          <td><?php echo $baris->bidang_kerja; ?></td>
                          <td><?php echo $baris->kuota; ?></td>
                          <td>
                            <a href="users/industri/d/<?php echo $baris->kdind; ?>" class="btn btn-info btn-xs"><i class="icon-eye"></i></a>
                            <a href="users/industri/e/<?php echo $baris->kdind; ?>" class="btn btn-success btn-xs"><i class="icon-pencil7"></i></a>
                            <a href="users/industri/h/<?php echo $baris->kdind; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Apakah Anda yakin?')"><i class="icon-trash"></i></a>
                          </td>
                        </tr>
                      <?php
                      $no++;
                      } ?>
                  </tbody>
                </table>
              </div>

              <div class="tab-pane <?php if($sub_menu3 == 'tbl_pembind'){echo 'active';} ?>" id="tbl_pembind">

                <?php
                echo $this->session->flashdata('msg_pembind');
                ?>
                <a href="users/industri/t_pembind" class="btn btn-primary"><i class="icon-user-plus"></i> Pembimbing Baru</a>

                <table class="table datatable-basic" width="100%">
                  <thead>
                    <tr>
                      <th width="30px;">No.</th>
                      <th>Username</th>
                      <th>Nama Lengkap</th>
                      <th>Industri</th>
                      <th>Wilayah</th>
                      <th class="text-center" width="130">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php
                      $no = 1;
                      foreach ($v_pembind->result() as $baris) {
                        $nama_industri = $this->db->get_where('tbl_industri', "kdind='$baris->kdind'")->row()->nama_industri;
                      ?>
                        <tr>
                          <td><?php echo $no.'.'; ?></td>
                          <td><?php echo $baris->username; ?></td>
                          <td><?php echo $baris->nama_lengkap; ?></td>
                          <td><?php echo $nama_industri; ?></td>
                          <td><?php echo $baris->wilayahind; ?></td>
                          <td>
                            <a href="users/industri/d_pembind/<?php echo $baris->kdpembind; ?>" class="btn btn-info btn-xs"><i class="icon-eye"></i></a>
                            <!-- <a href="users/pengguna/e_siswa/<?php echo $baris->nis; ?>" class="btn btn-success btn-xs"><i class="icon-pencil7"></i></a> -->
                            <a href="users/industri/h_pembind/<?php echo $baris->kdpembind; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Apakah Anda yakin?')"><i class="icon-trash"></i></a>
                          </td>
                        </tr>
                      <?php
                      $no++;
                      } ?>
                  </tbody>
                </table>

              </div>
            </div>


          </div>
        </div>
      </div>

      <!-- /basic datatable -->
    </div>
    <!-- /dashboard content -->
