<?php
include('connection.php');
$tampilCuti = mysql_query("select * from t_cuti");
?>
<table border="1">
    <tr>
        <td>ID</td>
        <td>NIK</td>
        <td>Nama</td>
        <td>Jabatan</td>
        <td>Hak Cuti</td>
    </tr>
    <?php
    while ($cuti = mysql_fetch_array($tampilCuti)) { ?>
        <tr>
            <td><?php echo $cuti['ID']; ?></td>
            <td><?php echo $cuti['NIK']; ?></td>
            <td><?php echo $cuti['NAMA']; ?></td>
            <td><?php echo $cuti['JABATAN']; ?></td>
            <td><?php echo $cuti['CUTI']; ?></td>
        </tr>
    <?php } ?>

</table>