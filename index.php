<?php

session_start();
require "controller/SnowsController.php";
require "controller/navigation.php";
require "controller/users.php";


if (isset($_GET['action'])) {
  $action = $_GET['action'];
  switch ($action) {
      case 'home' :
          home();
          break;
      case 'snows' :
          snows();
          break;
      case 'snow' :
          snow($_GET['code']);
          break;
      case 'login' :
          login($_POST);
      default :
          lost();
      }
    }
else {
    home();
}