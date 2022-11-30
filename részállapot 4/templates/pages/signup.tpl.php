<!DOCTYPE html>
<html>
    <head>
        <title>Regisztráció</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php if(isset($uzenet)) { ?>
            <h1><?= $uzenet ?></h1>
            <?php if($ujra) { ?>
                <a class="danger" href="index.php?oldal=registration">Try Again</a>
            <?php } ?>
            <a class="success" href="?oldal=mainpage">Main Page</a>
        <?php } ?>
    </body>  
</html>