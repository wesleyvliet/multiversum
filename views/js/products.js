function init_js() {

	$('.item').click( function() {
		console.log('magic! wou weee!');
		var parentDiv = this;
		var id = parentDiv.getAttribute("id");
		console.log(id)
		document.location = '?op=read&id=' + id;
	})

	function displayActionsLoop() {
		var page = document.getElementById("products").getAttribute("page");
		if(page == 'home') {
			var stop = document.getElementById("actions").getAttribute("stop");
			if(stop == 'false') {
				var view = parseInt(document.getElementById("actions").getAttribute("display"));
				var view = view + 1;
				var arrEnd = view * 3;
				var arrStart = arrEnd - 3;
				var display = actions.slice(arrStart, arrEnd);
				if(display.length == 0) {
					var display = actions.slice(0, 3);
					document.getElementById("actions").setAttribute("display", 1)
				} else {
					document.getElementById("actions").setAttribute("display", view)
				}
				var html = "";
				for (var i = 0; i < display.length; i++) {
					var discount = parseInt(display[i]['prijs']);
					discount = discount - parseInt(display[i]['korting']);
					html += "<div class='item'>";
						html += "<h1>" + display[i]['title'] + '</h1><h1><p style="margin: 0; float: left;">€ ' + discount + ' </p><p style="margin: 0; font-size: 14px; padding-bottom: 10px; color: var(--green);">-' + display[i]['korting'] + "</p></h1>";
						html += "<img src='views/img/products/" + display[i]['id'] + ".jpg'>";
						html += "<p>Platform: " + display[i]['platform'] + "</p>";
						html += "<p>Resulatie: " + display[i]['resulatie'] + "</p>";
					html += "</div>";
				}
				document.getElementById("actions").innerHTML = html;

				switch (display.length) {
					case 1: document.getElementById("actions").setAttribute('style', 'grid-template-columns: 1fr;'); break;
					case 2: document.getElementById("actions").setAttribute('style', 'grid-template-columns: 1fr 1fr;'); break;
					default: document.getElementById("actions").setAttribute('style', 'grid-template-columns: 1fr 1fr 1fr;'); break;
				}
			} else {
				document.getElementById("actions").setAttribute("stop", 'false');
			}
		}
	}
	var slideInterval = setInterval(displayActionsLoop,12000)
}
function actionForward() {
	document.getElementById("actions").setAttribute("stop", 'true');
	document.getElementById("actions").setAttribute("clicked", 'forward');
	var view = parseInt(document.getElementById("actions").getAttribute("display"));
	var view = view + 1;
	displayActions(view);
}
function actionBackword() {
	document.getElementById("actions").setAttribute("stop", 'true');
	document.getElementById("actions").setAttribute("clicked", 'backword');
	var view = parseInt(document.getElementById("actions").getAttribute("display"));
	var view = view - 1;
	displayActions(view);
}
function displayActions(view) {
	document.getElementById("actions").setAttribute("display", view)
	var arrEnd = view * 3;
	var arrStart = arrEnd - 3;
	var display = actions.slice(arrStart, arrEnd);
	var click = document.getElementById("actions").getAttribute("clicked");
	if(display.length == 0) {
		if(click == 'forward') {
			arrEnd = 3;
			arrStart = 0;
			document.getElementById("actions").setAttribute("display", 1)
		} else {
			arrEnd = Math.round(actions.length / 3);
			document.getElementById("actions").setAttribute("display", arrEnd)
			arrEnd = arrEnd * 3;
			arrStart = arrEnd - 3;
		}
		display = actions.slice(arrStart, arrEnd);
	}
	var html = "";
	for (var i = 0; i < display.length; i++) {
		var discount = parseInt(display[i]['prijs']);
		discount = discount - parseInt(display[i]['korting']);
		html += "<div class='item'>";
			html += "<h1>" + display[i]['title'] + '</h1><h1><p style="margin: 0; float: left;">€ ' + discount + ' </p><p style="margin: 0; font-size: 14px; padding-bottom: 10px; color: var(--green);">-' + display[i]['korting'] + "</p></h1>";
			html += "<img src='views/img/products/" + display[i]['id'] + ".jpg'>";
			html += "<p>Platform: " + display[i]['platform'] + "</p>";
			html += "<p>Resulatie: " + display[i]['resulatie'] + "</p>";
		html += "</div>";
	}
	document.getElementById("actions").innerHTML = html;

	switch (display.length) {
		case 1: document.getElementById("actions").setAttribute('style', 'grid-template-columns: 1fr;'); break;
		case 2: document.getElementById("actions").setAttribute('style', 'grid-template-columns: 1fr 1fr;'); break;
		default: document.getElementById("actions").setAttribute('style', 'grid-template-columns: 1fr 1fr 1fr;'); break;
	}
}
function forward() {
	var view = parseInt(document.getElementById("products").getAttribute("display"));
	var view = view + 1;
	display(view);
}
function backword() {
	var view = parseInt(document.getElementById("products").getAttribute("display"));
	var view = view - 1;
	display(view);
}
function display(view) {
	if(view >= 1) {
		var arrEnd = view * 9;
		var arrStart = arrEnd - 9;
		var display = products.slice(arrStart, arrEnd);
		if(display.length == 0) {
			var arrStart = arrStart - 9;
			var arrEnd = arrEnd - 9;
			var display = products.slice(arrStart, arrEnd);
			console.log(display);
			view = view - 1;
			document.getElementById("products").setAttribute("display", view)
		} else {
			document.getElementById("page-display").innerHTML = view;
			document.getElementById("products").setAttribute("display", view)
		}
		if(display.length <= 3) {
			document.getElementById("products").setAttribute('style', 'grid-template-rows: 1fr; height: 33.3%;');
		} else {
			if(display.length <= 6) {
				document.getElementById("products").setAttribute('style', 'grid-template-rows: 1fr 1fr; height: 66.6%;');
			} else {
				document.getElementById("products").setAttribute('style', 'grid-template-rows: 1fr 1fr 1fr; height: 100%;');
			}
		}
		var html = "";
		checkPage = document.getElementById('page').getAttribute('page');
		for (var i = 0; i < display.length; i++) {
			html += "<div class='item'>";
				html += "<h1>" + display[i]['title'] + '<h1>€ '+ display[i]['prijs'] + "</h1></h1>";
				html += "<img src='views/img/products/" + display[i]['id'] + ".jpg'>";
				html += "<p>Platform: " + display[i]['platform'] + "</p>";
				html += "<p>Resulatie: " + display[i]['resulatie'] + "</p>";
				if(checkPage == 'update') {
					html += "<button><a href='?op=update&id=" + display[i]['id'] + "'>Update</a></button>";
				}
			html += "</div>";
		}
		document.getElementById("products").innerHTML = html;
	}
}
function removeMessage() {
	setTimeout(function(){
		document.getElementById("afterBox").setAttribute('style', 'display: none');
	}, 3000);
	//document.getElementByClass("form-after-box").setAttribute("style", 'display: none');
}
