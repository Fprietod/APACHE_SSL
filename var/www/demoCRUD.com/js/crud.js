$(document).ready(function(e) {
	$(".modal").modal();
	$("#modalFormUpd #sexo").material_select();
	$("#nvoEst").on("click",function(){
		$("#modalFormIns #sexo").material_select();
		$("#modalFormIns").modal("open");
	});
		
    $(".eliminar").click(function(e) {
        var boletaDel = $(this).attr("data-eliminar");
		$.confirm({
			title:"TWeb - 20181",
			content:"Desea eliminar el registro de la boleta: "+boletaDel,
			type:"blue",
			useBootstrap:false,
			boxWidth:"50%",
			buttons:{
				confirm:function(){
					$.ajax({
						method:"post",
						url:"delete_AX.php",
						cache:false,
						data:{boleta:boletaDel},
						success:function(respAX){
							if(respAX == 1){
								$.alert({
									title:"TWeb - 20181",
									content:"El registro se eliminó correctamente",
									type:"green",
									useBootstrap:false,
									boxWidth:"50%",
									onClose:function(){
										location.reload(true);
									}
								})
							}else{
								$.alert({
									title:"TWeb - 20181",
									content:"Se presentaron problemas en la operación. Vuelve a intentarlo",
									type:"red",
									useBootstrap:false,
									boxWidth:"50%"
								})
							}
						}
					})
				},
				cancel:function(){
					//
				}
			}
		})
    });
	
	$(".editar").click(function(e) {
        var boletaUpd = $(this).attr("data-editar");
		$.ajax({
			method:"post",
			url:"loadUpd_AX.php",
			data:{boleta:boletaUpd},
			cache:false,
			success: function(respAX){
				var infBoleta = JSON.parse(respAX);
				$("#formUpd #boleta").val(infBoleta.boleta);
				$("#formUpd #nombre").val(infBoleta.nombre);
				$("#modalFormUpd #primerApe").val(infBoleta.primerApe);
				$("#modalFormUpd #segundoApe").val(infBoleta.segundoApe);
				$("#modalFormUpd #sexo").val(infBoleta.sexo);
				$("#modalFormUpd #correo").val(infBoleta.correo);
				$("#modalFormUpd #sexo").material_select();
				Materialize.updateTextFields();
				$("#modalFormUpd").modal("open");
			}
		})
    });
		
	$(".ver").click(function(e) {
        var boletaVer = $(this).attr("data-ver");
		$.ajax({
			method:"post",
			url:"read_AX.php",
			cache:false,
			data:{boleta:boletaVer},
			success: function(respAX){
				var obj = JSON.parse(respAX);
				var cadenaHTML = "<p class='flow-text'><i class='fa fa-id-card blue-text'></i> "+obj.boleta+"<br><i class='fa fa-user-circle-o blue-text'></i> "+obj.nombre+" "+obj.primerApe+" "+obj.segundoApe+"<br><i class='fa fa-venus-mars blue-text'></i> "+obj.sexo+" "+"<br><i class='fa fa-envelope blue-text'></i> "+ obj.correo +"</p>";
				$("#respAX").html(cadenaHTML);
				$("#modalAX").modal("open");
			}
		});
    });
	
	$("#modalFormUpd").validetta({
		bubblePosition:"bottom", bubbleGapTop:10, bubbleGapLeft:-5,
		onValid:function(e){
			e.preventDefault();
			$("#modalFormUpd").modal("close");
			$.ajax({
				method:"post",
				url:"update_AX.php",
				data:$("#formUpd").serialize(),
				cache:false,
				success: function(respAX){
					if(respAX == 1){
						$.alert({
							title:"TWeb - 20181",
							content:"Se actualizó correctamente el registro seleccionado",
							type:"green",
							useBootstrap:false,
							boxWidth:"50%",
							onClose:function(){
								location.reload(true);
							}
						});
					}else{
						$.alert({
							title:"TWeb - 20181",
							content:"No se pudo actualizar el registro. Vuelva a intentarlo",
							type:"red",
							useBootstrap:false,
							boxWidth:"50%"
						});
					}
				}
			})
		}
	});
	
	$("#modalFormIns").validetta({
		bubblePosition:"bottom", bubbleGapTop:10, bubbleGapLeft:-5,
		onValid:function(e){
			e.preventDefault();
			$("#modalFormIns").modal("close");
			$.ajax({
				method:"post",
				url:"create_AX.php",
				data:$("#formIns").serialize(),
				cache:false,
				success: function(respAX){
					if(respAX == 1){
						$.alert({
							title:"TWeb - 20181",
							content:"Se agregó correctamente el estudiante",
							type:"green",
							useBootstrap:false,
							boxWidth:"50%",
							onClose:function(){
								location.reload(true);
							}
						});
					}else{
						$.alert({
							title:"TWeb - 20181",
							content:"No se pudo insertar el registro. Vuelva a intentarlo",
							type:"red",
							useBootstrap:false,
							boxWidth:"50%"
						});
					}
				}
			})
		}
	});
	
});