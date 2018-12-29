<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Dashboard - Home</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/maturi/bootstrap.min.css" />
    <link rel="stylesheet" href="css/maturi/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="css/maturi/fullcalendar.css" />
    <link rel="stylesheet" href="css/maturi/maruti-style.css" />
    <link rel="stylesheet" href="css/maturi/maruti-media.css" class="skin-color" />
  </head>
  <body>
    <!--top-Header-messaages-->
    <div class="btn-group rightzero"> <a class="top_message tip-left" title="Manage Files"><i class="icon-file"></i></a> <a class="top_message tip-bottom" title="Manage Users"><i class="icon-user"></i></a> <a class="top_message tip-bottom" title="Manage Comments"><i class="icon-comment"></i><span class="label label-important">5</span></a> <a class="top_message tip-bottom" title="Manage Orders"><i class="icon-shopping-cart"></i></a> </div>
    <!--close-top-Header-messaages-->
    <?php include 'templates/header.php';?>
    <div id="content">
      <div id="content-header">
        <div id="breadcrumb"> <a href="home" title="Go to Home" class="tip-bottom">Home</a> <a href="gdpr" title="Go to GDPR" class="tip-bottom">GDPR Information Request</a></div>
      </div>
      <div class="container" style="padding-top:15px;">
        <h1>GDPR JSON</h1>
        <p>With the new rulings, and for transparency, this system has been developed to show you all the information we have stored on you, in a nice JSON format you can parse in some application (in case you'd want to do that, I don't know why?).</p>
        <div class="gdpr_code">
          [ERROR] Module 'GDPR' has been disabled by an administrator for the following reason:<br>
          GDPR compliancy does not apply to this service, although as a sign of good will we are willing to work on this system once the other systems are ready to go. Please wait, until then if you REALLY want a copy of the information we have on you, contact a Superadmin.
        </div>
      </div>
      <?php include 'templates/footer.php'; ?>
    </body>
  </html>
