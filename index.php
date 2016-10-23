<?php

/*
 * ----------------------------------------
 *  Initial file location server Apache/PHP
 * ----------------------------------------
 *
 * @author:  Estefanio NS <estefanions AT gmail DOT net> 
 * @url:     http://estefanio.com.br
 *
 */
$folders    = array(); 
$files      = array(); 

$pointer = opendir(getcwd());
$notInArr = array('.', '..', 'index.php', 'indexhtdocs');

while ($row = readdir($pointer)) 
{
    $itens[] = $row;
}
sort($itens);


foreach ($itens as $list) 
{
    if (!in_array($list, $notInArr)) 
    {

        if (is_dir($list)) 
        { 
            $folders[] = $list; 
        } 
        else 
        { 
            $files[] = $list; 
        }
    }
}




?><!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="/indexhtdocs/public/css/style.min.css" type="text/css" media="all" />
        <title>Htdocs</title>
    </head>
<body>


<div class="container">
<div class="fold">
    php: <?php echo phpversion(); ?>
</div>

<?php if(count($folders)){ ?>
<div class="fold">
    <div class="wg12">
        <h1>Folders</h1>
    </div>
    <div class="row">
<?php for($i = 0; $i < count($folders); $i++){ ?>
        <div class="wg_phone12 wg_tablet6 wg_mobile4 wg3">
            <a class="lk_primary" href="/<?php echo $folders[$i]; ?>"><?php echo $folders[$i]; ?></a>
        </div>
<?php } ?>
    </div>
</div>
<?php } ?>



<?php if(count($files)){ ?>
<div class="fold">
    <div class="wg12">
        <h1>Files</h1>
    </div>
    <div class="row">
<?php for($i = 0; $i < count($files); $i++){ ?>
        <div class="wg_phone12 wg_tablet6 wg_mobile4 wg3">
            <a class="lk_dark" href="/<?php echo $files[$i]; ?>"><?php echo $files[$i]; ?></a>
        </div>
<?php } ?>
    </div>
</div>
<?php } ?>



<div class="fold">
    <div class="wg12">
        <h1>Extensions</h1>
    </div>
    <div class="row">
<?php foreach(get_loaded_extensions() as $extension){ ?>
        <div class="wg_phone12 wg_tablet6 wg_mobile4 wg3">
            <?php echo $extension; ?>
        </div>
<?php } ?>
    </div>
</div>




</div>

    <script type="text/javascript" src="https://code.jquery.com/jquery-latest.js"></script>
    <script type="text/javascript" src="public/js/script.js"></script>
<!--[if lt IE 9]>
    <script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</body>
</html>
