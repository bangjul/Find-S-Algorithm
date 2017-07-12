<?php

$sample = Array(
	array("muda","gemuk","tidak"),
	array("muda","sangatgemuk","tidak"),
	array("paruhbaya","gemuk","tidak"),
	array("paruhbaya","terlalugemuk","ya"),
	array("tua","terlalugemuk","ya")
	);

echo "Umur | Kegemukan | Hipertensi <br>";
for($row = 0 ; $row < 5; $row++){
	for($col =0 ; $col <3 ; $col++){
		echo $sample[$row][$col]. " ";

	}
	echo "<br>";
}

echo "<br>hipotesa :<br>";
$hipotesa = array("?","?");

for($i = 0; $i<5; $i++ ){
	if($sample[$i][2]=="ya"){
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

$dataTest = array("tua", "terlalugemuk", " "); //pengetesan data
$Hipertensi = 1;
for($l=0; $l<2; $l++){
	if(($dataTest[$l] != $hipotesa[$l]) && ($hipotesa[$l] != "?")){
		$Hipertensi++;
	}
}

if ($Hipertensi == 1){
	$dataTest[2]="yes";
} else {
	$dataTest[2]="no";
}

echo "<br><br>data test : ";
for($z=0; $z<2; $z++){
	echo $dataTest[$z]." ";
}
echo "<br>saran : " .$dataTest[2];
?>