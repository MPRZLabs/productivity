<?php
    require_once 'config.inc.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <?php require_once 'head.inc.php'; ?>
        <script type="text/javascript" src="keywordrandomizer.js"></script>
        <title><?php echo constant("CORE_NAME").constant("TITLE_SEPARATOR").constant("CORE_INVENT_NAME"); ?></title>
    </head>
    <body>
        <div class="container">
            <?php include_once 'menu.inc.php'; ?>
            <div class="hero-unit">
                <iframe class="pull-right" src="https://embed.spotify.com/?uri=<?php echo constant("CORE_INVENT_SPOTIURI"); ?>" width="300" height="380" frameborder="0" allowtransparency="true"></iframe>
                <h1><?php echo constant("CORE_INVENT_NAME"); ?></h1>
                <h1><small><?php echo constant("CORE_NAMEWITHOWNER"); ?></small></h3>
            </div>
            <div class="container">
                <div class="hero-unit">
                    <h2><?php echo constant("CORE_INVENT_KEYWORDRANDOMIZER_NAME"); ?></h2>
                    <a class="btn" href="javascript:void(0);" onClick="randomize();"><?php echo constant("CORE_INVENT_KEYWORDRANDOMIZER_ACTIONTEXT"); ?></a>
                    <br />
                    <br />
                    <span class="badge badge-success"><h1 id="randomizer" class="well-large">&nbsp;...&nbsp;</h1></span>
                </div>
            </div>
        </div>
    </body>
</html>
