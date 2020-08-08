<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

    require_once 'libs/scss.inc.php';

    use ScssPhp\ScssPhp\Compiler;

    $scss = new Compiler();

    $scss->setImportPaths('sass/');

    $styles = $scss->compile('@import "styles.scss";');

    $css = fopen('css/styles.css','w');
    
    fwrite($css,$styles);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo $url_path ?>/css/styles.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/libs/fontawesome-free-5.13.0-web/css/all.min.css" rel="stylesheet"/>
    
    <link href="<?php echo $url_path ?>/libs/family-font/Roboto-Black.ttf" rel="stylesheet"/>
    
    <script src="<?php echo $url_path ?>/js/jquery-3.5.1.min.js"></script>
    <link href="<?php echo $url_path ?>/libs/swiper-5.4.1/package/css/swiper.min.css" rel="stylesheet" />
    <script src="<?php echo $url_path ?>/libs/swiper-5.4.1/package/js/swiper.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/scripts.js"></script>
    <title>Document</title>
    
</head>
<body>
   <?php
     include "./89-content.php";
   ?>
</body>
</html>