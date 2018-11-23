
function guardar_pom(){	
	var parametro = new FormData($("#formulario-envia")[0]);
	$.ajax({
		data: parametro,
		url: "../res/php/admin_actions/upload_pom.php",
		type: "POST",
		contentType: false,
		processData: false,
		beforesend: function(){

		},
		succes: function(response){
			alert(response);
		}
	});
} 