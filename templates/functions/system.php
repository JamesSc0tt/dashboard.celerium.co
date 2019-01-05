<?php
  function DB_CONN() {
    $servername = "celeriumgaming.com";
    $username = "celery_web";
    $password = "dwRmrQAOHtDGCaMW";
    $dbname = "celerium_dashboard";
    try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    return $conn;
  }

  function GetSettings() {
    $dbconnection = DB_CONN();
    $statement = $dbconnection->query("SELECT * FROM db_settings");
    return $statement->fetchAll();
  }

  function GetSetting($name) {
    $dbconnection = DB_CONN();
    $statement = $dbconnection->query("SELECT * FROM db_settings WHERE `set_name` = '$name'");
    return $statement->fetchAll()[0]['set_value'];
  }

  function ErrorHandler($errno, $errstr) {

  }
?>
