<?php

error_reporting(E_ALL ^ E_NOTICE | E_WARNING );
$angka1 = $_GET['angka1'];
$angka2 = $_GET['angka2'];
$operasi= $_GET['operasi'];
$submit = $_GET['submit'];



if ($submit) {
	
	if ($operasi == 'tambah') {
        $hasil = $angka1 + $angka2 ;
        echo "Hasilnya : <br>";
		echo "<br> $angka1 + $angka2 =  $hasil";
	} else if ($operasi == 'kurang') {
        $hasil = $angka1 - $angka2 ;
        echo "Hasilnya : <br>";
		echo "<br> $angka1 - $angka2 =  $hasil";
		
		
	}else if ($operasi == 'kali') {
		$hasil = $angka1 * $angka2 ;
        echo "Hasilnya : <br>";
		echo "<br> $angka1 * $angka2 =  $hasil";
		
	}else if ($operasi == 'bagi') {
		$hasil = $angka1 / $angka2 ;
        echo "Hasilnya : <br>";
		echo "<br> $angka1 / $angka2 =  $hasil";
		
	}else{
		echo "=== Silahkan Pilih Operasi Tersebut ===";
	}
	


}



?>
