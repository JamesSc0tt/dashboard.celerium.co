<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Dashboard - ERROR</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="css/main.css">
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
        <div id="breadcrumb"> <a href="home" title="Go to Home" class="tip-bottom">Home</a> <a href="gdpr" title="Go to GDPR" class="tip-bottom">ERROR</a></div>
      </div>
      <div class="container" style="padding-top:15px;">
        <h1>An error occured:</h1>
        <hr>
        <p><?php echo $error ?></p>
        <hr>
        <p><b>Error details:</b></p>
        <div class="gdpr_code">
          <?php echo $error_details ?>
        </div>
      </div>
      <?php include 'templates/footer.php'; ?>
    </body>
  </html>
