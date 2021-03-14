<!DOCTYPE html>
<html>
<head></head>
<body>
<h1> Inverto i valori di ogni colonna </h1>
<table border=1 cellpadding=5>
<?php
$limite=1;
$limitecol=10;
for($riga=10; $riga >= $limite; --$riga)
    {
        echo '<tr>';
        
            for($colonna=1;$colonna<=$limitecol;$colonna++)
            {
                $valore= $riga * $colonna;
                echo '<td>'; echo $valore; echo '</td>';
            }
        echo '</tr>';
    }
?>
</table>
</body>
</html>
