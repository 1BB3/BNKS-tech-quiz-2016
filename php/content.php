<?php
  require_once "define_mcq.php";
  $gabs = new mcq($question_number);
  $gabs->randomize();
  $isdisabled = ($_POST['user']==$per->user_who_will_play)? $isdisabled = "enabled" : $isdisabled = "disabled";
?>


    <div class=" like-main-card animated bounceInDown col-sm-12 col-md-12 col-lg-12">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="ques-card card">
                    <span class="question"><? echo $gabs->question."?" ;?></span>
                </div>
            </div>
        </div>
        <div class="row answers-card">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div id="<? echo str_replace(" ","-",$gabs->option_1);?>" class="card choose-card <?echo $isdisabled;?>">
                    <span class="option_1"><? echo $gabs->option_1 ;?></span>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div id="<? echo str_replace(" ","-",$gabs->option_2);?>" class="card choose-card <?echo $isdisabled;?>">
                    <span class="option_2"><? echo $gabs->option_2 ;?></span>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div id="<? echo str_replace(" ","-",$gabs->option_3);?>" class="card choose-card <?echo $isdisabled;?>">
                    <span class="option_3"><? echo $gabs->option_3 ;?></span>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div id="<? echo str_replace(" ","-",$gabs->option_4);?>" class="card choose-card <?echo $isdisabled;?>">
                    <span class="option_4"><? echo $gabs->option_4 ;?></span>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div id="<? echo str_replace(" ","-",$gabs->option_5);?>" class="card choose-card <?echo $isdisabled;?>">
                    <span class="option_5"><? echo $gabs->option_5 ;?></span>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div id="<? echo str_replace(" ","-",$gabs->option_6);?>" class="card choose-card <?echo $isdisabled;?>">
                    <span class="option_6"><? echo $gabs->option_6 ;?></span>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="circle">
                    <svg>
                        <g>
                            <circle cx="50%" cy="50%" r="60" id="ghostCircle">
                            </circle>
                            <circle cx="50%" cy="50%" r="60" id="mainCircle">
                            </circle>
                            <text  id="seconds" x="44%" y="58%" font-family="Verdana" font-size="35px" fill="black" >
                                <!-- <tspan id="seconds"></tspan> -->
                            </text>
                        </g>
                    </svg>
                </div>
            </div>

        </div>
    </div>
