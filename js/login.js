
$(document).ready(function(){

	$("#bAcessar").click(function(){

		if ($("#login").val() == '' && $("#senha").val() == '') {
			alert("Há campos sem preencher.");
		}

		if ($("#login").val() == 'admin' && $("#senha").val() == '123') {
			window.location.replace("paginas/mail.html");
			alert("Logado com sucesso!");
		}
	});	

});