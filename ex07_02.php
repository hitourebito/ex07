<?php 
  $tm = mktime($_POST["month"], $_POST["day"], $_POST["year"]);
  $weeks = array("日曜日", "月曜日", "火曜日", "水曜日", "木曜日", "金曜日", "土曜日");
  echo $_POST["year"], "年", $_POST["month"], "月", $_POST["day"], "日は、", $weeks[date(w, $tm)], "です";
  
?>