<?php

  $request = explode("/",strtolower($_SERVER['REQUEST_URI']));

  // Pages locked to login
  $locked_pages = Array('index');

  // Request variables
  $request_page = $request[1];
  $request_arg1 = $request[2];
  $request_arg2 = $request[3];
  $request_arg3 = $request[4];

  if (!$request_page or $request_page == '' or $request_page == 'index') {
    $request_page = 'home';
  }

  if (in_array($request_page, $locked_pages)) {
    pass;
  } else {
    if (!file_exists('templates/pages/'.$request_page.'.php')) {
      include('templates/pages/404.php');
    } else {
      include('templates/pages/'.$request_page.'.php');
    }
  }
