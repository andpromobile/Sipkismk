<?php
$sub_menu3 = strtolower($this->uri->segment(3));?>
<html>
<head>
    <title>Cetak PDF</title>
</head>
<body>
<h1 style="text-align: center;">Jurnal Prakerin <br> SMK Negeri 4 Makassar</h1>
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
<table border="1" align="center">
<tr>
    <th align="center">No</th>
    <th align="center">Tanggal Kegiatan</th>
    <th align="center">Kompotensi</th>
    <th align="center">Uraian Kegiatan</th>
    <th align="center">Foto Kegiatan</th>
</tr>
<?php
    $no = 1;
    foreach ($v_jurnal->result() as $baris) {
      if ($user->row()->nis == $baris->nis){
        $this->db->get_where('tbl_penempatan', "kdpenempatan='$baris->kdpenempatan'")->row();
        ?>
        <tr>
            <td align="center"><?php echo $no.'.'; ?></td>
            <td width="100"><?php echo $baris->tanggal; ?></td>
            <td width="150"><?php echo $baris->kompotensi; ?></td>
            <td width="300"><?php echo $baris->uraian; ?></td>
            <td>
                <img src="foto/jurnal/<?php if ($baris->foto_jurnal == '') { echo'default.png'; }else{echo "$baris->foto_jurnal";} ?>" alt="Foto Prakerin" width="100" height="100">
            </td>
        </tr>
        <?php
        $no++;
          }}?>
</table>
</body>
</html>