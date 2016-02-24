<?php 
namespace Manager;

class ItManager extends \W\Manager\Manager 
{

	public function findByVoyageId($id){

		$sql = "SELECT days.id , voyages.name as voyage_name , `description_voyage` , `budget`, days.name as day_name , bodyText, ordering FROM voyages CROSS JOIN days WHERE voyage_id = :id ORDER BY ordering";

		// Ma requête va chercher mes infos concernant chaque jour du voyage proposé dans la table days. Elle va aussi rapporté grâce à un cross join intégrer les infos relative au voyage qui contient chacun des jours.

		$sth = $this->dbh->prepare($sql);
		$sth->bindValue(":id", $id);
		$sth->execute();

		return $sth->fetchAll();
	}




}