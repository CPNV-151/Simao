<?php

session_start();
require "controller/SnowsController.php";
require "controller/navigation.php";


if (isset($_GET['action'])) {
  $action = $_GET['action'];
  switch ($action) {
      case 'home' :
          home();
          break;
      case 'snows' :
          snows();
          break;
      default :
          lost();
      }
    }
else {
    home();
}