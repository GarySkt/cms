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
	
	
	/*cx*/
	/*pom*/
	/*eliminar pom*/
	$(".tblpom").on("click",".btnRemovePom",function(){
		var pom_id = $(this).attr("dataPomID")
		self = this;
		//console.log(pom_id);

		$.ajax({
			type: "POST",
			url: root + "res/php/admin_actions/delete_pom.php",
			data: {
				pom_id: pom_id
			},
			//cuando regrese la respuesta de la peticion
			success: function(data){
				console.log(data);
				if (data > 0) {
					$(self).parent().parent().remove();//parent(td).parent(tr).remover
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
	/*end eliminar pom*/
	/*save pom*/

	$(".btnSavePom").on("click", function(e){
		//evitar que se llame el formulario
		e.preventDefault();	//prevenir funcionamiento normal de recargar toda la pagina	
		var namepom = $('.txtnamepom').val().trim();
			//chequear q los campos no esten vacios
			if(namepom !== "") {
				//subir publicacion
				//contiene toda la informacion del formulario
				var formData = new FormData($("#agregar_pom_container")[0]);
				console.log(formData)				
				$.ajax({
					//xhr request de http
					xhr: function(){
						var xhr = new window.XMLHttpRequest();
						//cada vez q avance el progreso esto se ejecuta
						xhr.upload.addEventListener("progress", function(evt){
							//lenghcomputable retorna verdadero o false
							if (evt.lenghtComputable) {
								var percentComplete = evt.loaded / evt.total;
								percentComplete = parseInt(percentComplete * 100);
								console.log(percentComplete);
							}
						},false);
						return xhr;
					},
					type: "POST",
					url: root + "res/php/admin_actions/save_pom.php",
					data: formData,
					processData: false,
					contentType: false,
					beforeSend: function(){						
					},
					success: function(data){
						//vaciar cajas de texto
						console.log(data);
						$('.txtnamepom,.pom_file').val("");
						//vaciar textarea - contenido post						
						alert("Se subio el Archivo");
					},
					error: function(){
						alert("Error");
					}
				});

			}else{
				alert("Llene todos los campos.");
			}
		
	});
	/*end save pom*/
	/*end pom*/

	/*sectores de exportacion*/
	/*guardar sector de exportacion*/
	$(".btnSaveSE").on("click", function(e){
		//evitar que se llame el formulario
		e.preventDefault();	//prevenir funcionamiento normal de recargar toda la pagina	
		var sector = $('.txtNameSector').val().trim(),//obteniendo infomracion del ckeditor
			producto_exportado = $('.txtProductoExportado').val().trim(),
			mercado_exportacion=$('.txtMercadoExportacion').val().trim(),
			total_fob=$('.txtTotalFOB').val().trim();
			//chequear q los campos no esten vacios
			if(sector !== "" && producto_exportado !== "" && mercado_exportacion !== "" && total_fob != "") {
				//subir publicacion
				//contiene toda la informacion del formulario
				var formData = new FormData($("#new_posts_container")[0]);
				//agregar descripcion con append
				//formData.append("description",description);

				$.ajax({
					//xhr request de http
					xhr: function(){
						var xhr = new window.XMLHttpRequest();
						//cada vez q avance el progreso esto se ejecuta
						xhr.upload.addEventListener("progress", function(evt){
							//lenghcomputable retorna verdadero o false
							if (evt.lenghtComputable) {
								var percentComplete = evt.loaded / evt.total;
								percentComplete = parseInt(percentComplete * 100);
								console.log(percentComplete);
							}
						},false);
						return xhr;
					},
					type: "POST",
					url: root + "res/php/admin_actions/save_se.php",
					data: formData,
					processData: false,
					contentType: false,
					beforeSend: function(){
						
					},
					success: function(data){
						//vaciar cajas de texto
						console.log(data);
						$('.txtNameSector,.txtProductoExportado,.txtMercadoExportacion,.txtTotalFOB,.image_file').val("");
						//vaciar textarea - contenido post						
						alert("Se subio la publicacion");
					},
					error: function(){
						alert("Error");
					}
				});

			}else{
				alert("Llene todos los campos.");
			}
		
	});
	/*end guardar sector exportacion*/

	/*eliminar sector*/
	$(".tblSE").on("click",".btnRemoveSE",function(){
		var id_se = $(this).attr("dataSEID")
		self = this;
		//console.log(se_id);

		$.ajax({
			type: "POST",
			url: root + "res/php/admin_actions/delete_se.php",
			data: {
				id_se: id_se
			},
			//cuando regrese la respuesta de la peticion
			success: function(data){
				console.log(data);
				if (data > 0) {
					$(self).parent().parent().remove();//parent(td).parent(tr).remover
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
	/*end eliminar sector*/
	/*end sectores de exportacion*/
	/*end cx*/

	/*Artesania*/
	/*Asociaciones Artesanales*/

$(".btnSaveAsocArt").on("click", function(e){
		//evitar que se llame el formulario
		e.preventDefault();	//prevenir funcionamiento normal de recargar toda la pagina	
		var asociacion = $('.txtAsociacion').val().trim(),//obteniendo infomracion del ckeditor
			presidente = $('.txtPresidente').val().trim(),
			telefono=$('.txtTelefono').val().trim(),
			direccion=$('.txtDireccion').val().trim(),
			email=$('.txtEmail').val().trim();
			//chequear q los campos no esten vacios
			if(asociacion !== "" && presidente !== "" && telefono !== "" && direccion != "" && email != "") {
				//subir publicacion
				//contiene toda la informacion del formulario
				var formData = new FormData($("#new_posts_container")[0]);
				//agregar descripcion con append
				//formData.append("description",description);

				$.ajax({
					//xhr request de http
					xhr: function(){
						var xhr = new window.XMLHttpRequest();
						//cada vez q avance el progreso esto se ejecuta
						xhr.upload.addEventListener("progress", function(evt){
							//lenghcomputable retorna verdadero o false
							if (evt.lenghtComputable) {
								var percentComplete = evt.loaded / evt.total;
								percentComplete = parseInt(percentComplete * 100);
								console.log(percentComplete);
							}
						},false);
						return xhr;
					},
					type: "POST",
					url: root + "res/php/admin_actions/save_asocart.php",
					data: formData,
					processData: false,
					contentType: false,
					beforeSend: function(){
						
					},
					success: function(data){
						//vaciar cajas de texto
						console.log(data);
						$('.txtAsociacion,.txtPresidente,.txtTelefono,.txtDireccion,.txtEmail').val("");
						//vaciar textarea - contenido post						
						alert("Se agrego la Asociacion Artesanal");
					},
					error: function(){
						alert("Error");
					}
				});

			}else{
				alert("Llene todos los campos.");
			}
		
	});
	/*End Asociaciones Artesanales*/
	/*End Artesania*/


	$(".btnSavePost").on("click", function(e){
		//evitar que se llame el formulario
		e.preventDefault();	//prevenir funcionamiento normal de recargar toda la pagina	
		var description = CKEDITOR.instances.txtDescripcion.getData(),//obteniendo infomracion del ckeditor
			name = $('.txtNamePost').val().trim(),
			category_id=$('.txtCategoryPost').val().trim();
			//chequear q los campos no esten vacios
			if(description !== "" && name !== "" && category_id>0) {
				//subir publicacion
				//contiene toda la informacion del formulario
				var formData = new FormData($("#new_posts_container")[0]);
				//agregar descripcion con append
				formData.append("description",description);

				$.ajax({
					//xhr request de http
					xhr: function(){
						var xhr = new window.XMLHttpRequest();
						//cada vez q avance el progreso esto se ejecuta
						xhr.upload.addEventListener("progress", function(evt){
							//lenghcomputable retorna verdadero o false
							if (evt.lenghtComputable) {
								var percentComplete = evt.loaded / evt.total;
								percentComplete = parseInt(percentComplete * 100);
								console.log(percentComplete);
							}
						},false);
						return xhr;
					},
					type: "POST",
					url: root + "res/php/admin_actions/new_post.php",
					data: formData,
					processData: false,
					contentType: false,
					beforeSend: function(){
						
					},
					success: function(data){
						//vaciar cajas de texto
						console.log(data);
						$('.txtNamePost,.image_file').val("");
						//vaciar textarea - contenido post
						CKEDITOR.instances['txtDescripcion'].setData("");
						alert("Se subio la publicacion");
					},
					error: function(){
						alert("Error");
					}
				});

			}else{
				alert("Llene todos los campos.");
			}
		console.log(description);
	});

	//delete post
	$(".tblPosts").on("click",".btnRemovePost",function(){
		var id_post = $(this).attr("dataPostID")
					self = this;
		//console.log(category_id);

		$.ajax({
			type: "POST",
			url: root + "res/php/admin_actions/delete_post.php",
			data: {
				id_post: id_post
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
	
	//end delete post
	//new list grid btn
	document.getElementById("btnNewPost").onclick = function () {
        location.href = "new_post";
    };
     document.getElementById("btnListPosts").onclick = function () {
        location.href = "all_posts_list";
    };

    document.getElementById("btnGridPosts").onclick = function () {
        location.href = "all_posts";
    };
    //end new list grid btn


	
});