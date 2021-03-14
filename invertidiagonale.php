<!DOCTYPE html>
<html>
<head></head>
<body>
<h1> Inverto i valori della diagonale principale </h1>
<table border=1 cellpadding=5>

<?php
$limite=10;
$j=10;
for($riga=1; $riga <= $limite; $riga++)
    {
       // echo '<tr>';
        
            for($colonna=1;$colonna<=$limite;$colonna++)
            {
                $valore= $riga * $colonna;
                //echo '<td>'; 
                $matrice[$riga-1][$colonna-1]=$valore;
                

                //echo $matrice[$riga-1][$colonna-1];
                //echo '</td>';
            }
                for($i=0;$i<10;$i++){	
					$matrice[$i][$i]=$j*$j;
					--$j;
				}
			}
				
			for($i=0;$i<10;$i++){
				echo '<tr>';
				for($j=0;$j<10;$i++){
					echo '<td>';
					echo $matrice[$i][$j];
					echo '</td>';
					}
				echo '</tr>';
			}
        //echo '</tr>';
        //echo "\n";
    
//fclose($fp);
?>
</table>
</body>
</html>
