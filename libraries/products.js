$( function() {
	init_products();
});
function init_products() {
    init_display();
}
function init_display() {
    var arr = {
        0: {"title": 'Oculus Rift S', "platform": 'PC', "resulatie": '2560x1440 (Quad HD)'},
        1: {"title": 'Oculus Rift S', "platform": 'PC', "resulatie": '2560x1440 (Quad HD)'},
        2: {"title": 'Oculus Rift S', "platform": 'PC', "resulatie": '2560x1440 (Quad HD)'},
        3: {"title": 'Oculus Rift S', "platform": 'PC', "resulatie": '2560x1440 (Quad HD)'},
        4: {"title": 'Oculus Rift S', "platform": 'PC', "resulatie": '2560x1440 (Quad HD)'},
        5: {"title": 'Oculus Rift S', "platform": 'PC', "resulatie": '2560x1440 (Quad HD)'},
		6: {"title": 'Oculus Rift S', "platform": 'PC', "resulatie": '2560x1440 (Quad HD)'},
		7: {"title": 'Oculus Rift S', "platform": 'PC', "resulatie": '2560x1440 (Quad HD)'},
        8: {"title": 'Oculus Rift S', "platform": 'PC', "resulatie": '2560x1440 (Quad HD)'},
        9: {"title": 'Oculus Rift S', "platform": 'PC', "resulatie": '2560x1440 (Quad HD)'}
    };
    function display(arr) {
        var results = arr;
		var html = "";
		for(var i = 0; i < Object.keys(results).length; i++){
            html += "<div class='item'>";
				html += "<h1>" + results[i]['title'] + "</h1>";
				html += "<img src='http://localhost/multiversum/multiversum/libraries/img/header4.jpeg'>";
				html += "<p>Platform: " + results[i]['platform'] + "</p>";
				html += "<p>Resulatie: " + results[i]['resulatie'] + "</p>";
			html += "</div>";
        }
		$('#products').html(html);
    }
    display(arr);
}
