//Widget principal div con tres tablas----------------------------

$('#myTabs a').click(function (e) {
  e.preventDefault();
  $(this).tab('show');
});

// Mostrar y ocultar elementos en diferentes twig para editar------------------

$(document).ready(function(){
   $("#editar").click(function(){
      
   		$("#editarPerfil").css("display", "block");
   		$("input").prop('disabled', false);


   		if ($("#editarPerfil").css("display", "block")){

   			$("#editar").css("display", "none");
		}	
   		
	});
}); 