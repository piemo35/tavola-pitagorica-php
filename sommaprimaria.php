<!DOCTYPE html>
<html>
	<body>
<h1> Sommo i valori della diagonale primaria </h1>
<table border=1 cellpadding=5>

<?php
$limite=10;
$somma = 0;
for($riga=1; $riga <= $limite; $riga++)
    {
        echo '<tr>';
        
            for($colonna=1;$colonna<=$limite;$colonna++)
            {
				if($riga == $colonna){
					$valore = $riga * $colonna;
					echo '<td>'; 
					echo $valore;
					echo '</td>';
					$somma = $somma+$valore;
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
<?php
echo "La somma dei valori della diagonale principale equivale a ".$somma; 
?>
</body>
</html>
