<!DOCTYPE html>
<html>
<head></head>
<body>
<h1> Aggiungo una colonna contenente la somma dei valori delle singole righe</h1>
<table border=1 cellpadding=5>
	

<?php
$limite=11;

$somma = 0;

for($riga=1; $riga <= $limite; $riga++)
    {
      
        if($riga < 11){
			echo '<tr>';
			}else{
				break;
				} 

            for($colonna=1;$colonna<=$limite;$colonna++)
            {
				$valore = $riga * $colonna;
				if ($colonna == 11){
					
					echo '<td>'; 
					echo $somma; 
					echo '</td>';
					$somma=0;
					
				}else{
                $valore= $riga * $colonna;
                $somma = $somma+$valore;
                echo '<td>'; echo $valore; echo '</td>';
            }}
        if($riga < 11){echo '</tr>';} 
    }
?>



</table>
</body>
</html>
