var screen_width;
var screen_height;
var total_backgrounds = 4;
var total_enemies = 6;
var enemy_width = 62;
var enemy_height = 89;
var total_kills = 0;
var max_kills = 0;
var default_kills = 4;
var sound_on;
var countdown = document.location.href.indexOf('countdown=on') > -1;
var is_shoot = false;
var time_seconds;
var current_time;
var timer_game;
var idkfa = false;
var id_enemy;
var images_preload = [];
var flash = false;

document.getElementById("sound_death").volume = 0.5;
document.getElementById("sound_shootshotgun").volume = 0.5;

if (document.location.href.indexOf('enemies') > -1) {
    max_kills = parseInt(document.location.href.split('enemies=')[1].split('&')[0]);
}

if( max_kills < 1 ){
    max_kills = default_kills;
}

time_seconds = max_kills * 2;
current_time = time_seconds;

function handleShootAnim() {
    flash = true;
    if (!idkfa) {
        playSound('shoot');
        $('#gun').css('background', 'rgba(0, 0, 0, 0) url("static/pistol-flash.png") no-repeat scroll left bottom');
        $('#gun').css('left',"-=22");
    } else {
        playSound('shootshotgun');
        $('#gun').css('background', 'rgba(0, 0, 0, 0) url("static/shotgun-flash.png") no-repeat scroll left bottom');
        //$('#gun').css('left',"-=33");
        $('#gun').css('bottom',"0px");
    }
    setTimeout(function() {
        flash = false;
        if (!idkfa) {
            $('#gun').css('background', 'rgba(0, 0, 0, 0) url("static/pisga0.png") no-repeat scroll left bottom');
            $('#gun').css('left',"+=22");
        } else {
            $('#gun').css('background', 'rgba(0, 0, 0, 0) url("static/sht2a0.png") no-repeat scroll left bottom');
            //$('#gun').css('left',"+=33");
            $('#gun').css('bottom',"-10px");
        }
    }, 200);
}

function handleMiss(event, element){
    if (event.target != element) {
        event.stopPropagation();
        return;
    }

    handleShootAnim();
}

$('.enemy').click(function() {
    if (!is_shoot) {
        is_shoot = true;

        handleShootAnim();

        if (sound_on) {
            $('#sound_death').attr("src", "static/sound/" + id_enemy + "_kill.wav");
            $('#sound_death')[0].play();
        }
        $('.enemy').css('background-image', "url('static/enemies/" + id_enemy + "_dead.png')");


        total_kills++;

        setTimeout(function() {
            $('.enemy').fadeOut('fast', function() {

                setTimeout(function() {
                    if (total_kills != max_kills) {
                        showEnemy();
                    }
                    is_shoot = false;
                }, 100);

            });
        }, 200);

        setTimeout(function() {
            if (total_kills == max_kills) {
                endGame();
            }
        }, 500);
    }
});

function endGame() {
    $('#start').hide();
    $('#ok').css('display', 'flex');
    playSound('ok');
    $('#sound_music')[0].pause();
    postSize(1);
    $('#cheatcode').css('opacity',0);
    if (timer_game) {
        clearTimeout(timer_game);
    }
}

function randomNumber(min, max) {
    if (min > max) {
        let temp = max;
        max = min;
        min = temp;
    }

    if (min <= 0) {
        return Math.floor(Math.random() * (max + Math.abs(min) + 1)) + min;
    } else {
        return Math.floor(Math.random() * (max - min + 1)) + min;
    }
}

function showEnemy() {
    id_enemy = randomNumber(1, total_enemies);
    $('.enemy').css('background-image', "url('static/enemies/" + id_enemy + "_normal.png')").css('left', randomNumber(0, screen_width-enemy_width)).show();
}

function postSize(height) {
    var target = parent.postMessage ? parent : (parent.document.postMessage ? parent.document : undefined);

    target.postMessage(height, "*");
}

function startGame() {
    $('#cheatcode').show().val('').focus();

    showEnemy();
    setRandomBackground();

    if (countdown) {
        $('#countdown').show();

        timer_game = setInterval(function() {
            current_time -= 0.125;

            if (current_time <= 0 && total_kills != max_kills) {
                $('#gameover').css('display','flex');

                clearInterval(timer_game);
            } else {
                time_percent = parseInt((current_time * 100) / time_seconds);

                $('#percent').css('width', time_percent + '%');
            }
        }, 125);
    }
}

$('#btn_start').click(function() {
    $('#start').hide();
    sound_on = true;
    playSound('music');
    startGame();
});

$('#btn_start_mute').click(function() {
    $('#start').hide();
    sound_on = false;
    startGame();
});

$('#btn_again').click(function() {
    $('#ok').hide();
    if (sound_on) {
        playSound('music');
    }
    $('#gameover').click();
});


$('#gameover').click(function() {
    current_time = time_seconds;
    $(this).hide();
    $('#percent').css('width', '100%');
    total_kills = 0;
    startGame();
});

function playSound(id) {
    if (sound_on) {
        $('#sound_' + id)[0].currentTime = 0;
        $('#sound_' + id)[0].play();
    }
}

$(window).resize(function() {
    screen_width = $(window).width();
    screen_height = $(window).height();
});

$(window).resize();

$('#cheatcode').keyup(function() {
    if ($(this).css('opacity', 1).val().toUpperCase() == 'IDDQD') {
        $('#cheatcode').val('').hide();
        $('#gameover').hide();
        endGame();
    }
    if ($(this).css('opacity', 1).val().toUpperCase() == 'IDKFA') {
        idkfa = true;
        document.getElementById("gun").style.backgroundImage='url("static/sht2a0.png"';
        $('#cheatcode').val('').hide();
    }
});

function setRandomBackground(){
    $('body').css('background-image', "url('static/backgrounds/" + randomNumber(1, total_backgrounds) + ".png')" );
}

$(function() {
    $('#sound_shoot')[0].volume = 0.3;
    $('#sound_music')[0].volume = 0.3;
    $('#sound_ok')[0].volume = 0.3;
    $('#max_kills').html(max_kills);
    $('.enemy').css('width',enemy_width).css('height',enemy_height);


    for (var i = 1; i <= total_backgrounds; i++) {
        var image_aux = new Image();
        image_aux.src = 'static/backgrounds/' + i + '.png';
        images_preload.push(image_aux);
    }

    for (var i = 1; i <= total_enemies; i++) {
        var image_aux = new Image();
        image_aux.src = 'static/enemies/' + i + '_normal.png';
        images_preload.push(image_aux);

        image_aux = new Image();
        image_aux.src = 'static/enemies/' + i + '_dead.png';
        images_preload.push(image_aux);
    }


});

document.addEventListener('mousemove', evt => {
    let x = evt.clientX;

    if (!idkfa) {
        if (!flash) {
            $('#gun').css('left', (x-34)+"px");
        } else {
            $('#gun').css('left', (x-56)+"px");
        }
    } else {
        $('#gun').css('left', (x-33)+"px");
    }
});

// end home
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'G-L7DMC1G74Q');
