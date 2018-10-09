<?php
$sub_menu3 = strtolower($this->uri->segment(3));
$user = $query; ?>
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
                <legend class="text-bold"><i class="icon-office"></i>
                  Detail <?php if ($sub_menu3 == 'd'){echo ucwords($user->nama_industri);}else{echo "Pembimbing Industri";} ?></legend>

                  <center>
                  <img src="foto/<?php if ($user->foto == '') { echo'default.png'; } elseif ($sub_menu3 == 'd') { echo "industri/$user->foto"; }else{echo "pembind/$user->foto";}?>" alt="" class="img-circle" width="176" height="176">
                  <br>
                  <b>
                    Foto <br>
                    <?php if ($sub_menu3 == 'd') {echo ucwords($user->nama_industri);}else{echo "Pembimbing Industri";} ?>
                  </b>
                  </center>
                  <hr>
                  <?php if ($sub_menu3 == 'd') {?>
                  <table width="100%" border=0>
                      <tr>
                        <th width="30%"><b>Nama Industri</b></th>
                        <td width="2%"><b>:</b>&nbsp; </td>
                        <td> <b><?php echo $user->nama_industri; ?></b></td>
                      </tr>
                      <tr>
                        <th><b>Bidang Kerja</b></th>
                        <td><b>:</b>&nbsp; </td>
                        <td> <?php echo ucwords($user->bidang_kerja); ?></td>
                      </tr>
                      <tr>
                        <th><b>Deskripsi</b></th>
                        <td><b>:</b>&nbsp; </td>
                        <td> <?php echo ucwords($user->deskripsi); ?></td>
                      </tr>
                      <tr>
                        <th><b>Alamat Industri</b></th>
                        <td><b>:</b>&nbsp; </td>
                        <td> <?php echo ucwords($user->alamat_industri); ?></td>
                      </tr>
                      <tr>
                        <th><b>Wilayah</b></th>
                        <td><b>:</b>&nbsp; </td>
                        <td> <?php echo ucwords($user->wilayah); ?></td>
                      </tr>
                      <tr>
                        <th><b>Telepon</b></th>
                        <td><b>:</b>&nbsp; </td>
                        <td> <?php echo ucwords($user->telepon); ?></td>
                      </tr>
                      <tr>
                        <th><b>Website</b></th>
                        <td><b>:</b>&nbsp; </td>
                        <td> <?php echo ucwords($user->website); ?></td>
                      </tr>
                      <tr>
                        <th><b>Email</b></th>
                        <td><b>:</b>&nbsp; </td>
                        <td> <?php echo ucwords($user->email); ?></td>
                      </tr>
                      <tr>
                        <th><b>Syarat</b></th>
                        <td><b>:</b>&nbsp; </td>
                        <td> <?php echo ucwords($user->syarat); ?></td>
                      </tr>
                      <tr>
                        <th><b>Kuota</b></th>
                        <td><b>:</b>&nbsp; </td>
                        <td> <?php echo ucwords($user->kuota); ?></td>
                      </tr>
                  </table>
                  <?php
                }else{ ?>
                  <table width="100%" border=0>
                      <tr>
                        <th width="30%"><b>Username</b></th>
                        <td width="2%"><b>:</b>&nbsp;</td>
                        <td> <b><?php echo $user->username; ?></b></td>
                      </tr>
                      <tr>
                        <th><b>Nama Lengkap</b></th>
                        <td><b>:</b>&nbsp;</td>
                        <td> <?php echo ucwords($user->nama_lengkap); ?></td>
                      </tr>
                      <tr>
                        <th><b>Industri</b></th>
                        <td><b>:</b>&nbsp;</td>
                        <td>
                          <?php $industri = $this->db->get_where('tbl_industri', "kdind='$user->kdind'")->row();
                          echo $industri->nama_industri; ?>
                        </td>
                      </tr>
                      <tr>
                        <th><b>Wilayah</b></th>
                        <td><b>:</b>&nbsp;</td>
                        <td> <?php echo $user->wilayahind; ?></td>
                      </tr>
                  </table>
                <?php
                } ?>
                <hr>
                  <a href="javascript:history.back()" class="btn btn-default"><< Kembali</a>

              </fieldset>


            </div>

        </div>
      </div>
    </div>
    <!-- /dashboard content -->
