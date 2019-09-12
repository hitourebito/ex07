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