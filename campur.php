<?php
class manusia{
public $kaki = "maju ke  depan";
public $wajah = "sangat tampan";

public function kakinya(){
	
	return $this->kaki;
}
public function wajahnya(){
	return $this->wajah;
}
}
$manusia1 = new manusia;
echo "kakinya bergerak ".$manusia1->kakinya().'<br>'.'dan' ;
echo " wajah gema ".$manusia1->wajahnya();
?>
<br>
<br><br>
<?php
class barang{
public $harga = 2000;
public $wajah = "tampan";

}
$barang1 = new barang;
echo "barang ini berharga :".$barang1 ->harga ;
?>
<br>
<?php
class laptop{
public $kaki = 2;
public $merk = "lenovo";

}
$laptop1 = new laptop;
echo "merk laptop ini  adalah".$laptop1 ->merk;
?>
<br>
<?php
class smartphone{
public $kaki = 2;
public $spek = "lolipop";

}
$s1 = new smartphone;
echo "spek smartphone ini adalah :".$s1 ->spek;
?>
<br>
<?php
class sekolah{
public $cabang = 2;
public $wajah = "tampan";

}
$sekolah1 = new sekolah;
echo "sekolah ini memiliki cabang :".$sekolah1 ->cabang;
?>
