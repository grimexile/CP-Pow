
$(document).ready(function(){
	"use strict";
    // counter
    var end = new Date('04/28/2023 10:30 PM');

    var _second = 1000;
    var _minute = _second * 60;
    var _hour = _minute * 60;
    var _day = _hour * 24;
    var timer;

    function showRemaining() {
        var now = new Date();
        var distance = end - now;
        if (distance < 0) {
            clearInterval(timer);
            document.getElementById('countdown').innerHTML = 'EXPIRED!';
            return;
        }
        var days = Math.floor(distance / _day);

        if(days==0){
        var sub_days='';
        }else if(days==1){
        var sub_days=' day, ';
        }else{
        var sub_days=' days, ';
        }
        var hours = Math.floor((distance % _day) / _hour);
        // var minutes = Math.floor((distance % _hour) / _minute);
        if(Math.floor((distance % _hour) / _minute)<10){
            var minutes = "0"+Math.floor((distance % _hour) / _minute);
        }else{
            var minutes = Math.floor((distance % _hour) / _minute);
        }

        if(Math.floor((distance % _minute) / _second)<10){
            var seconds = "0"+Math.floor((distance % _minute) / _second);
        }else{
            var seconds = Math.floor((distance % _minute) / _second);
        }
        
        if(days==0){
        document.getElementById('countdown').innerHTML = '';
        }else{
        document.getElementById('countdown').innerHTML = days + sub_days;
        }
        
        document.getElementById('countdown').innerHTML += hours + ':';
        document.getElementById('countdown').innerHTML += minutes + ':';
        document.getElementById('countdown').innerHTML += seconds + '';
    }
    timer = setInterval(showRemaining, 1000);

    
    
});