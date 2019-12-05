<?php
//fungsi untuk menggabungkan file
include("connection.php");
if (isset($_POST['simpan'])) {
	$query_input_cuti = "insert into t_cuti(NIK,NAMA,JABATAN,CUTI)values
	('" . $_POST['NIK'] . "',
	 '" . $_POST['NAMA'] . "',
    '" . $_POST['JABATAN'] . "',
'" . $_POST['CUTI'] . "')";
	$proses_data = mysql_query($query_input_cuti);
	if ($proses_data) {
		echo 'Input Data Berhasil ';
	} else {
		echo mysql_error();
	}
}
?>
<form method="POST" action="">
	<table>
		<tr>
			<td>Nik Karyawan</td>
			<td><input name="NIK" type="text"></td>
		</tr>
		<tr>
			<td>Nama Karyawan</td>
			<td><input name="NAMA" tYpe="text"></td>
		</tr>
		<tr>
			<td>Jabatan Karyawan</td>
			<td><input name="JABATAN" type="text"></td>
		</tr>
		<tr>
			<td>Hak Cuti Karyawan</td>
			<td><input name="CUTI" type="number"></td>
		</tr>
		<tr>
			<td><input name="simpan" type="submit"></td>
		</tr>
		<button><a href="tampil.php">tampilkan data</a></button>
	</table>
</form>