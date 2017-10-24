<?php
class sekolah {
	var $nama_sekolah;
	var $tingkat_sekolah;
	var $alamat;
function tampilkan_nama()
{
	return"Nama Sekolah adalah Assalaam";

}
}
$sekolah_1 = new sekolah();
echo $sekolah_1->tampilkan_nama();

?>