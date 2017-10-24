<?php
require_once'identitas.php';

$identitas1 = new identitas("Jems","Bandung","XI RPL 1","Menikah");
echo "Namanya...". $identitas1->get_nama().'<br>';
echo "Tempatnya...".$identitas1->get_tempat().'<br>';
echo "Kelas...".$identitas1->get_kelas().'<br>';
echo "Status...".$identitas1->get_status().'<br>';
?>