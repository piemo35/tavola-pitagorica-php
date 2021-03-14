<!DOCTYPE html>
<html>
<head></head>
<body>
<h1> Matrice </h1>
<table border=1 cellpadding=5>

<?php


//$tavola = "tavola_periodica";
//touch($tavola);
//chmod($tavola, 0777);
//FILE* $fp;
//$fp=fopen("tavola_periodica","w");
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
        //echo "\n";
    }
//fclose($fp);
?>
</table>
</body>
</html>
