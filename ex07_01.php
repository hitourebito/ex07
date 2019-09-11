<?php
  date_default_timezone_set("Asia/Tokyo");
  $tm = time();
  echo date("Y年n月j日 H時i分s秒(l)", $tm);
?>