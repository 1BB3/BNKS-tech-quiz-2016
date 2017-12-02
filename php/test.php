<?php
  $mappe = json_decode(file_get_contents("../json/score.json"),true);
  $mappe['gabs'] = "sanjeev";
  print_r($mappe);
  ?>
