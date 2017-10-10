// Get the modal
var modalfac = document.getElementById('myModalfac');
var modalfac2 = document.getElementById('myModalfac2');
var modalfac3 = document.getElementById('myModalfac3');
var modalfac4 = document.getElementById('myModalfac4');
var modalfac5 = document.getElementById('myModalfac5');
var modalfac6 = document.getElementById('myModalfac6');

// Get the button that opens the modal
var btnfac = document.getElementById("myBtnfac");
var btnfac2 = document.getElementById("myBtnfac2");
var btnfac3 = document.getElementById("myBtnfac3");
var btnfac4 = document.getElementById("myBtnfac4");
var btnfac5 = document.getElementById("myBtnfac5");
var btnfac6 = document.getElementById("myBtnfac6");


// Get the <span> element that closes the modal
var spanfac = document.getElementsByClassName("close")[0];
var spanfac2 = document.getElementsByClassName("close")[1];
var spanfac3 = document.getElementsByClassName("close")[2];
var spanfac4 = document.getElementsByClassName("close")[3];
var spanfac5 = document.getElementsByClassName("close")[4];
var spanfac6 = document.getElementsByClassName("close")[5];

// When the user clicks on the button, open the modal
btnfac.onclick = function() {
    modalfac.style.display = "block";
    modalfac.style.overflow = 'scroll';
    $('body').css('overflow','hidden');
}

btnfac2.onclick = function() {
    modalfac2.style.display = "block";
    modalfac2.style.overflow = 'scroll';
    $('body').css('overflow','hidden');
}

btnfac3.onclick = function() {
    modalfac3.style.display = "block";
    modalfac3.style.overflow = 'scroll';
    $('body').css('overflow','hidden');
}

btnfac4.onclick = function() {
    modalfac4.style.display = "block";
    modalfac4.style.overflow = 'scroll';
    $('body').css('overflow','hidden');
}

btnfac5.onclick = function() {
    modalfac5.style.display = "block";
    modalfac5.style.overflow = 'scroll';
    $('body').css('overflow','hidden');
}

btnfac6.onclick = function() {
    modalfac6.style.display = "block";
    modalfac6.style.overflow = 'scroll';
    $('body').css('overflow','hidden');
}


// When the user clicks on <span> (x), close the modal
spanfac.onclick = function() {
    modalfac.style.display = "none";
    $('body').css('overflow','auto');
}
spanfac2.onclick = function() {
    modalfac2.style.display = "none";
    $('body').css('overflow','auto');
}
spanfac3.onclick = function() {
    modalfac3.style.display = "none";
    $('body').css('overflow','auto');
}
spanfac4.onclick = function() {
    modalfac4.style.display = "none";
    $('body').css('overflow','auto');
}
spanfac5.onclick = function() {
    modalfac5.style.display = "none";
    $('body').css('overflow','auto');
}
spanfac6.onclick = function() {
    modalfac6.style.display = "none";
    $('body').css('overflow','auto');
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modalfac) {
        modalfac.style.display = "none";
        $('body').css('overflow','auto');
    }else if (event.target == modalfac2) {
        modalfac2.style.display = "none";
        $('body').css('overflow','auto');
    }else if (event.target == modalfac3) {
        modalfac3.style.display = "none";
        $('body').css('overflow','auto');
    }else if (event.target == modalfac4) {
        modalfac4.style.display = "none";
        $('body').css('overflow','auto');
    }else if (event.target == modalfac5) {
        modalfac5.style.display = "none";
        $('body').css('overflow','auto');
    }else if (event.target == modalfac6) {
        modalfac6.style.display = "none";
        $('body').css('overflow','auto');
    }
}


