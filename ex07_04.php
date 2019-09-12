<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Cache-Control" content="no-store">
  <meta http-equiv="Expires" content = "0">
  <title>ex07_04.php</title>
</head>
<body>
<?php //phpここから
  if ($_SERVER["REQUEST_METHOD"] == "POST") 
  {
    if (count($_POST["require_value"])) 
    {
      date_default_timezone_set("Asia/Tokyo");
      $tm = time();
      echo "日本:", date("Y/m/d/ A g:i:s", $tm), "<br/>";

      foreach ($_POST["require_value"] as $value) 
      {
        switch ($value) 
        {
          case 'イースター島':
            date_default_timezone_set("Pacific/Easter");
            $tm = time();
            echo $value, date("Y/m/d/ A g:i:s", $tm), "<br/>";
            break;
          case 'モルディブ':
            date_default_timezone_set("Indian/Maldives");
            $tm = time();
            echo $value, date("Y/m/d/ A g:i:s", $tm), "<br/>";
            break;
          case 'ローマ':
            date_default_timezone_set("Europe/Rome");
            $tm = time();
            echo $value, date("Y/m/d/ A g:i:s", $tm), "<br/>";
            break;
          case 'モスクワ':
            date_default_timezone_set("Europe/Moscow");
            $tm = time();
            echo $value, date("Y/m/d/ A g:i:s", $tm), "<br/>";
            break;
          case 'シドニー':
            date_default_timezone_set("Australia/Sydney");
            $tm = time();
            echo $value, date("Y/m/d/ A g:i:s", $tm), "<br/>";
            break;
          case 'シンガポール':
            date_default_timezone_set("Asia/Singapore");
            $tm = time();
            echo $value, date("Y/m/d/ A g:i:s", $tm), "<br/>";
            break;
          case '平壌':
            date_default_timezone_set("Asia/Pyongyang");
            $tm = time();
            echo $value, date("Y/m/d/ A g:i:s", $tm), "<br/>";
            break;
          default:
            date_default_timezone_set("Asia/Tokyo");
            $tm = time();
            echo $value, date("Y/m/d/ A g:i:s", $tm), "<br/>";
            break;
        }
      }
    } else 
    {
      date_default_timezone_set("Asia/Tokyo");
      $tm = time();
      echo "日本:", date("Y/m/d/ A g:i:s", $tm);
    }
  } else {
//phpここまで ?>
  <form action="<?= $_SERVER["SCRIPT_NAME"]?>" method="POST">
    <div>時刻を表示したい地域:<br/> 
      <input type="checkbox" name="require_value[]" value="イースター島">イースター島<br/>
      <input type="checkbox" name="require_value[]" value="モルディブ">モルディブ<br/>
      <input type="checkbox" name="require_value[]" value="ローマ">ローマ<br/>
      <input type="checkbox" name="require_value[]" value="モスクワ">モスクワ<br/>
      <input type="checkbox" name="require_value[]" value="シドニー">シドニー<br/>
      <input type="checkbox" name="require_value[]" value="シンガポール">シンガポール<br/>
      <input type="checkbox" name="require_value[]" value="平壌">平壌<br/><br/>
    </div>
    <input type="submit" name="btn" value="送信">
  </form>
<?php } 
  
?>
</body>