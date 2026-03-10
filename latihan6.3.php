<?php

$data = [
    ["nama" => "Sukma", "nilai" => 90],
    ["nama" => "Rina", "nilai" => 75],
    ["nama" => "Budi", "nilai" => 80]
];

echo "<table border= '10'>";
echo "<tr><th>nama</th><th>nilai</th></tr>";

foreach($data as $d){
    echo "<tr>";
    echo "<td>".$d["nama"]."</td>";
    echo "<td>".$d["nilai"]."</td>";
    echo "</tr>";
}

echo "</table>";

?>