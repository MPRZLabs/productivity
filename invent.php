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
            <div class="row" style="text-align: center;">
                <div class="span3">
                    <a class="btn btn-large btn-primary" href="<?php echo constant("CORE_URL").constant("CORE_INVENT_URL"); ?>"><?php echo constant("CORE_INVENT_NAME"); ?></a>
                </div>
                <div class="span3">
                    <a class="btn btn-large btn-primary" href="<?php echo constant("CORE_URL").constant("CORE_PROJECT_URL"); ?>"><?php echo constant("CORE_PROJECT_NAME"); ?></a>
                </div>
                <div class="span3">
                    <a class="btn btn-large btn-primary" href="<?php echo constant("CORE_URL").constant("CORE_MAKE_URL"); ?>"><?php echo constant("CORE_MAKE_NAME"); ?></a>
                </div>
                <div class="span3">
                    <a class="btn btn-large btn-primary" href="<?php echo constant("CORE_URL").constant("CORE_RELEASE_URL"); ?>"><?php echo constant("CORE_RELEASE_NAME"); ?></a>
                </div>
            </div>
        </div>
    </body>
</html>
