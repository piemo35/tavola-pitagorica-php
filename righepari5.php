<!DOCTYPE html>
<html>
<body>
<h1> Incremento i valori della righe pari di 5</h1>
<table border=1 cellpadding=5>

<?php

$limite=10;
$x = 1;
$z = 10;
for($riga=1; $riga <= $limite; $riga++)
    {
        echo '<tr>';
        
            for($colonna=1;$colonna<=$limite;$colonna++)
            {
				if($riga%2 == 0){
					$valore= $riga * $colonna;
					echo '<td>';
					echo $valore+5;
					echo '</td>';
				}else{
					$valore= $riga * $colonna;
					echo '<td>'; 
					echo $valore; 
					echo '</td>';
            }}
        echo '</tr>';
    }
?>
</table>
</body>
</html>
