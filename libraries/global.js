
$( function() {
	init_submisions();
});

function init_submisions() {
	checkForm();
	loadUsers();
	fetchId();
}

function fetchId() {
	$('#buttonId').click( function() {
		//console.log('button click');
		checkInput();
	});
	$('#inputId').on('keypress', function (e) {
         if(e.which === 13){
			 //console.log('a enter???');
			 checkInput();
         }
    });
   	function checkInput() {
		var input = $('#inputId').val();
		if(input == "") {
			$('#searchResult').html('Zoekveld is leeg :(');
		} else {
			//var re = /^[A-Za-z]+$/;
			var re = /^[1234567890]+$/;
			if(re.test(input)) {
				var post = {};
				post.action = 'fetchUsersSearch';
				post.input = input;
				console.log(post);
				$.ajax({
					type: "POST",
					url: 'Router.php',
					data: post,
					success: function(data){
						var results = JSON.parse(data);
						console.log(results.length);
			            var html = "";
						if(results.length == 0) {
							html = 'geen resultaat gevonden.';
						} else {
							for(var i = 0; i < results.length ; i++){
								html += 'ID: ' + results[i]['id'] + '<br>Name: ' + results[i]['name'] + '<br>lastName: ' + results[i]['secondName'] + '<hr>';
							}
						}
						$('#searchResult').html(html);
					}
				});
			} else {
				$('#searchResult').html('alleen nummers zijn toegestaan!');
			}
		}
	}
}

function loadUsers() {
	var post = {};
	post.action = 'fetchUsers';
	console.log(post);
	$.ajax({
		type: "POST",
		url: 'Router.php',
		data: post,
		success: function(data){
			var results = JSON.parse(data);
            var html = "";
            for(var i = 0; i < results.length ; i++){
				html += '<div class="user" userId=' + results[i]['id'] + '>ID: ' + results[i]['id'] + '<br>Name: ' + results[i]['name'] + '<br>lastName: ' + results[i]['secondName'];
				html +=  '<br><button class="userButton">Delete</button>' + '</div><hr>'
			}
			$('#userBox').html(html);
			$('.user .userButton').click( function() {
				var parentDiv = $(this).parent();
				var userId = $(parentDiv).attr("userId");
				var post = {};
				post.action = 'deleteUser';
				post.id = userId;
				console.log(post);
				$.ajax({
					type: "POST",
					url: 'Router.php',
					data: post,
					success: function(data){
						loadUsers();
					}
				});
			});
		}
	});
}

function checkForm() {
	$('#sendForm').click( function(){
		check = true;
		var name = $('#formName').val();
		var lastName = $('#formLastName').val();
		var html = "";

		if(name == "") {
			html += 'voornaam is leeg. <br>';
			check = false;
		} else {
			var re = /^[A-Za-z]+$/;
			if(re.test(name)) {
				//console.log('name is valid');
			} else {
				check = false;
				html += 'voornaam bevat geen geldige tekens. <br>';
			}
		}
		if(lastName == "") {
			html += 'achternaam is leeg. <br>';
			check = false;
		} else {
			var re = /^[A-Za-z]+$/;
			if(re.test(lastName)) {
			} else {
				check = false;
				html += 'achternaam bevat geen geldige tekens. <br>';
			}
		}
		$('#formWarning').html(html);
		if(check === true) {
			var post = {};
			post.action = 'checkForm';
			post.name = name;
			post.lastName = lastName;
			console.log(post);
			$.ajax({
				type: "POST",
				url: 'Router.php',
				data: post,
				success: function(data){
					loadUsers();
				}
			});
		}
	})
}
