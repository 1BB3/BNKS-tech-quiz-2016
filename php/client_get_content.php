<?php
  require "permissions.php";
  $per = new permissions();
  $question_number = $per->current_question_number;
  ($_POST['question_number']==$per->current_question_number)?:require "content.php";
?>
