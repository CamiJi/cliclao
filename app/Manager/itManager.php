<?php 
namespace Manager;

class ItManager extends \W\Manager\Manager 
{

	public function findByVoyageId($id){

		$sql = "SELECT * FROM voyages WHERE id = :id";

		// Ma requête va chercher mes infos concernant chaque jour du voyage proposé dans la table days. Elle va aussi rapporté grâce à un cross join intégrer les infos relative au voyage qui contient chacun des jours.

		$sth = $this->dbh->prepare($sql);
		$sth->bindValue(":id", $id);
		$sth->execute();

		return $sth->fetchAll();
	}


	public function findDaysByVoyageId($id){

		$sql = "SELECT * FROM `days` WHERE `voyage_id`= :id ORDER BY ordering";

		// Ma requête va chercher mes infos concernant chaque jour du voyage proposé dans la table days. Elle va aussi rapporté grâce à un cross join intégrer les infos relative au voyage qui contient chacun des jours.

		$sth = $this->dbh->prepare($sql);
		$sth->bindValue(":id", $id);
		$sth->execute();

		return $sth->fetchAll();
	}




}