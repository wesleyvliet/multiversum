$( function() {
	init_products();
});
function init_products() {
	init_fetch();
    init_display();
	init_buttons();
	setInterval(init_loop, 10000);
}

var results = '';
var lastPage = '';
var actionArray = '';

function init_loop() {
	var clicked = $('#actionsBox').attr('clicked');
	if(clicked == 'false') {
		var page = parseInt($('#actionsBox').attr('view'));
		page = page + 1;
		var arrEnd = page * 3;
		var arrStart = arrEnd - 3;
		var display = actionArray.slice(arrStart, arrEnd);
		if(display.length == 0) {page = 1;}
		$('#actionsBox').attr('view', page);
		init_actions();
	} else {
		$('#actionsBox').attr('clicked', 'false');
	}
}

function init_fetch() {
	var post = {};
	post.action = 'fetchProducts';
	$.ajax({
		type: "POST",
		url: 'Router.php',
		data: post,
		success: function(data){
			results = JSON.parse(data);
			lastPage = results.length;
			lastPage = lastPage / 9;
			lastPage = Math.round(lastPage);
			init_display();
		}
	});
	var post = {};
	post.action = 'fetchProductsAction';
	$.ajax({
		type: "POST",
		url: 'Router.php',
		data: post,
		success: function(data){
			actionArray = JSON.parse(data);
			init_actions();
		}
	});
}

function init_buttons() {
	$('#buttonForward').click( function() {
		var page = parseInt($('#inputPage').val());
		if(page >= 1) {
			var page = page + 1;
			$('#inputPage').val(page)
			init_display();
		}
	})
	$('#buttonBackward').click( function() {
		var page = parseInt($('#inputPage').val());
		if(page > 1) {
			var page = page - 1;
			$('#inputPage').val(page)
			init_display();
		}
	})
	$('#inputPage').on('keypress',function(e) {
	    if(e.which == 13) {
			var input = $('#inputPage').val();
			var check = input.value = input.replace(/[^0-9.]/g, "");
			var page = parseInt(check);
			if(page >= 1) {
				init_display();
			}
		}
	});
}
function reloadButtons() {
	$('#actionButtonLeft').click( function() {
		var view = parseInt($('#actionsBox').attr('view'));
		var view = view - 1;
		var arrEnd = view * 3;
		var arrStart = arrEnd - 3;
		var display = actionArray.slice(arrStart, arrEnd);
		if(display.length == 0) {
			view = lastPage;
		}
		$('#actionsBox').attr('view', view);
		$('#actionsBox').attr('clicked', 'left');
		$('#actionsBox').attr('clicked', 'true');
		init_actions();
	});
	$('#actionButtonRight').click( function() {
		console.log('right');
		var view = parseInt($('#actionsBox').attr('view'));
		var view = view + 1;
		var arrEnd = view * 3;
		var arrStart = arrEnd - 3;
		var display = actionArray.slice(arrStart, arrEnd);
		if(display.length == 0) {
			view = 1;
		}
		$('#actionsBox').attr('view', view);
		$('#actionsBox').attr('clicked', 'right');
		$('#actionsBox').attr('clicked', 'true');
		init_actions();
	})
	$('#lastProducts').click( function() {
		console.log('i was clicked');
		var page = parseInt($('#inputPage').val());
		var arrEnd = lastPage * 10;
		var arrStart = lastPage - 10;
		display = results.slice(arrStart, arrEnd);
		var html = "";
		for(var i = 0; i < Object.keys(display).length; i++){
	        html += "<div class='item'>";
				html += "<h1>" + display[i]['title'] + "</h1>";
				html += "<img src='http://localhost/multiversum/multiversum/libraries/img/products/" + display[i]['id'] + ".jpeg'>";
				html += "<p>Platform: " + display[i]['platform'] + "</p>";
				html += "<p>Resulatie: " + display[i]['resulatie'] + "</p>";
			html += "</div>";
	    }
		$('#products').html(html);
		$('#inputPage').val(lastPage);
		reloadButtons();
	})
}

