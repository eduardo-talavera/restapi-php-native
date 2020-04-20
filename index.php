<?php

require_once "controllers/routes.controller.php";
require_once "controllers/customers.controller.php";
require_once "controllers/courses.controller.php";

require_once "models/courses.model.php";
require_once "models/customers.model.php";

$routes = new RoutesController();

$routes->index();