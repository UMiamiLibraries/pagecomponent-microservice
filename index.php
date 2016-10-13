<?php
/**
 * Created by PhpStorm.
 * User: cbrownroberts
 * Date: 10/13/16
 * Time: 12:08 PM
 */

include_once 'src/Uml/Pagecomponent/Render.php';

$objRender = new Render();
$cdn_url = 'http://pagecomponent-microservice.local/src/Uml/Pagecomponent/assets/views/dist/';
$header	= $objRender->render($cdn_url, 'header.html');
$navigation = $objRender->render($cdn_url, 'navigation.html');
$footer = $objRender->render($cdn_url, 'footer.html');
$socialmedia = $objRender->render($cdn_url, 'socialmedia.html');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link type="text/css" media="screen" rel="stylesheet" href="//library.miami.edu/wp-content/themes/umiami/css/pure-min.css">
    <link type="text/css" media="screen" rel="stylesheet" href="//library.miami.edu/wp-content/themes/umiami/css/grids-responsive-min.css">

    <link rel="stylesheet" type="text/css" media="all" href="http://library.miami.edu/wp-content/themes/umiami/style.css" />

</head>
<body>

<header>
    <?php echo $header;	?>
</header>
<nav id="navigation" role="navigation">
    <?php echo $navigation; ?>
</nav>
<section id="main" role="main">
    <?php echo $socialmedia; ?>
</section>
<footer>
    <?php echo $footer;	?>
</footer>
</body>
</html>