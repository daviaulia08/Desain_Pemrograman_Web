<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <h2>Array Terindeks</h2>

        <?php
            $listDosen=["Elok Nur Hamdana", "Unggul Pamenang", "Bagas Nugraha"];
            echo $listDosen[2] , "<br>";
            echo $listDosen[0] , "<br>";
            echo $listDosen[1] , "<br>";
            echo "<br>";

            foreach ($listDosen as $list) {
                echo $list , "<br>";
            }
        ?>
      
    <body>
</html>