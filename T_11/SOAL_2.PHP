<?php
echo "<h3>Mencari Pasangan x + y + z = 25</h3>";

$jumlahPenyelesaian = 0;
$target = 25;

for ($x = 1; $x <= $target; $x++) {
    
    for ($y = 1; $y <= $target; $y++) {
        
        for ($z = 1; $z <= $target; $z++) {
            if (($x + $y + $z) == $target) {
                echo "x = $x, y = $y, z = $z <br/>";
                $jumlahPenyelesaian++;
            }
            
        }
    }
}

echo "<br/>";
echo "<b>Jumlah penyelesaian: " . $jumlahPenyelesaian . "</b>";
?>