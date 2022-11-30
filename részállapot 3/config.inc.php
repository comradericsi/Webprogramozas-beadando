<?php 

$pages = array(
    'main page'=>array('file'=>'mainpage','text'=>'Main Page','nav'=>array(1,1)),
    'our work'=> array('file'=>'our_work','text'=>'Our Work','nav'=>array(1,1)),
    'gallery'=>array('file'=>'gallery','text'=>'Gallery','nav'=>array(1,1)),
    'donate'=>array('file'=>'donate','text'=>'Donate','nav'=>array(1,1)),
    'contact'=>array('file'=>'contact','text'=>'Kapcsolat','nav'=>array(1,1)),
    'registration'=>array('file'=>'registration','text'=>'Sign In','nav'=>array(1,1)),
    'table'=>array('file'=>'table','text'=>'Table','nav'=>array(1,1)),
    'signup'=>array('file'=>'signup','text'=>'','nav'=>array(0,0)),
    'signin'=>array('file'=>'signin','text'=>'','nav'=>array(0,0)),
    'upload'=>array('file'=>'upload','text'=>'','nav'=>array(0,0)),
    'data'=>array('file'=>'data','text'=>'','nav'=>array(0,0))
);

$ablakcím = array(
    'cím'=>'National Wildlife Federation.'
);

$header = array(
    
    'title'=>'National Wildlife Federation'
);

$footer = array(
    'copyright'=>'Copyright'.date("Y").'.',
    'org'=>'National Wildlife Federation.'
);

$error_page = array( 'file'=>'404','text' =>'404 Page not Found!'  );

$MAPPA = './images/';
$TIPUSOK = array ('.jpg', '.png');
$MEDIATIPUSOK = array('image/jpeg', 'image/png');
$DATUMFORMA = "Y.m.d. H:i";
$MAXMERET = 500*1024;


?>
