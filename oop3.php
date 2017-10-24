<?php 
class buku {
	var $judul_buku;
	var $pengarang;
	var $penerbit;
	var $tahun;
	var $harga;


}
$buku_adi = new buku ();

$buku_adi->judul_buku = "Sang Pencerah";
$buku_adi->pengarang = "Jujun";
$buku_adi->penerbit = "Sindo";
$buku_adi->tahun = "1988";
$buku_adi->harga = "68.000";

echo $buku_adi->judul_buku;
echo "<br>";
echo $buku_adi->pengarang;
echo "<br>";
echo $buku_adi->penerbit;
echo "<br>";
echo $buku_adi->tahun;
echo "<br>";
echo $buku_adi->harga;
echo "<br>";
?>

<?php
class orang {
	var $nama_peminjam;
	var $jenis_kelamin;
    var $pendidikan;
    var $alamat;
}
?>