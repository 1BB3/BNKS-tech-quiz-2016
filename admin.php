<html>
    <head>
<!--styles-->
        <link rel="stylesheet" href="theme.css">
        <link rel="stylesheet" href="assets/Bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/animate.css">
<!--scripts-->
        <script src="assets/jquery/jquery.min.js"></script>
        <script src="assets/Bootstrap/js/bootstrap.min.js"></script>
        <script src="js/admin.js"></script>
<!--end-->
   <title>MCQ for BNKS</title>
    </head>
    <body>
<!--
       ques-cl : question class
       ans-cl : answer class
       --more
-->
       <div class="msg modal text-success h1">Hello and welcome</div>
<!--       message-->
        <div class="container">
            <div class="row">
            <div class="quiz-and-control col-sm-12 col-md-12 col-lg-12">
              <div id="main" class="col-sm-12 col-md-12 col-lg-12 quiz">
              </div>
            <!-- So you know below is the control (search for end 1)-->
                  <div class="col-sm-12 col-md-12 col-lg-12 control">
                        <!-- <input type="text" id="select_user"></input> -->

                        <?php
                          $haikyuu = json_decode(file_get_contents("json/score.json"),true);
                          foreach ($haikyuu as $user => $score) {
                          echo "<div class='col-xs-6 col-sm-3 col-md-3 col-lg-3'>";
                          echo "<div id='user' class='director hand-cursor'>";
                          echo $user;
                          echo "</div>";
                          echo "</div>";
                          }
                        ?>

                  </div>
                  <div class="col-sm-12 col-md-12 col-lg-12 load-and-send">
                          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <div id="load" class="load-button hand-cursor">
                            load
                            </div>
                          </div>
                           <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <div id="send" class="send-button hand-cursor">
                            send
                            </div>
                          </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                   <div id="show-correct-answer" class="show-correct-answer-button hand-cursor">
                   Show correct answer
                   </div>
                 </div>
                                        <!-- end:1 -->
            </div>

            <!-- <div class="col-sm-4 col-md-4 col-lg-4 score">
              <div class="main-card animated bounce">
              Scores
              </div>
           </div> -->
           </div>

        </div>
    </body>
</html>
