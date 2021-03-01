<?php
require_once "core/Autoload.php";
spl_autoload_register('Autoload::run');

Router::navigate();
