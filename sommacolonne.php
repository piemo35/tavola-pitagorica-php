<!DOCTYPE html>
<html>
<head></head>
<body>
<h1> Aggiuno una riga contenente le somme dei valori delle singole colonne </h1>
<table border=1 cellpadding=5>

<?php


$limite=10;
for($riga=1; $riga <= $limite; $riga++)
    {
        echo '<tr>';
        
            for($colonna=1;$colonna<=$limite;$colonna++)
            {
                $valore= $riga * $colonna;
                echo '<td>'; 
                $matrice[$riga-1][$colonna-1]=$valore;
                echo $matrice[$riga-1][$colonna-1];
                echo '</td>';
            }
        echo '</tr>';

    }
    
    echo '<tr>';
    for($i=0;$i<10;$i++){
		$somma[$i]=0;
	}
	
	    for($i=0;$i<10;$i++){
			for($j=0; $j<10; $j++){
		$somma[$i]=$somma[$i]+$matrice[$j][$i];

	}
		echo '<td>';
		echo $somma[$i];
		echo '</td>';
}
echo '</tr>';
?>
</table>
</body>
</html>
