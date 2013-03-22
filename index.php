<?php
    require_once 'config.inc.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <?php require_once 'head.inc.php'; ?>
        <title><?php echo constant("CORE_NAME"); ?></title>
    </head>
    <body>
        <div class="container">
            <?php include_once 'menu.inc.php'; ?>
            <div class="hero-unit">
                <h1><?php echo constant("CORE_NAMEWITHOWNER"); ?></h1>
            </div>
            <div class="row" style="text-align: center;">
                <div class="span3">
                    <a class="btn btn-large btn-primary" href="invent.php"><?php echo constant("CORE_INVENT_NAME"); ?></a>
                </div>
                <div class="span3">
                    <a class="btn btn-large btn-primary" href="project.php"><?php echo constant("CORE_PROJECT_NAME"); ?></a>
                </div>
                <div class="span3">
                    <a class="btn btn-large btn-primary" href="make.php"><?php echo constant("CORE_MAKE_NAME"); ?></a>
                </div>
                <div class="span3">
                    <a class="btn btn-large btn-primary" href="release.php"><?php echo constant("CORE_RELEASE_NAME"); ?></a>
                </div>
            </div>
        </div>
    </body>
</html>
