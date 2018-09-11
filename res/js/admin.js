//ejecutara despues de cargar
$(document).ready(function(){

	var root = "http://localhost/cms/";
//ckeeditor
try	{
	CKEDITOR.replace('txtDescripcion');

}catch(e){}


	//login
	$(".btnAdminLogIn").on("click",function(){

		var email = $(".txtEmailLogin").val().trim(),
			pass = $(".txtPassLogin").val().trim();
			
			$.ajax({
				type: "POST",
				url: root + "res/php/admin_actions/login.php",
				data: {
					//como lo recibe el servidor -- nombre variable
					email: email,
					pass: pass
				},
				//cuando el servidor haya obtenidola informacion ejecutara lo siguiente
				success: function(data){
					if (data == "true") {
						window.location.href = "http://localhost/cms/admin/";
					}else if(data == "false"){
						alert("Sus credenciales no coinciden");
					}
					console.log(data);
				}
			});	
	});

	$(".btnSaveCategory").on("click",function(){
		var category_ = $('.txtNameCategory').val().trim() 
			self = this;

		$.ajax({
			type: "POST",
			url: root + "res/php/admin_actions/save_category.php",
			data: {
				category: category_
			},
			//antes de que se envie la peticion al servidor
			beforeSend: function(){
				$(self).addClass("loading");
			},
			//cuando regrese la respuesta de la peticion
			success: function(data){
				$(self).removeClass("loading");
				if (data > 0) {
					alert("Se guardo correctamanente");
					$('.txtNameCategory').val("");

					//despues de la ultima fima anhadir el tr
					$('.tblCategories tr:last').after('<tr><td>'+category_+'</td><td><i class="fas fa-trash btnRemoveCategory" dataCategoryID="'+data+'" style="color: #ff2a00; cursor: pointer; title="Eliminar Categoria"></i></td></tr>')

				}else{
					alert("Hubo un error al guardar");
				}
				//console.log(data);
			},
			error: function(){
				alert("Se ha producido un error.");
			}
		});
	});

	$(".tblCategories").on("click",".btnRemoveCategory",function(){
		var category_id = $(this).attr("dataCategoryID")
					self = this;
		//console.log(category_id);

		$.ajax({
			type: "POST",
			url: root + "res/php/admin_actions/delete_category.php",
			data: {
				category_id: category_id
			},
			//cuando regrese la respuesta de la peticion
			success: function(data){
				console.log(data);
				if (data > 0) {
					$(self).parent().parent().remove();				
					alert("Eliminado");

				}else{
					alert("Hubo un error.");

				}				
			},
			error: function(){
				alert("Se ha producido un error.");
			}
		});
	});
});