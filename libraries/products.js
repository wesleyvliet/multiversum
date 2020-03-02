$( function() {
	init_products();
});
function init_products() {
	init_fetch();
    init_display();
	init_buttons();
}

var results = '';
var lastPage = '';

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
			console.log(lastPage);
			init_display();
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

function init_display() {
	var page = parseInt($('#inputPage').val());
	var arrEnd = page * 10;
	var arrStart = arrEnd - 10;
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
	if(Object.keys(display).length == 1) {
		html += "<div class='noItem'>";
		html += "<h1>" + "Nog geen producten" + "<br>";
		html += "<p>" + "bekijk" + "hier onze laaste producten." + "</p>";
		html += "</div>";
	}
	$('#products').html(html);
}