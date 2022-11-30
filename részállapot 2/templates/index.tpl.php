<?php session_start(); ?>
<?php if(file_exists('./logicals/'.$keres['file'].'.php')) { include("./logicals/{$keres['file']}.php");} ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?= $ablakcím['cím']?></title>
    <link rel="stylesheet" href="./styles/style.css" type="text/css">
    <?php if(file_exists('./styles/'.$keres['file'].'.css')) { ?><link rel="stylesheet" href="./styles/<?= $keres['file']?>.css" type="text/css"><?php } ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
    <header>
        <h2 class="text-light bg-dark "><?= $header['title']?></h1>
    </header>
    <nav class="navbar navbar-expand bg-light">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <?php foreach ($pages as $url => $page) { ?>
                    <?php if(! isset($_SESSION['login']) && $page['nav'][0] || isset($_SESSION['login']) && $page['nav'][1]) { ?>
						<li<?= (($page == $keres) ? ' class="nav-item"' : '') ?>>
						<a class="nav-link" href="<?= ($url == '/') ? '.' : ('?oldal=' . $url) ?>">
						<?= $page['text'] ?></a>
						</li>
                    <?php } ?>        
                <?php } ?>
            </ul>
        </div>
    </nav>
    <div>
        <?php include("./templates/pages/{$keres['file']}.tpl.php");?>
    </div>
    <footer>
        <?php if(isset($footer['copyright'])) { ?>&copy;&nbsp;<?=$footer['copyright'] ?> <?php } ?>
        <?=$footer['org'] ?>
    </footer>
</body>



</html>