


$( document ).ready(function() {

	console.log("JQuery chargé");





// Ici la logique du menu déroulant conteant la liste des pays.
// 1. Lorsque la souris passe sur le bouton on affiche le menu
	$( "#btnDestination" ).mouseover(
		function() {
			$("#navDestination").show();
		}
	);
// 2. Lorsque la souris passe sur le menu on le laisse afficher

	$( "#navDestination" ).mouseover(
		function() {
			$("#navDestination").show();
		}
	);

// 3. Lorsque la souris sors du menu on le fait disparaitre

	$( "#navDestination" ).mouseout(
		function() {
			$("#navDestination").hide();
		}
	);



});
