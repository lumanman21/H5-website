var timeLine = document.getElementById('timeLine');
var detailBox = document.getElementById('timeDetailBox');
var timePoints = document.getElementsByClassName('timePoint');
var point = document.querySelectorAll('.point');
var timePointWidth = $('.timePoint').innerWidth();
var Tindex = 2;
timeLine.style.width = timePointWidth * timePoints.length + 'vw';
function InitPoint(currentIndex) {
    $('.timePoint').children('.point1').eq(currentIndex).css('display', 'flex');
    $('.timeDetailBox').children('.timeDetail').eq(currentIndex).css('display', 'flex');
};
InitPoint(Tindex);
function ClearStyle(currentIndex) {
    for (let i = 0; i < timePoints.length; i++) {
        if (i != currentIndex) {
            $('.timePoint').children('.point1').eq(i).css('display', 'none');
            $('.timeDetailBox').children('.timeDetail').eq(i).css('display', 'none');
        }
    }
};
function ChangePoint() {
    for (let i = 0; i < timePoints.length; i++) {
        const timePoint = timePoints[i];
        timePoint.onclick = function() {
            Tindex = $('.timePoint').index(this);
            InitPoint(Tindex);
            ClearStyle(Tindex);
            clickOffset = -(Tindex - 2) * timePointWidth;
            move(clickOffset);
        };
    }
};
ChangePoint();
function move(offset) {
    $('.timeLine').css({
        'transition': 'all ease-out 0.8s',
        'transform': 'translateX(' + offset + 'px)',
    });
};
function CycleMove() { if (Tindex >= timePoints.length || Tindex < 0) { console.log('cylce'); $('.timeLine').css({ 'transition': '', }); offset = -((Tindex - 2) * timePointWidth); setTimeout(() => { move(offset); console.log(Tindex); }); } return };
function hoverMove() {
    if ($(window).width() >= 960) {
        $('.point2').hover(function() {
            if (Tindex >= timePoints.length - 1) {
                Tindex = -1;
            }
            Tindex = $(this).parent().index();
            InitPoint(Tindex);
            ClearStyle(Tindex);
            let nextOffset = -((Tindex - 2) * timePointWidth);
            move(nextOffset);
        });
    }
};
hoverMove();
$('#arrPre').click(() => { if (Tindex <= 0) { Tindex = timePoints.length; } Tindex = Tindex - 1; InitPoint(Tindex); ClearStyle(Tindex); preOffset = -((Tindex - 2) * timePointWidth); move(preOffset); });
$('#arrNext').click(() => { if (Tindex >= timePoints.length - 1) { Tindex = -1; } Tindex = Tindex + 1; InitPoint(Tindex); ClearStyle(Tindex); nextOffset = -((Tindex - 2) * timePointWidth); move(nextOffset); });
var Ttimer = 0;
function AutoPlayTimeLine() { Ttimer = setInterval(() => { if (Tindex >= timePoints.length - 1) { Tindex = -1; } Tindex = Tindex + 1; InitPoint(Tindex); ClearStyle(Tindex); nextOffset = -((Tindex - 2) * timePointWidth); move(nextOffset); }, 50000); };
AutoPlayTimeLine();
AutoPlayTimeLine(); $('.timeLineContrainer').mouseenter(() => { clearInterval(Ttimer); }); $('.timeLineContrainer').mouseleave(() => { AutoPlayTimeLine(); });