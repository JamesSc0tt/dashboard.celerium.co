<?php
  require 'steamauth/steamauth.php';
  if(!isset($_SESSION['steamid'])) {
    $logged = false;
  } else {
    $logged = true;
    include ('steamauth/userInfo.php');
  }
  $request = explode("/",strtolower($_SERVER['REQUEST_URI']));

  // Pages locked to login
  $locked_pages = Array('home', 'applications', 'bans', 'warnings', 'appeals', 'users', 'system', 'gdpr');

  // Request variables
  $request_page = $request[1];
  $request_arg1 = $request[2];
  $request_arg2 = $request[3];
  $request_arg3 = $request[4];

  if (!$request_page or $request_page == '' or $request_page == 'index 'or $request_page == 'logout') {
    $request_page = 'home';
  }

  if (in_array($request_page, $locked_pages)) {
    if ($logged) {
      if (!file_exists('templates/pages/'.$request_page.'.php')) {
        header('Location: http://dashboard.celerium.co/404');
        //include('templates/pages/404.php');
      } else {
        include('templates/pages/'.$request_page.'.php');
      }
    } else {
      header('Location: http://dashboard.celerium.co/login');
    }
  } else {
    if (!file_exists('templates/pages/'.$request_page.'.php')) {
      header('Location: http://dashboard.celerium.co/404');
      //include('templates/pages/404.php');
    } else {
      include('templates/pages/'.$request_page.'.php');
    }
  }
