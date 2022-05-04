<?php
require_once __DIR__ . "../../../vendor/autoload.php";

define("PROJECT_ROOT_PATH", __DIR__ . "/../");

// include main configuration file
require_once PROJECT_ROOT_PATH . "/inc/config.php";

//include Helper
require_once PROJECT_ROOT_PATH . "/helper/Helper.php";

//include AuthController

require_once PROJECT_ROOT_PATH . "/Controller/AuthController.php";

//include blogcontroller
require_once PROJECT_ROOT_PATH . "/Controller/BlogController.php";

//include AuthorController
require_once PROJECT_ROOT_PATH . "/Controller/AuthorController.php";