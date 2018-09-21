$(document).ready(function(){

var root = "http://localhost/cms/";

//login
$(".btnUserLogIn").on("click",function(){

		var email = $(".txtEmailLoginUser").val().trim(),
			pass = $(".txtPassLoginUser").val().trim();
			
			$.ajax({
				type: "POST",
				url: root + "res/php/user_actions/login.php",
				data: {
					//como lo recibe el servidor -- nombre variable
					email: email,
					pass: pass
				},
				//cuando el servidor haya obtenidola informacion ejecutara lo siguiente
				success: function(data){
					console.log(data);
					if (data == "true") {
						window.location.href = "http://localhost/cms/";
					}else{
						alert("Sus credenciales no coinciden");
					}
					console.log(data);
				}
			});	
	});

	$(".btnRegisterUser").on("click", function(){
		var name = $(".txtNameRegister").val().trim(),
			last_name = $(".txtLastNameRegister").val().trim(),
			username = $(".txtUsernameRegister").val().trim(),
			email = $(".txtEmailRegister").val().trim(),
			pass = $(".txtPassRegister").val().trim();
			self = this;

			if(name !== "" && last_name !== "" && username !== "" && email !== "" && pass !== ""){
				//enviar datos con ajax
				$.ajax({
					type:"POST",
					url: root + "res/php/user_actions/register.php",
					data:{
						name: name,
						last_name: last_name,
						username: username,
						email: email,
						pass: pass
					},
					beforeSend: function(){
						$(self).addClass("loading");
					},
					success: function(data){
						$(self).removeClass("loading");
						if (data > 0) {
							$(".txtNameRegister,.txtLastNameRegister,.txtUsernameRegister,.txtEmailRegister,.txtPassRegister").val("");
							alert("Usuario registrado con exito");
						}else{
							alert("Hubo un error al registrar el usuario o Usuario/email ya existen.");
						}
					},
					error: function(){
						$(self).removeClass("loading");
						alert("Error");
					}
				});

			}else{
				alert("Rellene todos los campos.");
			}		
	});
	$(".btnMarkFavorite").on("click",function(){
		var post_id = $(this).attr("data-postId");
		$.ajax({
			type: "POST",
			url: root + "res/php/user_actions/favorite.php",
			data: {
				post_id: post_id
			},
			success: function(data){
				console.log(data);
				if(data == "true"){
					alert("Articulo agregado a favoritos");
				}else{
					alert("Error al anhadir a favoritos");

				}
			}
		});
	});
});