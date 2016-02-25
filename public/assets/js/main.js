


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


// chargement de Fancybox
	$('.fancybox').fancybox();





// **************************************************************
// Chargement de la logique de liste de pays + drapeau affilié
// **************************************************************

var $countryTravel = $('#countryTravelId');
var $drapeau = $('#drapeauId');

// je charge la liste des pays
chargerOptions( $countryTravel );

// gestion du changement de pays
$countryTravel.change(function(){
	var codePays = $(this).val(); // var codePays = this.value;
	console.log('le pays a changé : ' + codePays);

	// les drapeaux vont être modifiés
	// selon la sélection de l'internaute
	ajusterDrapeauAvecPays( $drapeau, $countryTravel );

});



// **************************************************************

});
