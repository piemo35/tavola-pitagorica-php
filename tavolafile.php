<?php


$tavola = "tavola_periodica";
touch($tavola);
chmod($tavola, 0777);

$fp=fopen("tavola_periodica","w");
$limite=10;
for($riga=1; $riga <= $limite; $riga++)
    {
        //echo '<tr>';
        
            for($colonna=1;$colonna<=$limite;$colonna++)
            {
                $valore= $riga * $colonna;
                //echo '<td>'; 
                fprintf($fp, $valore);
                //echo
                //echo '</td>';
            }
        //echo '</tr>';
        fprintf($fp, "\n");
    }
fclose($fp);
?>
