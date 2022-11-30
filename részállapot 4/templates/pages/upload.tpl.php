<?php

    include('config.inc.php');

    $uzenet = array();   
    //kép ellenőrzés
    if (isset($_POST['Send'])) {
            
        foreach($_FILES as $fajl) {
            if ($fajl['error'] == 4);   // Nem töltött fel fájlt
            elseif (!in_array($fajl['type'], $MEDIATIPUSOK))
                $uzenet[] = " Nem megfelelő típus: " . $fajl['name'];
            elseif ($fajl['error'] == 1   // A fájl túllépi a php.ini -ben megadott maximális méretet
                        or $fajl['error'] == 2   // A fájl túllépi a HTML űrlapban megadott maximális méretet
                        or $fajl['size'] > $MAXMERET) 
                $uzenet[] = " Túl nagy állomány: " . $fajl['name'];
            else {
                $vegsohely = $MAPPA.strtolower($fajl['name']);
                if (file_exists($vegsohely))
                    $uzenet[] = " Már létezik: " . $fajl['name'];
                else {
                    move_uploaded_file($fajl['tmp_name'], $vegsohely);
                    $uzenet[] = ' Ok: ' . $fajl['name'];
                }
            }
        }        
    }
?>
<div class="container text-center">

    <?php
        if (!empty($uzenet))
        {
            echo '<ul>';
            foreach($uzenet as $u)
                echo "<li>$u</li>";
            echo '</ul>';
        }
    ?>

    <h1>Gallery</h1>
    <form action="?oldal=upload" method="post">
        <p>Want to add your own picture?</p><input type="file" name="image"><input type="submit" name="Send">

    </form>
    
</div>