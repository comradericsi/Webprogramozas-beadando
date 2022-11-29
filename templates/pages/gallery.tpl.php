<?php
//kép beolvasás

include('config.inc.php');

    $kepek = array();
    $olvaso = opendir($MAPPA);
    while (($fajl = readdir($olvaso)) !== false)
        if (is_file($MAPPA.$fajl)) {
            $vege = strtolower(substr($fajl, strlen($fajl)-4));
            if (in_array($vege, $TIPUSOK))
                $kepek[$fajl] = filemtime($MAPPA.$fajl);            
        }
    closedir($olvaso);
?>

<div class="container text-center">
    <h1>Gallery</h1>
    
        <p>Want to add your own picture?</p><a href="?oldal=upload">click here</a>
    
    <div class="mb-3 m-4">
    <?php
    arsort($kepek);
    
    foreach($kepek as $fajl => $datum)
    {
    ?>
        <a href="<?php echo $MAPPA.$fajl ?>">
            <img class="m-4" width="300" height="300" src="<?php echo $MAPPA.$fajl ?>">
        </a>            
    <?php
    }
    ?>
    </div>
</div>