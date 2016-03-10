<?php 

namespace Controller;

use \W\Controller\Controller;

use \Manager\AddTravelManager;

use \DateTime;

class AddtravelController extends Controller
{


	public function index()
	{
		$this->show('add_travel/index');
	}


	public function addTravel()
	{
	
		// debug($_POST);
		// debug($_SESSION);
		// debug($_FILES);
		// die();


		// 1.J'initialise la direction du dossier "réceptacle"

		$imagesDir = __DIR__.'/../../public/assets/uploads/';



		// 2 . Récupération des données à traiter

		// 2.1 Je récupère les informations  $_Files $_Post & $_SESSION dans des valeurs.

		$nomPhoto = trim(htmlentities($_FILES['photoTravel']['name']));
		$uploadFileType = trim(htmlentities($_FILES['photoTravel']['type']));
		$uploadFilesSize = trim(htmlentities($_FILES['photoTravel']['size']));

		$travelName = trim(htmlentities($_POST['travelName']));
		$travelPrice = trim(htmlentities($_POST['travelPrice']));
		$countryTravel = trim(htmlentities($_POST['countryTravel']));
		$travelDescription = trim(htmlentities($_POST['travelDescription']));
		$travelDifficulty = trim(htmlentities($_POST['diff']));
		$travelCgu = trim(htmlentities($_POST['cgu']));

		$travelOwnerId = trim(htmlentities($_SESSION['user']['id']));

		// 2.2 On récupère la date , tranquillou bilou pour pouvoir l'insérer dans notre BDD

		$date = new DateTime();
		

		// 3.J'initie un tableau d'erreurs

		$errors = [];



		// 4.J'initie un nouveau manager qui sera chargé de traiter mes données et de les mettre en relation avec ma table "voyages" dans la base de données

		$addTravelManager = new AddTravelManager(); 
		$addTravelManager->setTable('voyages');



		// 5. J'opère ici les vérifications pour m'assurer que l'utilisateurs à correctement remplie les champs correctement et que la photo à un format correct

		// photo = size > 0 et type = jpeg || png || gif

			// 5.1 On vérifie le nom du voyage
		if(empty($travelName)) {
			$errors['travelName']= "<span class='bg-danger'>Le nom du voyage est obligatoire !</span>";
		}
		elseif(strlen($travelName) < 2 || strlen($travelName) > 45) {
			$errors['travelName'] = "<span class='bg-danger'>Le nom du voyage doit être au minimum de 5 caractères et au maximum de 45 carcactères ! </span>" ;
		}


			// 5.2 On vérifie le prix du voyage
		if(empty($travelPrice)) {
			$errors['travelPrice']= "<span class='bg-danger'>Le prix du voyage est obligatoire !</span>";
		}
		elseif($travelPrice < 200 || $travelPrice > 8000) {
			$errors['travelPrice'] = "<span class='bg-danger'>Le prix du voyage doit être de 200€ par personne au minimum (hors-vol) et de 8000€ au maximum ! </span>" ;
		}


			// 5.3 on vérifie le pays
		if(empty($countryTravel)) {
			$errors['countryTravel'] = "<span class='bg-danger'>Le pays du voyage est obligatoire !</span>";
		}

			// 5.4 On vérifie la description
		if(empty($travelDescription)) {
			$errors['travelDescription']= "<span class='bg-danger'>La description du voyage est obligatoire !</span>";
		}
		elseif(strlen($travelDescription) < 500 || strlen($travelDescription) > 1000) {
			$errors['travelDescription'] = "<span class='bg-danger'> La description du voyage doit être de 500 à 1000 caractères ! </span>" ;
		}


			// 5.5 On vérifie les CGU
		if($travelCgu !== "check") {
			$errors['travelCGU']= "<span class='bg-danger'>Les CGU doivent être lues et cochées !</span>";
		}



			// 5.6 On vérifie la photo
		if(empty($nomPhoto)) {
			$errors['photoName'] = "<span class='bg-danger'>Une photo est obligatoire !</span>";
		}
		elseif($uploadFilesSize < 1) {
			$errors['photoSize'] = "<span class='bg-danger'>Il n'y a pas d'image !</span>";
		}
		elseif(!strstr($uploadFileType, 'jpg') && !strstr($uploadFileType, 'jpeg') && !strstr($uploadFileType, 'png') && !strstr($uploadFileType, 'gif')){

			$errors['photoType'] = "<span class='bg-danger'>Seuls les fichiers Jpeg, Png et Gif sont acceptés!</span>";
		}
		elseif($uploadFilesSize > 10000000) {
			$errors['photoSize'] = "<span class='bg-danger'>L'image ne doit pas dépasser 10 Mo !</span>";;
		}




// **************************************************************************
// //////////////////////////////////////////////////////////////////////////
// **************************************************************************

		// 6. Si tout est OK, on envoi la procédure d'insertion dans la BDD

		if (empty($errors)) {

			$resultAddTravel = $addTravelManager->insert([

				'name' => $travelName,
				'budget' => $travelPrice,
				'description_voyage' => $travelDescription,
				'difficulte' => $travelDifficulty,
				'user_id' => $travelOwnerId,
				'created_at' => $date->format('Y-m-d H:i:s'),
				'updated_at' => $date->format('Y-m-d H:i:s'),

				'img_voyage' => 'uploads/'.$nomPhoto,

				'country_id' => $countryTravel,


			]);
				


			if ($resultAddTravel) {

				move_uploaded_file($_FILES['photoTravel']['tmp_name'], $imagesDir.$nomPhoto);

				$admission = "<span class='bg-info'>Merci pour votre voyage !</span>";


			$this->show('add_travel/index',['admission' => $admission , 'errors' => $errors]);

			}
			
		}
		else {
			
		https://www.grafikart.fr/tutoriels/php/intervention-image-375
	
		$this->show('add_travel/index', ['errors' => $errors]);
		}
	}

}