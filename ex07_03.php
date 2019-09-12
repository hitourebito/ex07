<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Cache-Control" content="no-store">
  <meta http-equiv="Expires" content = "0">
  <title>ex07_03.php</title>
</head>
<body>
<?php //phpここから
  date_default_timezone_set("Asia/Tokyo");
  $errflg = 0;
  $errmsg = array();
  if ($_SERVER["REQUEST_METHOD"] === "POST") 
  {
    $month = $_POST["month"];
    $day = $_POST["day"];
    $tm = time();
    $yy = date("Y", $tm);
    $days = array("(日)", "(月)", "(火)", "(水)", "(木)", "(金)", "(土)");

//phpここまで ?>
</body>