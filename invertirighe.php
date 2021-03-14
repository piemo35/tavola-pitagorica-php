<!DOCTYPE html>
<html>
<head></head>
<body>
<h1> Inverto i valori di ogni riga</h1>
<table border=1 cellpadding=5>
<?php
$limite=10;
$limitecol=1;
for($riga=1; $riga <= $limite; $riga++)
    {
        echo '<tr>';
        
            for($colonna=10;$colonna>=$limitecol;--$colonna)
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
