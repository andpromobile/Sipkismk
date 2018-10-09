<?php
$sub_menu3 = strtolower($this->uri->segment(3));?>
<html>
<head>
    <title>Cetak PDF</title>
</head>
<body>
<h1 style="text-align: center;">Jurnal Harian Prakerin <br> SMK Negeri 4 Makassar</h1>
<?php echo "Tanggal Cetak : ".date('d-m-Y'); ?><br><br>
<hr>
                  <table width="100%" border=0>
                      <tr>
                        <th width="30%"><b>NIS</b></th>
                        <td width="2%"><b>:</b>&nbsp;</td>
                        <td> <b><?php echo $user->row()->nis; ?></b></td>
                      </tr>
                      <tr>
                        <th><b>Nama Lengkap</b></th>
                        <td><b>:</b>&nbsp;</td>
                        <td> <?php echo ucwords($user->row()->nama_lengkap); ?></td>
                      </tr>
                  </table>
<hr>
<h3 align="center">Kegiatan Prakerin</h3>
<table width="100%" border=0>
    <?php
    foreach ($v_jurnal->result() as $baris) {
    ?>
                <tr>
                        <th><b>Tanggal Kegiatan</b></th>
                        <td><b>:</b>&nbsp;</td>
                        <td> <?php echo users::format($baris->tanggal); ?></td>
                      </tr>
                      <tr>
                        <th width="30%"><b>Kompotensi</b></th>
                        <td width="2%"><b>:</b>&nbsp;</td>
                        <td> <b><?php echo strtoupper($baris->kompotensi); ?></b></td>
                      </tr>
                      <tr>
                        <th><b>Uraian Kegiatan</b></th>
                        <td><b>:</b>&nbsp;</td>
                        <td width="600"> <?php echo $baris->uraian; ?></td>
                      </tr>
                      <tr>
                        <th><b>Foto Kegiatan</b></th>
                        <td><b>:</b>&nbsp;</td>
                        <td>
                          <img src="foto/jurnal/<?php if ($baris->foto_jurnal == '') { echo'default.png'; }else{echo "$baris->foto_jurnal";} ?>" alt="Foto Prakerin" width="300" height="300">
                        </td>
                      </tr>
        <?php
        }?>
</table>
</body>
</html>