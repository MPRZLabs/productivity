<?php

define("CORE_URL", "http://localhost/Productivity/");
define("CORE_NAME", "Productivity Incubator");
define("CORE_OWNER", "MPRZ Tech Labs");
if (strtolower(substr(constant("CORE_OWNER"), -1)) == "s") {
    define("CORE_NAMEWITHOWNER", constant("CORE_OWNER")."' ".constant("CORE_NAME"));
} else {
    define("CORE_NAMEWITHOWNER", constant("CORE_OWNER")."'s ".constant("CORE_NAME"));
}

define("CORE_INVENT_NAME", "Sparks");
define("CORE_INVENT_URL", "invent.php");

define("CORE_PROJECT_NAME", "Gunpowder");
define("CORE_PROJECT_URL", "project.php");

define("CORE_MAKE_NAME", "Flame");
define("CORE_MAKE_URL", "make.php");

define("CORE_RELEASE_NAME", "Cannon");
define("CORE_RELEASE_URL", "release.php");

define("TITLE_SEPARATOR", " - ");

?>
