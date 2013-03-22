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
                <div style="float: right;"><iframe src="https://embed.spotify.com/?uri=<?php echo constant("CORE_INVENT_SPOTIURI"); ?>" width="300" height="150" frameborder="0" allowtransparency="true"></iframe></div>
                <h1><?php echo constant("CORE_INVENT_NAME"); ?></h1>
                <h1><small><?php echo constant("CORE_NAMEWITHOWNER"); ?></small></h3>
            </div>
            <div class="hero-unit">
                <div class="badge badge-success" style="float:right;"><h1 id="randomizer" class="well-large" style="text-align: right;">&nbsp;...&nbsp;</h1></div>
                <h2><?php echo constant("CORE_INVENT_KEYWORDRANDOMIZER_NAME"); ?></h2>
                <a class="btn" href="javascript:void(0);" onClick="randomize();"><?php echo constant("CORE_INVENT_KEYWORDRANDOMIZER_ACTIONTEXT"); ?></a>
            </div>
        </div>
    </body>
</html>
