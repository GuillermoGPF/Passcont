/*---------------------------------------------------------------------------------------------------------------------------*/
/*-                                                   PassCont Scripts                                                      -*/
/*---------------------------------------------------------------------------------------------------------------------------*/

$(document).ready(function() {
    // Show Box
    $('#box1').hide();
    $('#box2').hide();
    $('#box3').hide();
    $(document).ready(function() {
        $('#box1').show('fade', 1000);
    });

    $('#continue1').on('click', function() {
        $('#box1').hide('fade');
        $('#box2').show('fade', 2000);
    });

    $('#continue2').on('click', function() {
        $('#box2').hide('fade');
        $('#box3').show('fade', 2000);
    });

    $('.platform').hide();
    $('.more').on('click', function() {
        $('.platform').show();
    });

    // No select
    $('.more').on('click', function() {
        return false;
    });

    $('.s-btn').on('click', function() {
        return false;
    });

    // Color1
    let color1 = document.getElementById('col1');
    $('.colour1').on('click', function() {
        color1.style.backgroundImage = 'linear-gradient(120deg, #a1c4fd 0%, #c2e9fb 100%)';
    });

    $('.colour2').on('click', function() {
        color1.style.backgroundImage = 'linear-gradient(to right, #fa709a 0%, #fee140 100%)';
    });

    $('.colour3').on('click', function() {
        color1.style.backgroundImage = 'linear-gradient(to right, #4facfe 0%, #00f2fe 100%)';
    });

    $('.colour4').on('click', function() {
        color1.style.backgroundImage = 'linear-gradient(to top, #30cfd0 0%, #330867 100%)';
    });

    $('.colour5').on('click', function() {
        color1.style.backgroundImage = 'linear-gradient(45deg, #ff9a9e 0%, #fad0c4 99%, #fad0c4 100%)';
    });

    $('.colour6').on('click', function() {
        color1.style.backgroundImage = 'linear-gradient(120deg, #f6d365 0%, #fda085 100%)';
    });

    $('.colour7').on('click', function() {
        color1.style.backgroundImage = 'linear-gradient(to top, #fbc2eb 0%, #a6c1ee 100%)';
    });

    $('.colour8').on('click', function() {
        color1.style.backgroundImage = 'linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%)';
    });

    $('.colour9').on('click', function() {
        color1.style.backgroundImage = 'linear-gradient(to right, #6a11cb 0%, #2575fc 100%)';
    });

    $('.colour10').on('click', function() {
        color1.style.backgroundImage = 'linear-gradient(to top, #dbdcd7 0%, #dddcd7 24%, #e2c9cc 30%, #e7627d 46%, #b8235a 59%, #801357 71%, #3d1635 84%, #1c1a27 100%)';
    });

    $('.colour11').on('click', function() {
        color1.style.backgroundImage = 'linear-gradient(to top, #88d3ce 0%, #6e45e2 100%)';
    });

    $('.colour12').on('click', function() {
        color1.style.backgroundImage = 'linear-gradient(to right, #434343 0%, black 100%)';
    });

    // Color 2
    let color2 = document.getElementById('col2');
    $('.colour13').on('click', function() {
        color2.style.backgroundImage = 'linear-gradient(120deg, #a1c4fd 0%, #c2e9fb 100%)';
    });

    $('.colour14').on('click', function() {
        color2.style.backgroundImage = 'linear-gradient(to right, #fa709a 0%, #fee140 100%)';
    });

    $('.colour15').on('click', function() {
        color2.style.backgroundImage = 'linear-gradient(to right, #4facfe 0%, #00f2fe 100%)';
    });

    $('.colour16').on('click', function() {
        color2.style.backgroundImage = 'linear-gradient(to top, #30cfd0 0%, #330867 100%)';
    });

    $('.colour17').on('click', function() {
        color2.style.backgroundImage = 'linear-gradient(45deg, #ff9a9e 0%, #fad0c4 99%, #fad0c4 100%)';
    });

    $('.colour18').on('click', function() {
        color2.style.backgroundImage = 'linear-gradient(120deg, #f6d365 0%, #fda085 100%)';
    });

    $('.colour19').on('click', function() {
        color2.style.backgroundImage = 'linear-gradient(to top, #fbc2eb 0%, #a6c1ee 100%)';
    });

    $('.colour20').on('click', function() {
        color2.style.backgroundImage = 'linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%)';
    });
    
    $('.colour21').on('click', function() {
        color2.style.backgroundImage = 'linear-gradient(to right, #6a11cb 0%, #2575fc 100%)';
    });

    $('.colour22').on('click', function() {
        color2.style.backgroundImage = 'linear-gradient(to top, #dbdcd7 0%, #dddcd7 24%, #e2c9cc 30%, #e7627d 46%, #b8235a 59%, #801357 71%, #3d1635 84%, #1c1a27 100%)';
    });

    $('.colour23').on('click', function() {
        color2.style.backgroundImage = 'linear-gradient(to top, #88d3ce 0%, #6e45e2 100%)';
    });

    $('.colour24').on('click', function() {
        color2.style.backgroundImage = 'linear-gradient(to right, #434343 0%, black 100%)';
    });
});

// Modal
let overlay = document.querySelector('.overlay');
let modalColor1 = document.querySelector('.modal1');
let modalColor2 = document.querySelector('.modal2');
overlay.style.display = 'none';
modalColor1.style.display = 'none';
modalColor2.style.display = 'none';

function modal1() {
    if (modalColor1.style.display === 'none') {
        modalColor1.style.display = 'flex';
        overlay.style.display = 'block';
    } else {
        modalColor1.style.display = 'none';
        overlay.style.display = 'none';
    }
}

function modal2() {
    if (modalColor2.style.display === 'none') {
        modalColor2.style.display = 'flex';
        overlay.style.display = 'block';
    } else {
        modalColor2.style.display = 'none';
        overlay.style.display = 'none';
    }
}

// Password Generator
function generatePassword(elm) {
    elm = document.getElementById(elm);
    elm.value = generateRandomPassword();
}
function generateRandomPassword() {
    return Math.random().toString(36).slice(-12);
}