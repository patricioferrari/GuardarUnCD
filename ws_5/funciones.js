function GuardarCd()
{

	//alert("Entro al Javascript");

	//ENTRO AL ALERT DE ARRIBA.

		
		var cantante=$("#cantante").val();
		var titulo=$("#titulo").val();
		var anio=$("#anio").val();
		

		$.ajax
		({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"GuardarCD",
			cantante:cantante,
			titulo:titulo,
			anio:anio	
		}}).then(function ok(exito)
		{
			alert(exito);


		},function fail(error){

			alert("Error");

		});
		

}