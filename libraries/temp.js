var stop = false;
var slideInterval = setInterval(actionDisplay,6000);
function actionDisplay() {
    if(stop == false) {
        var page = parseInt($('#actionsBox').attr('view'));
        page = page + 1;
        var arrEnd = page * 3;
        var arrStart = arrEnd - 3;
        display = actionArray.slice(arrStart, arrEnd);
        if(display.length == 0) {
            page = 1;
        }
        $('#actionsBox').attr('view', page)
    }
    var page = parseInt($('#actionsBox').attr('view'));
    var arrEnd = page * 3;
    var arrStart = arrEnd - 3;
    display = actionArray.slice(arrStart, arrEnd);
    if(display.length == 0) {
        var clicked = $('#actionsBox').attr('clicked');
        if(clicked == 'right') {
            stop = true;
            $('#actionsBox').attr('view', '1');
            console.log('test')
            display = actionArray.slice(0, 3);
            $('#actionsBox').attr('clicked', 'none');
        }
        if(clicked == 'left') {
            stop = true;
            lastPage = Math.round(actionArray.length / 3);
            $('#actionsBox').attr('view', lastPage);
            var endView = parseInt(actionArray.length);
            var nearEndView = parseInt(lastPage - 1);
            nearEndView = nearEndView * 3;
            console.log(nearEndView)
            display = actionArray.slice(nearEndView, endView);
            $('#actionsBox').attr('clicked', 'none');
        }
    }
    switch (display.length) {
        case 1: $('#actionsBox').css('grid-template-columns', '30% 40% 30%'); break;
        case 2: $('#actionsBox').css('grid-template-columns', '15% 35% 35% 15%'); break;
        case 3: $('#actionsBox').css('grid-template-columns', '12.5% 25% 25% 25% 12.5%'); break;
        default: console.log('NAN');
    }
    var html = "";
    html += "<button id='actionButtonLeft'>" + '<' + "</button>";
    for(var i = 0; i < Object.keys(display).length; i++) {
        html += "<div class='item' productId='" + display[i]['id'] + "' >";
            html += "<h1>" + display[i]['title'] + "</h1>";
            html += "<img src='http://localhost/multiversum/multiversum/libraries/img/products/" + display[i]['id'] + ".jpeg'>";
            html += "<p>Platform: " + display[i]['platform'] + "</p>";
            html += "<p>Resulatie: " + display[i]['resulatie'] + "</p>";
        html += "</div>";
    }
    html += "<button id='actionButtonRight'>" + ">" + "</button>";
    $('#actionsBox').html(html);
