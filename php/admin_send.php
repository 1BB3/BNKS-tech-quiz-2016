<?php
  require "permissions.php";
  $per = new permissions();
  if ($_POST['first_send']){$per->current_question_number = 1;}else{$per->current_question_number++;}
  $per->user_who_will_play = $_POST['user_who_will_play'];
  $per->update();
?>
