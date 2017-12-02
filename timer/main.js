var min = 0,
    secInitial = 20,
    sec = secInitial,
    timer; //set the variables to hold minutes, seconds and the timer object#
var progressCall = true;
var circum = Math.floor(2 * Math.PI * 60)+7;
var offsetValueCounter = circum/secInitial, offsetValue = offsetValueCounter;

var colorCounter = Math.floor(256/secInitial);
var blueValue=255, greenValue=0, redValue=0, increaseGreen=true;  

$(document).ready(function() {
    $("#seconds").text(secInitial);
    $(".enabled").click(stopTimer); //whenEver any button is clicked, all the buttons should be disabled
});

function startTimer() {
    sec--;
    progressTime();
    if (sec < 10) sec = "0" + sec;
    $("#seconds").text(sec);
    if (sec == 0) {
        stopTimer();
    }
    changeColor();
    
}

function changeColor() {
    
    if(sec == Math.floor(secInitial/1.5)){
        $("#seconds").css({
            'fill':'orange',
            'transition': 'all 1s linear'
        });
        $("#mainCircle").css({
            'stroke':'orange',
            'transition': 'all 1s linear'
        });    
    }
    if(sec == Math.floor(secInitial/3)){
        $("#seconds").css({
            'fill':'rgb(255,100,100)',
            'transition': 'all 1s linear'
        });
        $("#mainCircle").css({
            'stroke':'rgb(255,100,100)',
            'transition': 'all 1s linear'
        });
    }
    if(sec == 4){
        $("#seconds").css({
            'fill':'rgb(225,0,0)',
            'transition': 'all 1s linear'
        });
        $("#mainCircle").css({
            'stroke':'rgb(225,0,0)',
            'transition': 'all 1s linear'
        });
    }
}

function stopTimer() {
    clearInterval(timer);
    min = 0, sec = 60;
    $(".enabled").attr("disabled", "disabled");
}

function setTimer() {
    //initialize timer object: it controls the execution of the function - startTimer - each second
    timer = setInterval("startTimer()", 1000);
}
setTimer(); //*first point to start the Timer function

function progressTime() {
//    $('.circleFill').attr('class', 'circleFill filled');
    $("#mainCircle").css({
        'stroke-dashoffset':offsetValue,
        'transition':'all 1s linear'
    });
    offsetValue+=offsetValueCounter;
}









