var min = 0, sec=60, timer; //set the variables to hold minutes, seconds and the timer object

$(document).ready(function () {
    $(".enabled").click(stopTimer); //whenEver any button is clicked, all the buttons should be disabled
});

function startTimer() {
    sec--; 
    $("#minute").text("00");  
    if (sec<10) sec = "0"+sec;
    $("#seconds").text(sec);
    
    if (sec == 0) {
        stopTimer();
    } else {
        setTimer();
    }
}

function stopTimer() {
    clearTimeout(timer);
    min = 0, sec = 60;
    $(".enabled").attr("disabled", "disabled");
}

function setTimer() {
    //initialize timer object: it controls the execution of the function - startTimer - each second
    timer = setTimeout("startTimer()", 1000); 
}
setTimer(); //*first point to start the Timer function