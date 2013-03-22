<?php
    require_once 'config.inc.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <?php require_once 'head.inc.php'; ?>
        <title><?php echo constant("CORE_NAME").constant("TITLE_SEPARATOR").constant("CORE_INVENT_NAME"); ?></title>
    </head>
    <body>
        <div class="container">
            <?php include_once 'menu.inc.php'; ?>
            <div class="hero-unit">
                <h1><?php echo constant("CORE_INVENT_NAME"); ?></h1>
                <h3><?php echo constant("CORE_NAMEWITHOWNER"); ?></h3>
            </div>
            <div class="span2">
                <iframe src="https://embed.spotify.com/?uri=<?php echo constant("CORE_INVENT_SPOTIURI"); ?>" width="300" height="380" frameborder="0" allowtransparency="true"></iframe>
            </div>
            <div class="span10">
                
            </div>
        </div>
    </body>
</html>
