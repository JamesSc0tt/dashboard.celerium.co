<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Dashboard - Home</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://dashboard.celerium.co/css/maturi/bootstrap.min.css" />
    <link rel="stylesheet" href="https://dashboard.celerium.co/css/maturi/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="https://dashboard.celerium.co/css/maturi/fullcalendar.css" />
    <link rel="stylesheet" href="https://dashboard.celerium.co/css/maturi/maruti-style.css" />
    <link rel="stylesheet" href="https://dashboard.celerium.co/css/maturi/maruti-media.css" class="skin-color" />
  </head>
  <body>
    <!--top-Header-messaages-->
    <div class="btn-group rightzero"> <a class="top_message tip-left" title="Manage Files"><i class="icon-file"></i></a> <a class="top_message tip-bottom" title="Manage Users"><i class="icon-user"></i></a> <a class="top_message tip-bottom" title="Manage Comments"><i class="icon-comment"></i><span class="label label-important">5</span></a> <a class="top_message tip-bottom" title="Manage Orders"><i class="icon-shopping-cart"></i></a> </div>
    <!--close-top-Header-messaages-->
    <?php include 'templates/header.php';?>
    <div id="content">
      <div id="content-header">
        <div id="breadcrumb"> <a href="home" title="Go to Home" class="tip-bottom">Home</a> <a href="applications">Applications</a></div>
      </div>
      <?php
        if (!$request_arg1) {
          echo 'Viewing applications for: '.$steamprofile['steamid'];
        } elseif ($request_arg1 == 'new') {
          echo 'Creating new application for: '.$steamprofile['steamid'];
        } elseif ($request_arg1 == 'moderation') {
          echo 'Viewing all applications in section: moderation';
        } elseif ($request_arg1 == 'review') {
          echo 'Viewing all applications in section: review';
        } elseif ($request_arg1 == 'all') {
          echo 'Viewing all applications in section: *';
        }
      ?>
    </div>
    <?php include 'templates/footer.php'; ?>
  </body>
</html>
