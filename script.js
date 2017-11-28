

function vacansies() {
	delAll();
	document.getElementById("netVac").classList.remove('invis');
}
function showInfo() {
    delAll();
	document.getElementById("aboutText").classList.remove('invis');
}
function contact(){
	delAll();
	document.getElementById("reun").classList.remove('invis');
}
function application(){
	delAll();
	document.getElementById("formApp").classList.remove('invis');
}
function delAll(){
	document.getElementById("aboutText").classList.add('invis');
	document.getElementById("reun").classList.add('invis');
	document.getElementById("netVac").classList.add('invis');
	document.getElementById("formApp").classList.add('invis');
}
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
