// Get the modal
var modal = document.getElementById('myModal');
var modal2 = document.getElementById('myModal2');
var modal3 = document.getElementById('myModal3');
var modal4 = document.getElementById('myModal4');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");
var btn2 = document.getElementById("myBtn2");
var btn3 = document.getElementById("myBtn3");
var btn4 = document.getElementById("myBtn4");
//var btn5 = document.getElementById("myBtn5");
//var btn6 = document.getElementById("myBtn6");
//var btn7 = document.getElementById("myBtn7");
//var btn8 = document.getElementById("myBtn8");
//var btn9 = document.getElementById("myBtn9");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
var span2 = document.getElementsByClassName("close")[1];
var span3 = document.getElementsByClassName("close")[2];
var span4 = document.getElementsByClassName("close")[3];

// When the user clicks on the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
    modal.style.overflow = 'scroll';
    $('body').css('overflow','hidden');
}

btn2.onclick = function() {
    modal2.style.display = "block";
    modal2.style.overflow = 'scroll';
    $('body').css('overflow','hidden');
}

btn3.onclick = function() {
    modal3.style.display = "block";
    modal3.style.overflow = 'scroll';
    $('body').css('overflow','hidden');
}

btn4.onclick = function() {
    modal4.style.display = "block";
    modal4.style.overflow = 'scroll';
    $('body').css('overflow','hidden');
}

//btn5.onclick = function() {
//    modal.style.display = "block";
//}
//
//btn6.onclick = function() {
//    modal.style.display = "block";
//}
//
//btn7.onclick = function() {
//    modal.style.display = "block";
//}
//
//btn8.onclick = function() {
//    modal.style.display = "block";
//}
//
//btn9.onclick = function() {
//    modal.style.display = "block";
//}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
    $('body').css('overflow','auto');
}
span2.onclick = function() {
    modal2.style.display = "none";
    $('body').css('overflow','auto');
}
span3.onclick = function() {
    modal3.style.display = "none";
    $('body').css('overflow','auto');
}
span4.onclick = function() {
    modal4.style.display = "none";
    $('body').css('overflow','auto');
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
        $('body').css('overflow','auto');
    }else if (event.target == modal2) {
        modal2.style.display = "none";
        $('body').css('overflow','auto');
    }else if (event.target == modal3) {
        modal3.style.display = "none";
        $('body').css('overflow','auto');
    }else if (event.target == modal4) {
        modal4.style.display = "none";
        $('body').css('overflow','auto');
    }
}