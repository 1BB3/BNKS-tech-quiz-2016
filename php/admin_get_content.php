<?php
  require "permissions.php";
  $per = new permissions();
  if ($_POST['first_send']){$per->current_question_number = 0;}
  $question_number = $per->current_question_number + 1;
  require "content.php";
?>
