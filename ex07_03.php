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

    if ($month === "" || $day === "") 
    {
      $errflg += 1;
      $errmsg[] = "入力箇所には数字を入力してください";
    } 
    elseif (!is_numeric($month) || !is_numeric($day)) 
    {
      $errflg += 1;
      $errmsg[] = "入力箇所には数字を入力してください";
    }
    elseif (!checkdate($month, $day, $yy)) 
    {
      $errflg += 1;
      $errmsg[] = "正しい日付を入力してください"; 
    }
  }

  if ($_SERVER["REQUEST_METHOD"] === "POST" && $errflg === 0) 
  {
    $birthday = mktime(0, 0, 0, $month, $day, $yy);

    if ($tm > $birthday) 
    {
      for ($i=1; $i <= 5; $i++) 
      { 
        $birthday = mktime(0, 0, 0, $month, $day, $yy + $i);
        echo $i,"回目:", date("Y", $tm) + $i, "/", $month, "/", $day, $days[date("w", $birthday)], "<br/>";
      }
    } 
    else if ($tm < $birthday) 
    {
      for ($i=1; $i <= 5; $i++) 
      { 
        echo $i,"回目:", date("Y", $tm) + $i - 1, "/", $month, "/", $day, $days[date("w", $birthday)], "<br/>";
        $birthday = mktime(0, 0, 0, $month, $day, $yy + $i);
      }
    }
  }
  else 
  { 
    foreach ($errmsg as $value) 
    {
      echo $value, "<br/>";
    }
//phpここまで ?>
</body>