<?php
require_once'pennjumlahanr.php';

$penjumlahan1 = new penjumlahan ();
$penjumlahan1->set_penjumlahan(21,3);
echo "=======================<br>Perhitungan bilangan 21 dengan 3<br>=======================<br>";
echo "Penjumlahan dari bilangan 21 dan 3 adalah ".$penjumlahan1->get_penjumlahan().'<br>';

echo "Pengurangan dari bilangan 21 dan 3 adalah ".$penjumlahan1->get_pengurangan().'<br>';

echo "Perkalian dari bilangan 21 dan 3 adalah ".$penjumlahan1->get_perkalian().'<br>';
echo "Pembagian dari bilangan 21 dan 3 adalah ".$penjumlahan1->get_pembagian().'<br>';

?>