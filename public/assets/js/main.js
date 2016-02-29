


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

var $carrousel = $('#carrousel'),
$img = $('#carrousel img'),
indexImg = $img.length - 1,
i = 0,
$currentImg = $img.eq(i);

$img.css('display', 'none'); // on cache les images
$currentImg = $img.eq(i); // on définit la nouvelle image
$currentImg.css('display', 'block'); // puis on l'affiche

function slideImg(){
	setTimeout(function(){ // on utilise une fonction anonyme

    if(i < indexImg){ // si le compteur est inférieur au dernier index
    i++; // on l'incrémente
	}
	else{ // sinon, on le remet à 0 (première image)
	i = 0;
	}

$img.css('display', 'none');

$currentImg = $img.eq(i);
$currentImg.css('display', 'block');

slideImg(); // on oublie pas de relancer la fonction à la fin

}, 5000); // on définit l'intervalle à 5000 millisecondes (5s)
}

slideImg(); // enfin, on lance la fonction une première fois

});
