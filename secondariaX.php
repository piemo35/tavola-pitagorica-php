<!DOCTYPE html>
<html>
<body>
<h1> Sostituisco i valori della diagonale secondaria con una X </h1>
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
				if($colonna == $z && $riga == $x){
					echo '<td>';
					echo "X";
					echo '</td>';
					--$z;
					$x++;
				}else{
					$valore= $riga * $colonna;
                echo '<td>'; echo $valore; echo '</td>';
            }}
        echo '</tr>';
    }





/*$limite=10;
for($riga=1; $riga <= $limite; $riga++)
    {
        echo '<tr>';
        
            for($colonna=10;$colonna<=$limite;--$colonna)
            {
				//if($riga == $colonna){
					echo '<td>'; 
					echo "X";
					echo '</td>';
				/*}else{
                $valore= $riga * $colonna;
					echo '<td>'; 
					echo $valore;
					echo '</td>';

            }
        echo '</tr>';
    }*/
?>
</table>
</body>
</html>
