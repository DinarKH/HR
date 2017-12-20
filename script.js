
$(document).ready(function() {
	$("#form").submit(function() {
		$.ajax({
			type: "POST",
			url: "server.php",
			data: $(this).serialize()
		}).error(function() {
			alert("Что-то пошло не так");
		}).success(function(data) {
			alert(data);
		});
		return false;
	});
	
});