function init_display() {
	var page = parseInt($('#inputPage').val());
	var arrEnd = page * 10;
	var arrStart = arrEnd - 10;
	display = results.slice(arrStart, arrEnd);
	var html = "";
	for(var i = 0; i < Object.keys(display).length; i++){
        html += "<div class='item' productId='" + display[i]['id'] + "' >";
			html += "<h1>" + display[i]['title'] + "</h1>";
			html += "<img src='http://localhost/multiversum/multiversum/libraries/img/products/" + display[i]['id'] + ".jpeg'>";
			html += "<p>Platform: " + display[i]['platform'] + "</p>";
			html += "<p>Resulatie: " + display[i]['resulatie'] + "</p>";
		html += "</div>";
    }
	if(Object.keys(display).length == 0) {
		html += "<div class='noItem proPage'>";
		html += "<h1>" + "Nog geen producten" + "</h1>";
		html += "<p>" + "Bekijk onze laatste producten beneden" + "</p>";
		html += "<button id='lastProducts'>" + "Producten" + "</button>";
		html += "</div>";
	}
	$('#products').html(html);
	$('#products .item').click( function() {
		var html = "";
		var id = $(this).attr('productId');
		html += '<button class="exitButton"><a href="home">X</a></button>';
		html += "<div>";

		html += 	"<div>";
		html += 		"<h1>" + "Specificaties en productafbeeldingen" + "</h1>";
		html +=			'<table class="detail-table">';
		html +=				"<tr><th style='background: var(--grey);'>Populaire specificaties</th></tr>";
		html += 			"<tr><td>Platform (VR-brillen):</td></tr>";
		html +=				"<tr><td>Eigen display:</td></tr>";
		html +=				"<tr><td>Resolutie:</td></tr>";
		html +=				"<tr><td>Functies (VR-bril):</td></tr>";
		html +=				"<tr><td>Aansluitingen VR-bril:</td></tr>";
		html +=			"</table>";
		html +=			'<table class="detail-table">';
		html +=				"<tr><th style='background: var(--grey);'>Platform</th></tr>";
		html += 			"<tr><td>Platform (VR-brillen):</td></tr>";
		html +=			"</table>";
		html +=			'<table class="detail-table">';
		html +=				"<tr><th style='background: var(--grey);'>Scherm</th></tr>";
		html += 			"<tr><td>Eigen display:</td></tr>";
		html += 			"<tr><td>Resolutie:</td></tr>";
		html += 			"<tr><td>Refresh rate:</td></tr>";
		html +=			"</table>";
		html +=			'<table class="detail-table">';
		html +=				"<tr><th style='background: var(--grey);'>Functies</th></tr>";
		html += 			"<tr><td>Functies (VR-bril):</td></tr>";
		html +=			"</table>";
		html +=			'<table class="detail-table">';
		html +=				"<tr><th style='background: var(--grey);'>Verbindingen</th></tr>";
		html += 			"<tr><td>Aansluitingen VR-bril:</td></tr>";
		html +=			"</table>";
		html +=		"</div>";

		html += 	"<div>";
		html += 		"<h1>" + " Prijs €615,00 " + "<button style='display:none;'>" + "Koop Nu!" + "</button></h1>";
		html += 		"<div class='DetailsImgOverlay' style='background-image: linear-gradient(180deg,rgba(0,0,0,0.3) 0%,rgba(0,0,0,0.3) 100%), url(../multiversum/libraries/img/header1.jpeg)'>";
		html +=			"</div>";
		html +=			'<table class="detail-table">';
		html +=				"<tr><th style='background: var(--grey);'>Accu en accessories</th></tr>";
		html += 			"<tr><td>Meegeleverde VR-bril accessoires:</td></tr>";
		html +=			"</table>";
		html +=			'<table class="detail-table">';
		html +=				"<tr><th style='background: var(--grey);'>Garantie</th></tr>";
		html += 			"<tr><td>Fabrieksgarantie:</td></tr>";
		html +=			"</table>";
		html +=			'<table class="detail-table">';
		html +=				"<tr><th style='background: var(--grey);'>Meer informatie</th></tr>";
		html += 			"<tr><td>Product:</td></tr>";
		html += 			"<tr><td>Merk:</td></tr>";
		html += 			"<tr><td>Tweakers ID:</td></tr>";
		html += 			"<tr><td>EAN:</td></tr>";
		html += 			"<tr><td>SKU:</td></tr>";
		html +=			"</table>";
		html +=		"</div>";

		html += "</div>"
		html += '<button class="exitButton" style="bottom: 3.6%;"><a href="home">X</a></button>';
		$('#productDetails').css('display', 'block');
		$('#productDetails').html(html);
		$('.wrapper').css('display', 'none');
	});
	reloadButtons();
}
function init_actions() {
	var page = parseInt($('#actionsBox').attr('view'));
	function actionDisplay() {
		var arrEnd = page * 3;
		var arrStart = arrEnd - 3;
		var display = actionArray.slice(arrStart, arrEnd);
		if(display.length == 0) {
			var clicked = $('#actionsBox').attr('clicked');
			if(clicked == 'right') {
				$('#actionsBox').attr('view', '1');
				console.log('test')
				display = actionArray.slice(0, 3);
			}
			if(clicked == 'left') {
				lastPage = Math.round(actionArray.length / 3);
				$('#actionsBox').attr('view', lastPage);
				var endView = parseInt(actionArray.length);
				var nearEndView = parseInt(lastPage - 1);
				nearEndView = nearEndView * 3;
				console.log(nearEndView)
				display = actionArray.slice(nearEndView, endView);
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
	}
	actionDisplay();
	reloadButtons()
}
