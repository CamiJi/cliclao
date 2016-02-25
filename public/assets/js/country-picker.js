/* ici la logique de chargement des options */

function chargerOptions( $pays ) {
	// 1. si la liste est vide, je charge les données
	// cad toute la liste des codes de pays et leurs noms
	var optionsPresentes = ($pays.has('option').length > 0);

	if (!optionsPresentes) {

		// je parcours mon objet
		// et je remplis la liste des options
		for(var codePays in COUNTRIES) {

			// construction d'un option
			var nomPays = COUNTRIES[codePays];
			var optionElement = '<option value="'+codePays+'">'+nomPays+'</option>';

			// j'ajoute chaque option dans la liste des options
			$pays.append( optionElement );
		}


	}
}


/* ici toute la logique du sélecteur de pays */

function ajusterDrapeauAvecPays( $drapeau, $pays ) {

	// je récupère le pays actuellement sélectionné
	// dans la liste de sélection du pays
	var paysChoisi = $pays.val();
	var codeDrapeau = paysChoisi.toLowerCase();
	var classDrapeau = 'flag flag-' + codeDrapeau;

	// pour changer le drapeau affiché
	// il faut changer la classe css de l'élément drapeau
	$drapeau.attr('class', classDrapeau);

}