<?php
$varT = 22;
$varG = 3;

echo "Tabel Perkalian 22 <br>";
echo ("==============");
echo ("<br>");

for ($i = 0; $i <22;$i++){
    echo "$varT x $varG";
    echo "  =   ";
    echo $hasil= $varT * $varG ;
    echo "<br>";

    $varG += 2;
}


?>