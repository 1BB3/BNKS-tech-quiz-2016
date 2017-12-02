<?php
  require "activities.php";
  $buckethead = json_decode(file_get_contents("../json/score.json"),true);
  $ubuntu = new activities();
  $ayurveda = array();
  $send_nothing = 0;
  if ($_POST['activity_number']==$ubuntu->activity_number) {$send_nothing = 1;} else {
    $ayurveda[0] = $ubuntu->activity_answer;
      if($ubuntu->score_update_user){
        $ayurveda[1] = $ubuntu->score_update_user;
        $ayurveda[2] = $buckethead[$ubuntu->score_update_user];
        }else{
          $ayurveda[1] = 0;
        }
  }
  if($send_nothing){}else{echo json_encode($ayurveda);}
  exit();
?>
