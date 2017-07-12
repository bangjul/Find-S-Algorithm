<?php

$sample = Array(
	array("panjang","sedang","pisang"),
	array("panjang","pendek","pisang"),
	array("pendek","pendek","apel")
	);
//echo $sample[2][2];
echo "Panjang | Lebar | Nama Buah <br>";
for($row = 0 ; $row < 3; $row++){
	for($col =0 ; $col <3 ; $col++){
		echo $sample[$row][$col]. " ";

	}
	echo "<br>";
}

echo "<br>hipotesa :<br>";
$hipotesa = array("?","?");

for($i = 0; $i<2; $i++ ){
	if($sample[$i][2]=="pisang"){
		for($j=0; $j<2 ;$j++){
			if($hipotesa[$j]=="?"){
				$hipotesa [$j] = $sample[$i][$j];
			}
			else {
				if($hipotesa [$j] != $sample[$i][$j]){
				$hipotesa[$j] = "?";
				}
			}
		}
	}
}

for($k=0 ; $k <2 ; $k++){
	echo $hipotesa[$k];
	echo " ";
}

$dataTest = array("pendek", "pendek", " "); //pengetesan data
$pisang = 1;
for($l=0; $l<2; $l++){
	if(($dataTest[$l] != $hipotesa[$l]) && ($hipotesa[$l] != "?")){
		$pisang++;
	}
}

if ($pisang == 1){
	$dataTest[2]="pisang";
} else {
	$dataTest[2]="apel";
}

echo "<br><br>data test : ";
for($z=0; $z<2; $z++){
	echo $dataTest[$z]." ";
}
echo "<br>saran : " .$dataTest[2];
?>